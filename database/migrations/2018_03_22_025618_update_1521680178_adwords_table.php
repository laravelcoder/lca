<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1521680178AdwordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('adwords', function (Blueprint $table) {
            
if (!Schema::hasColumn('adwords', 'scope')) {
                $table->string('scope')->nullable();
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
        Schema::table('adwords', function (Blueprint $table) {
            $table->dropColumn('scope');
            
        });

    }
}
