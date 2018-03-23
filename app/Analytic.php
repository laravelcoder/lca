<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Analytic
 *
 * @package App
 * @property string $view_name
 * @property string $website
 * @property string $view_id
*/
class Analytic extends Model
{
    use SoftDeletes;

    protected $fillable = ['view_name', 'view_id', 'website_id'];
    
    
    public static function boot()
    {
        parent::boot();

        Analytic::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setWebsiteIdAttribute($input)
    {
        $this->attributes['website_id'] = $input ? $input : null;
    }
    
    public function website()
    {
        return $this->belongsTo(Website::class, 'website_id')->withTrashed();
    }
    
}
