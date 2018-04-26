<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRequisitesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requisites', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('payment_via')->nullable();
            $table->string('webmonney')->nullable();
            $table->string('qiwi_wallet')->nullable();
            $table->string('yandex_money')->nullable();
            $table->string('rnn')->nullable();
            $table->string('checking_account')->nullable();
            $table->string('bank')->nullable();
            $table->string('mfo')->nullable();
            $table->string('bin')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('requisites');
    }
}
