<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5ab426c41aca9RelationshipsToZipcodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('zipcodes', function(Blueprint $table) {
            if (!Schema::hasColumn('zipcodes', 'location_id')) {
                $table->integer('location_id')->unsigned()->nullable();
                $table->foreign('location_id', '133897_5ab2e33b58432')->references('id')->on('locations')->onDelete('cascade');
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
        Schema::table('zipcodes', function(Blueprint $table) {
            
        });
    }
}
