<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1521673526ContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contacts', function (Blueprint $table) {
            if(Schema::hasColumn('contacts', 'address')) {
                $table->dropColumn('address');
            }
            
        });
Schema::table('contacts', function (Blueprint $table) {
            
if (!Schema::hasColumn('contacts', 'twitter_username')) {
                $table->string('twitter_username')->nullable();
                }
if (!Schema::hasColumn('contacts', 'instagram_username')) {
                $table->string('instagram_username')->nullable();
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
if (!Schema::hasColumn('contacts', 'personal_website')) {
                $table->string('personal_website')->nullable();
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
            $table->dropColumn('twitter_username');
            $table->dropColumn('instagram_username');
            $table->dropColumn('facebook_url');
            $table->dropColumn('linked_in_url');
            $table->dropColumn('google_plus_url');
            $table->dropColumn('personal_website');
            
        });
Schema::table('contacts', function (Blueprint $table) {
                        $table->string('address')->nullable();
                
        });

    }
}
