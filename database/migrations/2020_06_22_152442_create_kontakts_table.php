<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKontaktsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kontakts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ime');
            $table->unsignedBigInteger('grad_id')->index();
            $table->unsignedBigInteger('razred_id')->index();
            $table->string('email');
            $table->mediumText('cas');
            $table->foreign('grad_id')->references('id')->on('grads');
            $table->foreign('razred_id')->references('id')->on('categories');
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
        Schema::dropIfExists('kontakts');
    }
}
