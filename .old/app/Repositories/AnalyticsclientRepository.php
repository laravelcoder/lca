<?php

namespace App\Repositories;

use App\Models\Analyticsclient;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AnalyticsclientRepository
 * @package App\Repositories
 * @version February 2, 2018, 7:03 pm UTC
 *
 * @method Analyticsclient findWithoutFail($id, $columns = ['*'])
 * @method Analyticsclient find($id, $columns = ['*'])
 * @method Analyticsclient first($columns = ['*'])
*/
class AnalyticsclientRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'view_id',
        'view_url'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Analyticsclient::class;
    }
}
