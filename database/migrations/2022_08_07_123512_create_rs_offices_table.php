<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRsOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rs_offices', function (Blueprint $table) {
            $table->id();
            $table->string('CRN');
            $table->string('Company_name');
            $table->string('city');
            $table->string('status');
            $table->string('presenter_name');
            $table->string('presenter_number');
            $table->string('company_logo');
            $table->string('presenter_email');
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
        Schema::dropIfExists('rs_offices');
    }
}
