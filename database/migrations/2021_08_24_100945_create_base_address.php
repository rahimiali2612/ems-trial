<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaseAddress extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('base_address', function (Blueprint $table) {
            $table->id();
            $table->foreignId('com_id');
            $table->foreignId('state_id');
            $table->string('branch_type');
            $table->string('branch_address');
            $table->string('coordinate_latitude');
            $table->string('coordinate_longitude');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('base_address');
    }
}
