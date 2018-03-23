<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1521743222ContactCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contact_companies', function (Blueprint $table) {
            if(Schema::hasColumn('contact_companies', 'storefront')) {
                $table->dropColumn('storefront');
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
                        $table->string('storefront')->nullable();
                
        });

    }
}
