<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurrenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('currencies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->timestamps();
        });

        DB::table('currencies')->insert(
            array(
                ['id' => 1, 'name' => 'DKK', 'description' => 'Corona danesa'],
                ['id' => 2, 'name' => 'USD', 'description' => 'Dólar estadounidense'],
                ['id' => 3, 'name' => 'EUR', 'description' => 'Euro'],
                ['id' => 4, 'name' => 'ARS', 'description' => 'Peso argentino'],
                ['id' => 5, 'name' => 'GBP', 'description' => 'Libra esterlina'],
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
        Schema::dropIfExists('currencies');
    }
}
