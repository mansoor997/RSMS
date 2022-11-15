<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwnersPropartiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owners_proparties', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('owners_id');
            $table->foreign('owners_id')->references('id')->on('owners')->onDelete('cascade');
            $table->string('name');
            $table->string('type');
            $table->string('city');
            $table->string('deed_number');
            $table->string('google_maps');

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
        Schema::dropIfExists('owners_proparties');
    }
}
