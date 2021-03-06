<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5ab2eaf5a7c55RelationshipsToAnalyticTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('analytics', function(Blueprint $table) {
            if (!Schema::hasColumn('analytics', 'website_id')) {
                $table->integer('website_id')->unsigned()->nullable();
                $table->foreign('website_id', '133899_5ab2e79325d71')->references('id')->on('websites')->onDelete('cascade');
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
        Schema::table('analytics', function(Blueprint $table) {
            
        });
    }
}
