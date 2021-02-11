<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->timestamps();
        });

        DB::table('categories')->insert(
            array(
                ['id' => 1, 'name' => 'Department'],
                ['id' => 2, 'name' => 'House'],
                ['id' => 3, 'name' => 'Office'],
                ['id' => 4, 'name' => 'Local'],
                ['id' => 5, 'name' => 'Land'],
                ['id' => 6, 'name' => 'Industrial Property'],
            )
        );

        Schema::create('environment', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->timestamps();
        });

        DB::table('environment')->insert(
            array(
                ['id' => 1, 'name' => 'Monoambiente'],
                ['id' => 2, 'name' => '2 ambientes'],
                ['id' => 3, 'name' => '3 ambientes'],
                ['id' => 4, 'name' => '4 ambientes'],
                ['id' => 5, 'name' => '5 ambientes'],
            )
        );

        // Schema::create('currencies', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('name');
        //     $table->string('description');
        //     $table->timestamps();
        // });

        // DB::table('currencies')->insert(
        //     array(
        //         ['id' => 1, 'code' => 'DKK', 'name' => 'Corona danesa'],
        //         ['id' => 2, 'code' => 'USD', 'name' => 'Dólar estadounidense'],
        //         ['id' => 3, 'code' => 'EUR', 'name' => 'Euro'],
        //         ['id' => 4, 'code' => 'ARS', 'name' => 'Peso argentino'],
        //         ['id' => 5, 'code' => 'GBP', 'name' => 'Libra esterlina'],
        //     )
        // );

        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('type_id');
            $table->string('image')->nullable();
            $table->string('price')->nullable();
            $table->string('address')->nullable();
            $table->string('environment')->nullable();
            $table->string('town')->nullable();
            $table->string('tips')->nullable();
            $table->string('description')->nullable();
            $table->string('full_description', 1000)->nullable();
            $table->string('link')->nullable();
            $table->string('expenses')->nullable();
            $table->string('alt_text')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('type_id')->references('id')->on('types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
        Schema::dropIfExists('environment');
        Schema::dropIfExists('categories');
    }
}
