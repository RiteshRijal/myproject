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
        Schema::create('assign_vaccines', function (Blueprint $table) {
            $table->id();
                $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('center_id');
            $table->unsignedBigInteger('doze_id');
            $table->integer( 'vaccine_no')->nullable();
            $table->foreign('category_id')->references('id')->on('vaccine_categories');
            $table->foreign('center_id')->references('id')->on('vaccinecenter');
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
        Schema::dropIfExists('assign_vaccines');
    }
};
