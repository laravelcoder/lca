<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Adsclient",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="developer_token",
 *          description="developer_token",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="client_customer_id",
 *          description="client_customer_id",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="user_agent",
 *          description="user_agent",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="client_id",
 *          description="client_id",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="client_secret",
 *          description="client_secret",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="refresh_token",
 *          description="refresh_token",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="authorization_uri",
 *          description="authorization_uri",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="redirect_uri",
 *          description="redirect_uri",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="token_credential_uri",
 *          description="token_credential_uri",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="scope",
 *          description="scope",
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
class Adsclient extends Model
{
        use SoftDeletes;

    public $table = 'adsclients';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'developer_token',
        'client_customer_id',
        'user_agent',
        'client_id',
        'client_secret',
        'refresh_token',
        'authorization_uri',
        'redirect_uri',
        'token_credential_uri',
        'scope',
        'user_id',
        'clinic_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'developer_token' => 'string',
        'client_customer_id' => 'string',
        'user_agent' => 'string',
        'client_id' => 'string',
        'client_secret' => 'string',
        'refresh_token' => 'string',
        'authorization_uri' => 'string',
        'redirect_uri' => 'string',
        'token_credential_uri' => 'string',
        'scope' => 'string',
        'user_id' => 'integer',
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
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'id', 'user_id');
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
