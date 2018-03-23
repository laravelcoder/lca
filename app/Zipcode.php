<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Zipcode
 *
 * @package App
 * @property string $zipcode
 * @property string $location
*/
class Zipcode extends Model
{
    use SoftDeletes;

    protected $fillable = ['zipcode', 'location_id'];
    
    
    public static function boot()
    {
        parent::boot();

        Zipcode::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setLocationIdAttribute($input)
    {
        $this->attributes['location_id'] = $input ? $input : null;
    }
    
    public function location()
    {
        return $this->belongsTo(Location::class, 'location_id')->withTrashed();
    }
    
}
