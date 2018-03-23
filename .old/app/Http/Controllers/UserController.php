<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\CreateProfileRequest;
use App\Http\Requests\UpdateProfileRequest;
use App\Repositories\ProfileRepository;
use App\Repositories\UserRepository;
use App\Repositories\WebsiteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;

use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

use App\Models\Profile;
use App\Models\User;
use App\Models\Website;
use Illuminate\Support\Str;
use Webpatser\Uuid\Uuid;
use File;
use Input;
use Carbon\Carbon;
use Hash;

class UserController extends AppBaseController
{
    /** @var  UserRepository */
    private $userRepository;
    private $profileRepository;
    private $websiteRepository;

    public function __construct(UserRepository $userRepo, ProfileRepository $profileRepo, WebsiteRepository $websiteRepo, User $user)
    {
        $this->userRepository = $userRepo;
        $this->profileRepository = $profileRepo;
        $this->websiteRepository = $websiteRepo;
        $this->user = $user;
        view()->share('type', 'user');
    }


	/**
	 * @return array
	 */
	public function progress()
	{
		return Chart::dataTable()->source(UserSource::class)->toArray();
	}

    /**
     * Display a listing of the User.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->userRepository->pushCriteria(new RequestCriteria($request));
        $users = $this->userRepository->all();

        //return $users;
         return view('users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new User.
     *
     * @return Response
     */
    public function create()
    {

        return view('users.create');
    }

    /**
     * Store a newly created User in storage.
     *
     * @param CreateUserRequest $request
     *
     * @return Response
     */
    public function store(CreateUserRequest $request)
    {

        $input = $request->all();
        $email = $input['email'];
        //dd($email);
        $input['confirmation_code'] = Hash::make( $email . time() );
        $input['name'] =  $request->profile['first_name'] . ' ' . $request->profile['last_name'];
        $input['username'] = studly_case($request->profile['first_name'] . $request->profile['last_name']);

        // $input['']
		// $first = $request['profile[first_name]'];

		// dd($first);
		// Input::merge(['username' => Input::get('profile[first_name]') . " " . Input::get('profile[last_name]')]);



        $user = $this->userRepository->create($input);


        // dd($user->id);

        $UID = $user->id;

        $profile = Profile::create([
        	"user_id" =>  $UID,
            // "uuid" => Uuid::generate(3, $user->name, Uuid::NS_DNS),
            "uuid" => Uuid::generate(3, $request->profile['first_name'] . $request->profile['last_name'], Uuid::NS_DNS),
            "first_name" => $request->profile['first_name'],
            "last_name" => $request->profile['last_name'],
            // "about_me" => $request->profile['about_me'],
            // "company" => $request->profile['company'],

            "slug" => $user->name = Str::slug($user->name, '-')
        ]);


		// $input['slug'] = Str::slug($user->name, '-');
        /*
         * Linking the websites to the profile
         */
        if(!empty($request->websites)) {
            foreach ($request->websites as $website_id) {
		        Website::create([
					"website_name" => request('website_name'),
					"website" => request('website'),
					"profile_id" => $user->id,
		        ]);
            }
        }


        // if ($request->hasFile('userInfo')) {
        //     $dest = 'uploads/users/' . $user->username . '/photos/';
        //     //File::delete(public_path().$user->userInfo->photo);
        //     $name = str_random(11) . '_' . $request->file('userInfo')['photo']->getClientOriginalName();
        //     $request->file('userInfo')['photo']->move($dest, $name);

        //     $userInfo->where('user_id', $user->id)->update(['photo' => '/' . $dest . $name]);
        // }

        Flash::success('User saved successfully.');

        return redirect(route('users.index'));
    }

    /**
     * Display the specified User.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $user = $this->userRepository->findWithoutFail($id);


        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        return view('users.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified User.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit(User $user, Profile $profile, Website $website)
    {
        $user = $this->userRepository->findWithoutFail($user->id);
        $profile = $this->profileRepository->findWithoutFail($profile->id);
        $website = $this->websiteRepository->findWithoutFail($website->id);

        // dd($user);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        return view('users.edit', compact('user', 'profile'));
    }

    /**
     * Update the specified User in storage.
     *
     * @param  int              $id
     * @param UpdateUserRequest $request
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        $user = $this->userRepository->findWithoutFail($id);
        $profile = $this->profileRepository->findWithoutFail($profile->id);
        $website = $this->websiteRepository->findWithoutFail($website->id);


        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }
 // dd($user);


        $user = $this->userRepository->update($request->all(), $id);




        $profile = Profile::update([
            "uuid" => Uuid::generate(3, $user->name, Uuid::NS_DNS),
            "first_name" => request('first_name'),
            "last_name" => request('last_name'),
            "user_id" => $user->id,
            "slug" => request('first_name') . ' ' . request('last_name')
        ]);


                /*
         * Linking the websites to the profile
         */
        if(!empty($request->websites)) {
            foreach ($request->websites as $website_id) {
		        Website::update([
					"website_name" => request('website_name'),
					"website" => request('website'),
					"profile_id" => $user->id,
		        ]);
            }
        }

        Flash::success('User updated successfully.');

        return redirect(route('users.index'));
    }

    /**
     * Remove the specified User from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $user = $this->userRepository->findWithoutFail($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        $this->userRepository->delete($id);

        Flash::success('User deleted successfully.');

        return redirect(route('users.index'));
    }

    public function datatable(UsersDataTable $dataTable)
    {
        return $dataTable->render('users.datatable');
    }
}
