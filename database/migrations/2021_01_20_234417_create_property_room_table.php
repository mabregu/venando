<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyRoomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_room', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('property_id');
            $table->unsignedBigInteger('room_id');
            $table->timestamps();
        });

        DB::table('property_room')->insert(
            array(
                ['property_id' => rand(1, 100), 'room_id' => rand(1, 4)],
                ['property_id' => rand(1, 100), 'room_id' => rand(1, 4)],
                ['property_id' => rand(1, 100), 'room_id' => rand(1, 4)],
                ['property_id' => rand(1, 100), 'room_id' => rand(1, 4)],
                ['property_id' => rand(1, 100), 'room_id' => rand(1, 4)],
                ['property_id' => rand(1, 100), 'room_id' => rand(1, 4)],
                ['property_id' => rand(1, 100), 'room_id' => rand(1, 4)],
                ['property_id' => rand(1, 100), 'room_id' => rand(1, 4)],
                ['property_id' => rand(1, 100), 'room_id' => rand(1, 4)],
                ['property_id' => rand(1, 100), 'room_id' => rand(1, 4)],
            )
        );
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_room');
    }
}
