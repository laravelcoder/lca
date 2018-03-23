<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWebsitesTable extends Migration {

	public function up()
	{
		Schema::create('websites', function(Blueprint $table) {
			$table->engine = 'InnoDB';
			$table->increments('id');
			$table->string('website_name');
			$table->string('website');
			$table->unsignedInteger('clinic_id')->nullable();
			$table->unsignedInteger('profile_id')->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('websites');
	}
}