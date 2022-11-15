<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRenterDocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('renter_docs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('renters_id');
            $table->foreign('renters_id')->references('id')->on('renters')->onDelete('cascade');
            $table->string('name');
            $table->string('type');
            $table->string('upload_by');

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
        Schema::dropIfExists('renter_docs');
    }
}
