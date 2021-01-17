<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main', function (Blueprint $table) {
            $table->id();
            $table->string('DeviceTime');
            $table->string('status');
            $table->string('Total voltage of pack');
            $table->string('Current');
            $table->string('SOC');
            $table->string('SOH');
            $table->string('Average cell voltage');
            $table->string('Average temperature');
            $table->string('Temperature difference');
            $table->string('Voltage difference');
            $table->string('Current current');
            $table->string('Current voltage');
            $table->string('voltage solar panel');
            $table->string('current solar panel');
            $table->string('power solar panel');
            $table->string('Output power full');
            $table->string('Output power active');
            $table->string('Output power reactive');
            $table->string('Output voltage');
            $table->string('Output current');
            $table->string('freq of cell');
            $table->string('charge inventor');

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
        Schema::dropIfExists('main_tables');
    }
}
