<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1521748172LocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('locations', function (Blueprint $table) {
            
if (!Schema::hasColumn('locations', 'phone2')) {
                $table->string('phone2')->nullable();
                }
if (!Schema::hasColumn('locations', 'email')) {
                $table->string('email');
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
        Schema::table('locations', function (Blueprint $table) {
            $table->dropColumn('phone2');
            $table->dropColumn('email');
            
        });

    }
}
