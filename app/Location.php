<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\FilterByUser;

/**
 * Class Location
 *
 * @package App
 * @property string $company
 * @property string $nickname
 * @property string $address
 * @property string $address_2
 * @property string $city
 * @property string $state
 * @property string $phone
 * @property string $phone2
 * @property string $logo
 * @property string $storefront
 * @property string $google_map_link
 * @property integer $clinic_id
 * @property string $email
 * @property string $created_by
*/
class Location extends Model
{
    use SoftDeletes, FilterByUser;

    protected $fillable = ['nickname', 'address', 'address_2', 'city', 'state', 'phone', 'phone2', 'logo', 'storefront', 'google_map_link', 'clinic_id', 'email', 'company_id', 'created_by_id'];
    
    
    public static function boot()
    {
        parent::boot();

        Location::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setCompanyIdAttribute($input)
    {
        $this->attributes['company_id'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setClinicIdAttribute($input)
    {
        $this->attributes['clinic_id'] = $input ? $input : null;
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setCreatedByIdAttribute($input)
    {
        $this->attributes['created_by_id'] = $input ? $input : null;
    }
    
    public function company()
    {
        return $this->belongsTo(ContactCompany::class, 'company_id');
    }
    
    public function created_by()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }
    
    public function zipcodes() {
        return $this->hasMany(Zipcode::class, 'location_id');
    }
    public function websites() {
        return $this->hasMany(Website::class, 'location_id');
    }
}
