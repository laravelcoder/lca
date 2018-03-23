<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1521748503BookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bookings', function (Blueprint $table) {
            
if (!Schema::hasColumn('bookings', 'clinic_text_numbers')) {
                $table->string('clinic_text_numbers')->nullable();
                }
if (!Schema::hasColumn('bookings', 'client_firstname')) {
                $table->string('client_firstname')->nullable();
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
        Schema::table('bookings', function (Blueprint $table) {
            $table->dropColumn('clinic_text_numbers');
            $table->dropColumn('client_firstname');
            
        });

    }
}
