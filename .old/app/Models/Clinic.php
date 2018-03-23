<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Clinic",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="clinic_name",
 *          description="clinic_name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="device_count",
 *          description="device_count",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="clinic_number",
 *          description="clinic_number",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="group_id",
 *          description="group_id",
 *          type="integer",
 *          format="int32"
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
 *          property="quickbase_company",
 *          description="quickbase_company",
 *          type="integer",
 *          format="int32"
 *      )
 * )
 */
class Clinic extends Model
{
        use SoftDeletes;

    public $table = 'clinics';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'clinic_name',
        'device_count',
        'clinic_number',
        'group_id',
        'date_opened',
        'quickbase_id',
        'quickbase_company'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'clinic_name' => 'string',
        'device_count' => 'integer',
        'clinic_number' => 'string',
        'group_id' => 'integer',
        'date_opened' => 'date',
        'quickbase_id' => 'integer',
        'quickbase_company' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function locations()
    {
        return $this->hasMany(\App\Models\Location::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function websites()
    {
        return $this->hasMany(\App\Models\Website::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function zipcodes()
    {
        return $this->hasMany(\App\Models\Zipcode::class);
    }

    /**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 **/
	public function analyticsclients()
	{
		return $this->hasMany(App\Models\Analyticsclient::class);
	}
}
