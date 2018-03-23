<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContactCompany
 *
 * @package App
 * @property string $name
 * @property string $logo
*/
class ContactCompany extends Model
{
    protected $fillable = ['name', 'logo'];
    
    
    public static function boot()
    {
        parent::boot();

        ContactCompany::observe(new \App\Observers\UserActionsObserver);
    }
    
    public function locations() {
        return $this->hasMany(Location::class, 'company_id');
    }
    public function contacts() {
        return $this->hasMany(Contact::class, 'company_id');
    }
    public function assets() {
        return $this->hasMany(Asset::class, 'assigned_clinic_id');
    }
}
