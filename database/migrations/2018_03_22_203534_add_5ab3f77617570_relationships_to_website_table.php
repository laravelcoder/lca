<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5ab3f77617570RelationshipsToWebsiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('websites', function(Blueprint $table) {
            if (!Schema::hasColumn('websites', 'location_id')) {
                $table->integer('location_id')->unsigned()->nullable();
                $table->foreign('location_id', '133898_5ab2e6ccc140b')->references('id')->on('locations')->onDelete('cascade');
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
        Schema::table('websites', function(Blueprint $table) {
            
        });
    }
}
