<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Binhluan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('binhluan', function (Blueprint $table) {
            $table->bigIncrements('bl_id');
            $table->string('bl_email');
            $table->string('bl_name');
            $table->string('bl_noidung');
            $table->integer('bl_giay')->unsigned();
            $table->foreign('bl_giay')
                  ->references('giay_id')
                  ->on('giay')
                  ->onDelete('cascade');

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
        Schema::dropIfExists('binhluan');
    }
}
