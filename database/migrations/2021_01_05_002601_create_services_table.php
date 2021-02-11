<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services_type', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
        
        DB::table('services_type')->insert(
            array(
                ['id' => 1, 'name' => 'Water'],
                ['id' => 2, 'name' => 'Light'],
                ['id' => 3, 'name' => 'Gas'],
                ['id' => 4, 'name' => 'Wifi'],
            )
        );

        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('property_id');
            $table->unsignedBigInteger('services_type_id');
            $table->timestamps();

            $table->foreign('property_id')->references('id')->on('properties');
            $table->foreign('services_type_id')->references('id')->on('services_type');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
        Schema::dropIfExists('services_type');
    }
}
