<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User as Usermodel;


/**
 * @SWG\Definition(
 *      definition="User",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="name",
 *          description="name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="email",
 *          description="email",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="username",
 *          description="username",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="user_visits",
 *          description="user_visits",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="confirmation_code",
 *          description="confirmation_code",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="confirmed",
 *          description="confirmed",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="admin",
 *          description="admin",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="password",
 *          description="password",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="remember_token",
 *          description="remember_token",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="created_at",
 *          description="created_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="updated_at",
 *          description="updated_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="deleted_at",
 *          description="deleted_at",
 *          type="string",
 *          format="date-time"
 *      )
 * )
 */
class User extends Usermodel
{
		use SoftDeletes;

	public $table = 'users';


	protected $dates = ['deleted_at'];


	public $fillable = [

		'name',
		'email',
		'username',
		'user_visits',
		'confirmation_code',
		'confirmed',
		'admin',
		'password',
		'remember_token',
		'deleted_at',
		'profile_id'
	];

	/**
	 * The attributes that should be casted to native types.
	 *
	 * @var array
	 */
	protected $casts = [
		'name' => 'string',
		'email' => 'string',
		'username' => 'string',
		'user_visits' => 'integer',
		'profile_id' => 'integer',
		'confirmation_code' => 'string',
		'confirmed' => 'boolean',
		'admin' => 'boolean',
		'password' => 'string',
		'remember_token' => 'string'
	];

	/**
	 * Validation rules
	 *
	 * @var array
	 */
	public static $rules = [

	];

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasOne
	 **/
	public function profile()
	{
		return $this->hasOne(\App\Models\Profile::class, 'id', 'profile_id');
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 **/
	public function userlocations()
	{
		return $this->hasMany(App\Models\Location::class);
	}

    public function locations() {
        return $this->hasMany(locations::class);
    }

    /**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 **/
	public function analyticsclients()
	{
		return $this->hasMany(App\Models\Analyticsclient::class, 'user_id', 'id');
	}

    /**
     * Generates the value for the User::confirmation_code field. Used to
     * activate the user's account.
     * @return bool
     */
    public function generateConfirmationCode()
    {
        $this->attributes['confirmation_code'] = \Hash::make( $this->email . time() );
        $this->attributes['username'] = studly_case($this->name);

        if( is_null($this->attributes['confirmation_code']) )
            return false; // failed to create confirmation_code
        else
            return true;
    }

    public function location() {
        return $this->belongsTo(Location::class, 'location_user', 'user_id', 'location_id');
    }

	public function getConfirmationCodeAttribute()
    {
        return \Hash::make( $this->email . time() );
    }



}
