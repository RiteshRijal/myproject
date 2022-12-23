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
        Schema::create('vaccine_request', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('center_id')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('doze_id')->nullable();
            $table->date('appointment_date');
            $table->foreign('user_id')->references('id')->on('users_registration');
            $table->foreign('center_id')->references('id')->on('vaccinecenter');
            $table->foreign('category_id')->references('id')->on('vaccine_categories');
            $table->foreign('doze_id')->references('id')->on('dozes');
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
        Schema::dropIfExists('vaccine_request');
    }
};
