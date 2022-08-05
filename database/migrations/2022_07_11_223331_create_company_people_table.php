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
        Schema::create('company_people', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')->references('id')->on('companies');

            $table->unsignedBigInteger('stakeholder_id')->nullable();
            $table->foreign('stakeholder_id')->references('id')->on('stakeholders');

            $table->unsignedBigInteger('user_id')->nullable();;
            $table->foreign('user_id')->references('id')->on('users');

            $table->string('status');
            $table->string('type_user');
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
        Schema::dropIfExists('company_people');
    }
};
