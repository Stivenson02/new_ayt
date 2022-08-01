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
        Schema::create('stakeholders', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('phone')->unique();
            $table->string('first_name');
            $table->string('second_name')->nullable();
            $table->string('first_last_name');
            $table->string('second_last_name')->nullable();
            $table->string('status');
            $table->string('address')->nullable();
            $table->string('type_document');
            $table->string('document')->unique();

            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')->references('id')->on('cities');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

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
        Schema::dropIfExists('stakeholders');
    }
};
