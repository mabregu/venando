<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->timestamps();
        });

        DB::table('roles')->insert(
            array(
                ['id' => 1, 'name' => 'ADMIN', 'description' => 'Administrador del sistema'],
                ['id' => 2, 'name' => 'PREMIUM', 'description' => 'Tipo agente inmobiliario megamagnate'],
                ['id' => 3, 'name' => 'PLUS', 'description' => 'Capaz de publicar hasta 5 propiedades'],
                ['id' => 4, 'name' => 'BASIS', 'description' => 'Puede agregar a favoritos y transacciones con propiedades publicados'],
                ['id' => 5, 'name' => 'HOMESEEKER', 'description' => 'Puede buscar propiedades, agregar lista de deseos'],
            )
        );

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('role_id')->default(\App\Models\Role::BASIS);
            $table->string('name');
            $table->string('surname');
            $table->string('email')->unique();
            $table->string('telephone');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('picture')->nullable();
            $table->string('picture_original')->nullable();
            // cashier columns
            // $table->string('stripe_id')->nullable();
            // $table->string('card_brand')->nullable();
            // $table->string('card_last_four')->nullable();
            // $table->string('trial_ends_at')->nullable();

            $table->rememberToken();
            $table->timestamps();

            $table->foreign('role_id')->references('id')->on('roles');
        });

        // Schema::create('subscriptions', function (Blueprint $table) {
        //     $table->id();
        //     $table->unsignedBigInteger('user_id');
        //     $table->string('name');
        //     $table->string('stripe_id');
        //     $table->string('stripe_plan');
        //     $table->integer('quantity');
        //     $table->timestamp('trial_ends_at')->nullable();
        //     $table->timestamp('ends_at')->nullable();
        //     $table->timestamps();

        //     $table->foreign('user_id')->references('id')->on('users');
        // });

        Schema::create('user_social_accounts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('provider');
            $table->string('provider_uid');

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
        Schema::dropIfExists('user_social_accounts');
        // Schema::dropIfExists('subscriptions');
        Schema::dropIfExists('users');
        Schema::dropIfExists('roles');
    }
}
