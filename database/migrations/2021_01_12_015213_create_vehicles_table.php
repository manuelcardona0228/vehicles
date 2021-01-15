<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('licensePlate', 6);
            $table->string('licensePlateLocation', 64);
            $table->integer('passengerCapacity');
            $table->integer('displacement');
            $table->bigInteger('mileage');
            $table->string('slug', 64);
            $table->unsignedBigInteger('brand_id');
            $table->unsignedBigInteger('line_id');
            $table->unsignedBigInteger('model_id');
            $table->unsignedBigInteger('vehicle_type_id');
            $table->unsignedBigInteger('fuel_id');
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
        Schema::dropIfExists('vehicles');
    }
}
