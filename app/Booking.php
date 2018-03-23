<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Booking
 *
 * @package App
 * @property string $submitted
 * @property string $customername
 * @property string $email
 * @property string $phone
 * @property string $family_number
 * @property string $how_long
 * @property string $requested_date
 * @property time $requested_time
 * @property string $requested_clinic
 * @property string $clinic
 * @property string $clinic_address
 * @property string $clinic_phone
 * @property string $clinic_text_numbers
 * @property string $client_firstname
*/
class Booking extends Model
{
    use SoftDeletes;

    protected $fillable = ['submitted', 'customername', 'email', 'phone', 'family_number', 'how_long', 'requested_date', 'requested_time', 'clinic_text_numbers', 'client_firstname', 'requested_clinic_id', 'clinic_id', 'clinic_address_id', 'clinic_phone_id'];
    
    
    public static function boot()
    {
        parent::boot();

        Booking::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setSubmittedAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['submitted'] = Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
        } else {
            $this->attributes['submitted'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getSubmittedAttribute($input)
    {
        $zeroDate = str_replace(['Y', 'm', 'd'], ['0000', '00', '00'], config('app.date_format'));

        if ($input != $zeroDate && $input != null) {
            return Carbon::createFromFormat('Y-m-d', $input)->format(config('app.date_format'));
        } else {
            return '';
        }
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setRequestedDateAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['requested_date'] = Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
        } else {
            $this->attributes['requested_date'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getRequestedDateAttribute($input)
    {
        $zeroDate = str_replace(['Y', 'm', 'd'], ['0000', '00', '00'], config('app.date_format'));

        if ($input != $zeroDate && $input != null) {
            return Carbon::createFromFormat('Y-m-d', $input)->format(config('app.date_format'));
        } else {
            return '';
        }
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setRequestedTimeAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['requested_time'] = Carbon::createFromFormat('H:i:s', $input)->format('H:i:s');
        } else {
            $this->attributes['requested_time'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getRequestedTimeAttribute($input)
    {
        if ($input != null && $input != '') {
            return Carbon::createFromFormat('H:i:s', $input)->format('H:i:s');
        } else {
            return '';
        }
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setRequestedClinicIdAttribute($input)
    {
        $this->attributes['requested_clinic_id'] = $input ? $input : null;
    }

    /**
     * Set to null if empty
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
    public function setClinicAddressIdAttribute($input)
    {
        $this->attributes['clinic_address_id'] = $input ? $input : null;
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setClinicPhoneIdAttribute($input)
    {
        $this->attributes['clinic_phone_id'] = $input ? $input : null;
    }
    
    public function requested_clinic()
    {
        return $this->belongsTo(Location::class, 'requested_clinic_id')->withTrashed();
    }
    
    public function clinic()
    {
        return $this->belongsTo(Location::class, 'clinic_id')->withTrashed();
    }
    
    public function clinic_address()
    {
        return $this->belongsTo(Location::class, 'clinic_address_id')->withTrashed();
    }
    
    public function clinic_phone()
    {
        return $this->belongsTo(Location::class, 'clinic_phone_id')->withTrashed();
    }
    
}
