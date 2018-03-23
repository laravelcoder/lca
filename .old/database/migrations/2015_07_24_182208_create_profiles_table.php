<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profiles', function (Blueprint $table) {
			$table->engine = 'InnoDB';
			$table->increments('id');
			$table->string('photo')->nullable();
			$table->string('first_name')->nullable();
			$table->string('last_name')->nullable();
			$table->string('uuid')->nullable();
			$table->text('about_me')->nullable();
			$table->string('company')->nullable();
			$table->string('gender')->nullable();
			$table->string('phone')->nullable();
			$table->string('mobile')->nullable();
			$table->string('work')->nullable();
			$table->string('other')->nullable();
			$table->boolean('is_published')->default(1);
			$table->boolean('is_active')->default(1);
			$table->date('dob')->nullable();
			$table->string('skypeid')->nullable();
			$table->string('githubid')->nullable();
			$table->string('twitter_username')->nullable();
			$table->string('instagram_username')->nullable();
			$table->string('facebook_username')->nullable();
			$table->string('facebook_url')->nullable();
			$table->string('linked_in_url')->nullable();
			$table->string('google_plus_url')->nullable();
			$table->string('slug')->nullable();
			$table->string('display_name')->nullable();
			$table->unsignedInteger('user_id')->nullable();
			$table->unsignedInteger('website_id')->nullable();
			$table->timestamps();
		 
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('profiles');
	}
}
