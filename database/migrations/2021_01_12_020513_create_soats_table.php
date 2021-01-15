<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soats', function (Blueprint $table) {
            $table->id();
            $table->string('policyNumber', 125);
            $table->date('expeditionDate');
            $table->date('validity');
            $table->text('document');
            $table->decimal('cost', '12', '2');
            $table->string('slug', 255);
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
        Schema::dropIfExists('soats');
    }
}
