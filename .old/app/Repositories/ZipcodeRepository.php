<?php

namespace App\Repositories;

use App\Models\Zipcode;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ZipcodeRepository
 * @package App\Repositories
 * @version January 18, 2018, 5:06 am UTC
 *
 * @method Zipcode findWithoutFail($id, $columns = ['*'])
 * @method Zipcode find($id, $columns = ['*'])
 * @method Zipcode first($columns = ['*'])
*/
class ZipcodeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'zip',
        'location_id',
        'clinic_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Zipcode::class;
    }
}
