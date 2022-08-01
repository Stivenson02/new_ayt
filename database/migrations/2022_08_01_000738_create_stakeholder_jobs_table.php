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
        Schema::create('stakeholder_jobs', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('job_id');
            $table->foreign('job_id')->references('id')->on('jobs');

            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')->references('id')->on('companies');

            $table->unsignedBigInteger('stakeholder_id');
            $table->foreign('stakeholder_id')->references('id')->on('stakeholders');

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
        Schema::dropIfExists('stakeholder_jobs');
    }
};
