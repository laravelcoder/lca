<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Website",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="website_name",
 *          description="website_name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="website",
 *          description="website",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="clinic_id",
 *          description="clinic_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="profile_id",
 *          description="profile_id",
 *          type="integer",
 *          format="int32"
 *      )
 * )
 */
class Website extends Model
{
        use SoftDeletes;

    public $table = 'websites';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'website_name',
        'website',
        'clinic_id',
        'profile_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'website_name' => 'string',
        'website' => 'string',
        'clinic_id' => 'integer',
        'profile_id' => 'integer'
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
    public function profile()
    {
        return $this->belongsTo(\App\Models\Profile::class);
    }

    /**
    * @return \Illuminate\Database\Eloquent\Relations\HasOne
    **/
    public function analyticsclient()
    {
        return $this->hasOne(\App\Models\Analyticsclient::class);
    }

    /**
    * @return \Illuminate\Database\Eloquent\Relations\HasOne
    **/
    public function adsclient()
    {
        return $this->hasOne(\App\Models\Adsclient::class);
    }
}
