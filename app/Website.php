<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Website
 *
 * @package App
 * @property string $website
 * @property string $location
*/
class Website extends Model
{
    use SoftDeletes;

    protected $fillable = ['website', 'location_id'];
    
    

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
    
    public function adwords() {
        return $this->hasMany(Adword::class, 'website_id');
    }
    public function analytics() {
        return $this->hasMany(Analytic::class, 'website_id');
    }
}
