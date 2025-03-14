<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('role', ['user', 'admin'])->default('user');
<<<<<<<< HEAD:database/migrations/2025_03_05_125117_create_users_table.php
            $table->string('phone', 15)->nullable();
            $table->text('address')->nullable();
            $table->string('image')->nullable();
========
>>>>>>>> fitur-tertinggal:database/migrations/2025_03_03_125741_create_users_table.php
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}