<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1521743580LocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('locations', function (Blueprint $table) {
            
if (!Schema::hasColumn('locations', 'logo')) {
                $table->string('logo')->nullable();
                }
if (!Schema::hasColumn('locations', 'storefront')) {
                $table->string('storefront')->nullable();
                }
if (!Schema::hasColumn('locations', 'google_map_link')) {
                $table->string('google_map_link')->nullable();
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
            $table->dropColumn('logo');
            $table->dropColumn('storefront');
            $table->dropColumn('google_map_link');
            
        });

    }
}
