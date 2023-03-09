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
        Schema::create('movement_names', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('movement_type_id');
            $table->foreign('movement_type_id')->references('id')->on('movement_types');
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
        Schema::dropIfExists('movement_names');
    }
};
