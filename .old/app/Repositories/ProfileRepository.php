<?php

namespace App\Repositories;

use App\Models\Profile;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ProfileRepository
 * @package App\Repositories
 * @version January 18, 2018, 5:07 am UTC
 *
 * @method Profile findWithoutFail($id, $columns = ['*'])
 * @method Profile find($id, $columns = ['*'])
 * @method Profile first($columns = ['*'])
*/
class ProfileRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'photo',
        'first_name',
        'last_name',
        'uuid',
        'about_me',
        'website_id',
        'company',
        'gender',
        'phone',
        'mobile',
        'work',
        'other',
        'is_published',
        'is_active',
        'dob',
        'skypeid',
        'githubid',
        'twitter_username',
        'instagram_username',
        'facebook_username',
        'facebook_url',
        'linked_in_url',
        'google_plus_url',
        'slug'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Profile::class;
    }
}
