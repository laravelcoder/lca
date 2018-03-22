<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
*/
class Location extends Model
{
    use SoftDeletes;

    protected $fillable = ['nickname', 'address', 'address_2', 'city', 'state', 'phone', 'company_id'];
    
    

    /**
     * Set to null if empty
     * @param $input
     */
    public function setCompanyIdAttribute($input)
    {
        $this->attributes['company_id'] = $input ? $input : null;
    }
    
    public function company()
    {
        return $this->belongsTo(ContactCompany::class, 'company_id');
    }
    
    public function zipcodes() {
        return $this->hasMany(Zipcode::class, 'location_id');
    }
    public function websites() {
        return $this->hasMany(Website::class, 'location_id');
    }
}
