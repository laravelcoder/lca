<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AssetsLocation
 *
 * @package App
 * @property string $title
*/
class AssetsLocation extends Model
{
    protected $fillable = ['title'];
    
    
    public static function boot()
    {
        parent::boot();

        AssetsLocation::observe(new \App\Observers\UserActionsObserver);
    }
    
}
