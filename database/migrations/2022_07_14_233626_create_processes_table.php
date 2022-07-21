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
        Schema::create('processes', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('process');
            $table->string('status');
            $table->string('table')->nullable();
            $table->string('slug_table')->nullable();
            $table->integer('percentage')->nullable();
            $table->integer('total_steps')->nullable();
            $table->integer('last_step')->nullable();
            $table->string('type_url')->nullable();
            $table->string('last_url')->nullable();
            $table->string('next_url')->nullable();
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
        Schema::dropIfExists('processes');
    }
};
