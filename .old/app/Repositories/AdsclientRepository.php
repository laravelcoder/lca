<?php

namespace App\Repositories;

use App\Models\Adsclient;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AdsclientRepository
 * @package App\Repositories
 * @version February 2, 2018, 8:20 pm UTC
 *
 * @method Adsclient findWithoutFail($id, $columns = ['*'])
 * @method Adsclient find($id, $columns = ['*'])
 * @method Adsclient first($columns = ['*'])
*/
class AdsclientRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'developer_token',
        'client_customer_id',
        'user_agent',
        'client_id',
        'client_secret',
        'refresh_token',
        'authorization_uri',
        'redirect_uri',
        'token_credential_uri',
        'scope'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Adsclient::class;
    }
}
