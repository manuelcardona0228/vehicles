<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTireConditionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tire_conditions', function (Blueprint $table) {
            $table->id();
            $table->date('reviewDate');
            $table->date('newReviewDate');
            $table->integer('mileageCurrent');
            $table->integer('mileageNewReview');
            $table->text('description');
            $table->unsignedBigInteger('vehicle_id');
            $table->boolean('state');
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
        Schema::dropIfExists('tire_conditions');
    }
}
