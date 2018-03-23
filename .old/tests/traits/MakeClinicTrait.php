<?php

use Faker\Factory as Faker;
use App\Models\Clinic;
use App\Repositories\ClinicRepository;

trait MakeClinicTrait
{
    /**
     * Create fake instance of Clinic and save it in database
     *
     * @param array $clinicFields
     * @return Clinic
     */
    public function makeClinic($clinicFields = [])
    {
        /** @var ClinicRepository $clinicRepo */
        $clinicRepo = App::make(ClinicRepository::class);
        $theme = $this->fakeClinicData($clinicFields);
        return $clinicRepo->create($theme);
    }

    /**
     * Get fake instance of Clinic
     *
     * @param array $clinicFields
     * @return Clinic
     */
    public function fakeClinic($clinicFields = [])
    {
        return new Clinic($this->fakeClinicData($clinicFields));
    }

    /**
     * Get fake data of Clinic
     *
     * @param array $postFields
     * @return array
     */
    public function fakeClinicData($clinicFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'clinic_name' => $fake->word,
            'device_count' => $fake->randomDigitNotNull,
            'clinic_number' => $fake->word,
            'group_id' => $fake->randomDigitNotNull,
            'date_opened' => $fake->word,
            'quickbase_id' => $fake->randomDigitNotNull,
            'quickbase_company' => $fake->randomDigitNotNull,
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s'),
            'deleted_at' => $fake->date('Y-m-d H:i:s')
        ], $clinicFields);
    }
}
