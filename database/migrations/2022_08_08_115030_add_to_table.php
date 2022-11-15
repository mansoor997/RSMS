<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddToTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sub_users', function (Blueprint $table) {
            $table->string('owners');
            $table->string('renters');
            $table->string('accountant');
            $table->string('CRM');
            $table->string('bills');
            $table->string('tells');
            $table->string('subusers');
            $table->string('support');
            $table->string('subscriptions');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sub_users', function (Blueprint $table) {
            //
        });
    }
}
