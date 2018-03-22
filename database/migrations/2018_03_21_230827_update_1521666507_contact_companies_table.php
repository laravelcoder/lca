<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1521666507ContactCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contact_companies', function (Blueprint $table) {
            
if (!Schema::hasColumn('contact_companies', 'address_2')) {
                $table->string('address_2')->nullable();
                }
if (!Schema::hasColumn('contact_companies', 'city')) {
                $table->string('city')->nullable();
                }
if (!Schema::hasColumn('contact_companies', 'state')) {
                $table->string('state')->nullable();
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
        Schema::table('contact_companies', function (Blueprint $table) {
            $table->dropColumn('address_2');
            $table->dropColumn('city');
            $table->dropColumn('state');
            
        });

    }
}
