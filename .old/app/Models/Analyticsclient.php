<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Analyticsclient",
 *      required={"view_id", "view_url"},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="user_id",
 *          description="user_id",
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
 *          property="view_url",
 *          description="view_url",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="user_id",
 *          description="user_id",
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
class Analyticsclient extends Model
{
        use SoftDeletes;

    public $table = 'analyticsclients';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'view_id',
        'view_url',
        'user_id',
        'clinic_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'user_id' => 'integer',
        'clinic_id' => 'integer',
        'view_url' => 'string',
        'user_id' => 'integer',
        'clinic_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'view_id' => 'required',
        'view_url' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function clinic()
    {
        return $this->belongsTo(\App\Models\Clinic::class, 'clinic_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function website()
    {
        return $this->belongsTo(\App\Models\Website::class, 'website_id', 'id');
    }
}
