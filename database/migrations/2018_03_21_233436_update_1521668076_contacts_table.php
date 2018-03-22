<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1521668076ContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contacts', function (Blueprint $table) {
            
if (!Schema::hasColumn('contacts', 'facebook_username')) {
                $table->string('facebook_username')->nullable();
                }
if (!Schema::hasColumn('contacts', 'facebook_url')) {
                $table->string('facebook_url')->nullable();
                }
if (!Schema::hasColumn('contacts', 'linked_in_url')) {
                $table->string('linked_in_url')->nullable();
                }
if (!Schema::hasColumn('contacts', 'google_plus_url')) {
                $table->string('google_plus_url')->nullable();
                }
if (!Schema::hasColumn('contacts', 'twitter_username')) {
                $table->string('twitter_username')->nullable();
                }
if (!Schema::hasColumn('contacts', 'skypeid')) {
                $table->string('skypeid')->nullable();
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
        Schema::table('contacts', function (Blueprint $table) {
            $table->dropColumn('facebook_username');
            $table->dropColumn('facebook_url');
            $table->dropColumn('linked_in_url');
            $table->dropColumn('google_plus_url');
            $table->dropColumn('twitter_username');
            $table->dropColumn('skypeid');
            
        });

    }
}
