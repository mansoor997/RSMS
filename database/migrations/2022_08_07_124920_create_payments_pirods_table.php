<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsPirodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments_pirods', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('renter_contracts_id');
            $table->foreign('renter_contracts_id')->references('id')->on('renter_contracts')->onDelete('cascade');

            $table->string('payment_number');
            $table->string('payment_dueDate');
            $table->string('monthly_amount');
            $table->string('commion_RS');
            $table->string('total');
            $table->string('status');



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
        Schema::dropIfExists('payments_pirods');
    }
}
