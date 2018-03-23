<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Location",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="address",
 *          description="address",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="address2",
 *          description="address2",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="city",
 *          description="city",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="state",
 *          description="state",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="phone",
 *          description="phone",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="email",
 *          description="email",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="website",
 *          description="website",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="country",
 *          description="country",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="nickname",
 *          description="nickname",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="date_opened",
 *          description="date_opened",
 *          type="string",
 *          format="date"
 *      ),
 *      @SWG\Property(
 *          property="quickbase_id",
 *          description="quickbase_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="clinic_id",
 *          description="clinic_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="zipcodes_id",
 *          description="zipcodes_id",
 *          type="integer",
 *          format="int32"
 *      )
 * )
 */
class Location extends Model
{
        use SoftDeletes;

    public $table = 'locations';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'address',
        'address2',
        'city',
        'state',
        'phone',
        'email',
        'website',
        'country',
        'nickname',
        'date_opened',
        'quickbase_id',
        'clinic_id',
        'zipcodes_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'address' => 'string',
        'address2' => 'string',
        'city' => 'string',
        'state' => 'string',
        'phone' => 'string',
        'email' => 'string',
        'website' => 'string',
        'country' => 'string',
        'nickname' => 'string',
        'date_opened' => 'date',
        'quickbase_id' => 'integer',
        'clinic_id' => 'integer',
        'zipcodes_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function clinic()
    {
        return $this->belongsTo(\App\Models\Clinic::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function zipcode()
    {
        return $this->belongsTo(\App\Models\Zipcode::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function zipcodes()
    {
        return $this->hasMany(\App\Models\Zipcode::class);
    }

     /**
     * @method product
     * @public
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user() {
        return $this->belongsToMany(User::class);
    }
}
