<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Zipcode",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="zip",
 *          description="zip",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="location_id",
 *          description="location_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="clinic_id",
 *          description="clinic_id",
 *          type="integer",
 *          format="int32"
 *      )
 * )
 */
class Zipcode extends Model
{
        use SoftDeletes;

    public $table = 'zipcodes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    
    protected $dates = ['deleted_at'];

    
    public $fillable = [
        'zip',
        'location_id',
        'clinic_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'zip' => 'string',
        'location_id' => 'integer',
        'clinic_id' => 'integer'
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
    public function clinic()
    {
        return $this->belongsTo(\App\Models\Clinic::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function location()
    {
        return $this->belongsTo(\App\Models\Location::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function locations()
    {
        return $this->hasMany(\App\Models\Location::class);
    }
}
