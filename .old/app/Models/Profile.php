<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

/**
 * @SWG\Definition(
 *      definition="Profile",
 *      required={""},
 *      @SWG\Property(
 *          property="user_id",
 *          description="user_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="photo",
 *          description="photo",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="first_name",
 *          description="first_name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="last_name",
 *          description="last_name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="uuid",
 *          description="uuid",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="about_me",
 *          description="about_me",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="website_id",
 *          description="website_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="company",
 *          description="company",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="gender",
 *          description="gender",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="phone",
 *          description="phone",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="mobile",
 *          description="mobile",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="work",
 *          description="work",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="other",
 *          description="other",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_published",
 *          description="is_published",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="is_active",
 *          description="is_active",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="dob",
 *          description="dob",
 *          type="string",
 *          format="date"
 *      ),
 *      @SWG\Property(
 *          property="skypeid",
 *          description="skypeid",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="githubid",
 *          description="githubid",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="twitter_username",
 *          description="twitter_username",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="instagram_username",
 *          description="instagram_username",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="facebook_username",
 *          description="facebook_username",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="facebook_url",
 *          description="facebook_url",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="linked_in_url",
 *          description="linked_in_url",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="google_plus_url",
 *          description="google_plus_url",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="slug",
 *          description="slug",
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
 *      )
 * )
 */
class Profile extends Model
{
        use SoftDeletes;

    public $table = 'profiles';


    protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'user_id' => 'integer',
        'photo' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'uuid' => 'string',
        'about_me' => 'string',
        'website_id' => 'integer',
        'company' => 'string',
        'gender' => 'string',
        'phone' => 'string',
        'mobile' => 'string',
        'work' => 'string',
        'other' => 'string',
        'is_published' => 'boolean',
        'is_active' => 'boolean',
        'dob' => 'date',
        'skypeid' => 'string',
        'githubid' => 'string',
        'twitter_username' => 'string',
        'instagram_username' => 'string',
        'facebook_username' => 'string',
        'facebook_url' => 'string',
        'linked_in_url' => 'string',
        'google_plus_url' => 'string',
        'slug' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id', 'id');
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    public function setUuid($uuid) {
        return Uuid::generate(3, $this->first_name . $this->last_name, Uuid::NS_DNS);
    }

    public function getDisplayNameAttribute()
    {
        return $this->first_name.' '.$this->last_name;
    }

    public function profile()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }

    public function websites()
    {
        return $this->hasMany(\App\Models\Website::class);
    }

    public function GetSlugAttribute()
    {
        return str_slug($this->first_name . $this->last_name, "-");
    }

	public function getNameAttribute()
	{
		return $this->first_name .' '. $this->last_name;
	}

    public function getDobAttribute($value) {
        if ($value == '0000-00-00 00:00:00') {
            return NULL;
        } else if ($value) {
            return Carbon::parse($value)->format('m/d/Y');
        } else {

            return $value;
        }
    }
}
