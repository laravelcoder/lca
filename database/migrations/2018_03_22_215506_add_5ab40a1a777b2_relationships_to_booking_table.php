<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5ab40a1a777b2RelationshipsToBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bookings', function(Blueprint $table) {
            if (!Schema::hasColumn('bookings', 'requested_clinic_id')) {
                $table->integer('requested_clinic_id')->unsigned()->nullable();
                $table->foreign('requested_clinic_id', '134539_5ab409315b49e')->references('id')->on('locations')->onDelete('cascade');
                }
                if (!Schema::hasColumn('bookings', 'clinic_id')) {
                $table->integer('clinic_id')->unsigned()->nullable();
                $table->foreign('clinic_id', '134539_5ab409316bf16')->references('id')->on('locations')->onDelete('cascade');
                }
                if (!Schema::hasColumn('bookings', 'clinic_address_id')) {
                $table->integer('clinic_address_id')->unsigned()->nullable();
                $table->foreign('clinic_address_id', '134539_5ab40a17f351f')->references('id')->on('locations')->onDelete('cascade');
                }
                if (!Schema::hasColumn('bookings', 'clinic_phone_id')) {
                $table->integer('clinic_phone_id')->unsigned()->nullable();
                $table->foreign('clinic_phone_id', '134539_5ab40a180d1a4')->references('id')->on('locations')->onDelete('cascade');
                }
                
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bookings', function(Blueprint $table) {
            
        });
    }
}
