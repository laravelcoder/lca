<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1521749363LocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('locations', function (Blueprint $table) {
            if(Schema::hasColumn('locations', 'email')) {
                $table->dropColumn('email');
            }
            
        });
Schema::table('locations', function (Blueprint $table) {
            
if (!Schema::hasColumn('locations', 'email')) {
                $table->string('email')->nullable();
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
        Schema::table('locations', function (Blueprint $table) {
            $table->dropColumn('email');
            
        });
Schema::table('locations', function (Blueprint $table) {
                        $table->string('email');
                
        });

    }
}
