<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersWishlistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_wishlists', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('postal_codes')->nullable();
            $table->string('price')->nullable();
            $table->string('kvm')->nullable();
            $table->string('building_age')->nullable();
            $table->string('garden')->nullable();
            $table->string('plan')->nullable();
            $table->string('rooms')->nullable();
            $table->string('toilets')->nullable();
            $table->string('balcony')->nullable();
            $table->string('garage')->nullable();
            $table->string('cellar')->nullable();
            $table->string('architect')->nullable();
            $table->string('hobby_room')->nullable();
            $table->string('terrace')->nullable();
            $table->string('wood_stove')->nullable();
            $table->string('ready_to_move')->nullable();
            $table->string('other')->nullable();
            $table->string('green_area')->nullable();
            $table->string('institutions')->nullable();
            $table->string('sports_facilities')->nullable();
            $table->string('shopping')->nullable();
            $table->string('transport')->nullable();
            $table->string('beach')->nullable();
            $table->string('priority_1')->nullable();
            $table->string('priority_2')->nullable();
            $table->string('priority_3')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_wishlists');
    }
}
