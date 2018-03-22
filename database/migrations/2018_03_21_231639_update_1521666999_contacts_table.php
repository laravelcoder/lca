<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1521666999ContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contacts', function (Blueprint $table) {
            
if (!Schema::hasColumn('contacts', 'address_2')) {
                $table->string('address_2')->nullable();
                }
if (!Schema::hasColumn('contacts', 'city')) {
                $table->string('city')->nullable();
                }
if (!Schema::hasColumn('contacts', 'state')) {
                $table->string('state')->nullable();
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
            $table->dropColumn('address_2');
            $table->dropColumn('city');
            $table->dropColumn('state');
            
        });

    }
}
