<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TaskStatus
 *
 * @package App
 * @property string $name
*/
class TaskStatus extends Model
{
    protected $fillable = ['name'];
    
    
    public static function boot()
    {
        parent::boot();

        TaskStatus::observe(new \App\Observers\UserActionsObserver);
    }
    
}
