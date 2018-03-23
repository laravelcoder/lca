<?php

namespace App\Repositories;

use App\Models\Location;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class LocationRepository
 * @package App\Repositories
 * @version January 18, 2018, 5:06 am UTC
 *
 * @method Location findWithoutFail($id, $columns = ['*'])
 * @method Location find($id, $columns = ['*'])
 * @method Location first($columns = ['*'])
*/
class LocationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return Location::class;
    }
}
