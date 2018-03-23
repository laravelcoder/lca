<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5ab3fe4ea613eRelationshipsToLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('locations', function(Blueprint $table) {
            if (!Schema::hasColumn('locations', 'company_id')) {
                $table->integer('company_id')->unsigned()->nullable();
                $table->foreign('company_id', '133896_5ab2e1c507888')->references('id')->on('contact_companies')->onDelete('cascade');
                }
                if (!Schema::hasColumn('locations', 'created_by_id')) {
                $table->integer('created_by_id')->unsigned()->nullable();
                $table->foreign('created_by_id', '133896_5ab3f6dce8742')->references('id')->on('users')->onDelete('cascade');
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
        Schema::table('locations', function(Blueprint $table) {
            
        });
    }
}
