<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddToRenterContractsPropp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('renter_contracts', function (Blueprint $table) {
            $table->unsignedBigInteger('propartie_id');
            $table->foreign('propartie_id')->references('id')->on('owners_proparties')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('renter_contracts', function (Blueprint $table) {
            //
        });
    }
}
