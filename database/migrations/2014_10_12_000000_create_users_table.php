<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        /*
        *** Tạo table users
        */
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 20)->nullable();
            $table->string('email', 20)->unique();
            $table->string('password');
            $table->string('phone', 10)->nullable();
            $table->text('address')->nullable();
            $table->enum('role', ['user', 'admin'])->default('user');
            $table->string('session_token')->nullable()->unique();
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
        Schema::dropIfExists('users');
    }
};
