<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rs_offices_id');
            $table->foreign('rs_offices_id')->references('id')->on('rs_offices')->onDelete('cascade');
            $table->string('email');
            $table->string('password');
            $table->boolean('owners')->default(0)->change();
            $table->boolean('renters')->default(0)->change();
            $table->boolean('accountant')->default(0)->change();
            $table->boolean('CRM')->default(0)->change();
            $table->boolean('bills')->default(0)->change();
            $table->boolean('tells')->default(0)->change();
            $table->boolean('subusers')->default(0)->change();
            $table->boolean('support')->default(0)->change();
            $table->boolean('subscriptions')->default(0)->change();
            $table->string('userType');

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
        Schema::dropIfExists('sub_users');
    }
}
