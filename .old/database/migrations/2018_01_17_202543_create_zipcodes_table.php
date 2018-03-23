<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateZipcodesTable extends Migration {

	public function up()
	{
		Schema::create('zipcodes', function(Blueprint $table) {
			$table->engine = 'InnoDB';
			$table->increments('id');
			$table->string('zip');
			$table->unsignedInteger('location_id')->nullable();
			$table->unsignedInteger('clinic_id')->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('zipcodes');
	}
}