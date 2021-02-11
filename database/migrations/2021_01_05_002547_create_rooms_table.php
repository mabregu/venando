<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        DB::table('rooms')->insert(
            array(
                ['id' => 1, 'name' => 'bedroom'],
                ['id' => 2, 'name' => 'bathroom'],
                ['id' => 3, 'name' => 'garage'],
                ['id' => 4, 'name' => 'terrace'],
            )
        );

        // Schema::create('rooms', function (Blueprint $table) {
        //     $table->id();
        //     $table->unsignedBigInteger('property_id');
        //     $table->unsignedBigInteger('rooms_type_id');
        //     $table->timestamps();

        //     $table->foreign('property_id')->references('id')->on('properties');
        //     $table->foreign('rooms_type_id')->references('id')->on('rooms_type');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
        //Schema::dropIfExists('rooms_type');
    }
}
