<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Contact
 *
 * @package App
 * @property string $first_name
 * @property string $last_name
 * @property string $phone1
 * @property string $phone2
 * @property string $email
 * @property string $company
 * @property string $skype
 * @property string $twitter_username
 * @property string $instagram_username
 * @property string $facebook_url
 * @property string $linked_in_url
 * @property string $google_plus_url
 * @property string $personal_website
 * @property string $contact_type
*/
class Contact extends Model
{
    protected $fillable = ['first_name', 'last_name', 'phone1', 'phone2', 'email', 'skype', 'twitter_username', 'instagram_username', 'facebook_url', 'linked_in_url', 'google_plus_url', 'personal_website', 'contact_type', 'company_id'];
    
    
    public static function boot()
    {
        parent::boot();

        Contact::observe(new \App\Observers\UserActionsObserver);
    }

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
    
}
