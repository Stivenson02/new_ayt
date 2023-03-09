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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('movement_name_id');
            $table->foreign('movement_name_id')->references('id')->on('movement_names');
            $table->unsignedBigInteger('movement_type_id');
            $table->foreign('movement_type_id')->references('id')->on('movement_types');
            $table->unsignedBigInteger('payment_method_id');
            $table->foreign('payment_method_id')->references('id')->on('payment_methods');
            $table->string('description');
            $table->string('payment_invoice')->nullable();
            $table->string('payment_recipient')->nullable();
            $table->string('registration_date');
            $table->string('amount');
            $table->string('status');
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
        Schema::dropIfExists('services');
    }
};
