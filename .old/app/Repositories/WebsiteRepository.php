<?php

namespace App\Repositories;

use App\Models\Website;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class WebsiteRepository
 * @package App\Repositories
 * @version January 31, 2018, 1:29 am UTC
 *
 * @method Website findWithoutFail($id, $columns = ['*'])
 * @method Website find($id, $columns = ['*'])
 * @method Website first($columns = ['*'])
*/
class WebsiteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'website_name',
        'website',
        'clinic_id',
        'profile_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Website::class;
    }
}
