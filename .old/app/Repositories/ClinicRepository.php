<?php

namespace App\Repositories;

use App\Models\Clinic;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ClinicRepository
 * @package App\Repositories
 * @version January 31, 2018, 1:21 am UTC
 *
 * @method Clinic findWithoutFail($id, $columns = ['*'])
 * @method Clinic find($id, $columns = ['*'])
 * @method Clinic first($columns = ['*'])
*/
class ClinicRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'clinic_name',
        'device_count',
        'clinic_number',
        'group_id',
        'date_opened',
        'quickbase_id',
        'quickbase_company'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Clinic::class;
    }
}
