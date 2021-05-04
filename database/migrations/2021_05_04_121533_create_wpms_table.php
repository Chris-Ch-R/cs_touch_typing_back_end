<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWpmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wpms', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            // $table->float('WPM');
            $table->float('allTypedEntries');
            $table->float('uncorrectedErrors');
            $table->float('countTime');
            $table->float('rawWPM');
            $table->float('adjustWPM');
            $table->float('errors');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wpms');
    }
}
