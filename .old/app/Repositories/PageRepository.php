<?php

namespace App\Repositories;

use App\Models\Page;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PageRepository
 * @package App\Repositories
 * @version February 20, 2018, 8:57 pm UTC
 *
 * @method Page findWithoutFail($id, $columns = ['*'])
 * @method Page find($id, $columns = ['*'])
 * @method Page first($columns = ['*'])
*/
class PageRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'meta_description',
        'content',
        'banner',
        'slug',
        'lang'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Page::class;
    }
}
