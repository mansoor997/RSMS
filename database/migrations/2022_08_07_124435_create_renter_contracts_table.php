<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRenterContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('renter_contracts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('renters_id');
            $table->foreign('renters_id')->references('id')->on('renters')->onDelete('cascade');
            $table->unsignedBigInteger('owners_id');
            $table->foreign('owners_id')->references('id')->on('owners')->onDelete('cascade');
            $table->string('contract_number');
            $table->string('rent_start_date');
            $table->string('rent_end_date');
            $table->string('electricity');
            $table->string('water');
            $table->string('contract');
            $table->string('paid_pirod');
            $table->string('commion_RS');
            $table->string('monthly_amount');

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
        Schema::dropIfExists('renter_contracts');
    }
}
