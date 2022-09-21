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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nick', 191)->unique();
            $table->string('name', 191)->nullable()->default('');
            $table->string('surname', 191)->nullable()->default('');
            $table->string('email', 191)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 191);
            $table->string('image', 191)->nullable()->default('');
            $table->date('birth_date')->nullable()->default("1900-01-01");
            $table->string('phone', 191)->nullable()->default('');
            $table->boolean('status')->default(true);
            $table->rememberToken()->nullable();
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
