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
        Schema::create('vaccines', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vaccinecenter_id');
            $table->unsignedBigInteger('vaccine_category_id');
            $table->integer( 'quantity');
            $table->boolean('status')->default(0);
            $table->timestamps();
            $table->foreign('vaccinecenter_id')->references('id')->on('vaccinecenter');
            $table->foreign('vaccine_category_id')->references('id')->on('vaccine_categories');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vaccines');
    }
};
