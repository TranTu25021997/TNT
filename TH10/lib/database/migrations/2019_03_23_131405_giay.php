<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Giay extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giay', function (Blueprint $table) {
            $table->bigIncrements('giay_id');
            $table->string('tengiay');
            $table->string('slug');
            $table->integer('gia');
            $table->string('hinh');
            $table->integer('soluong');
            $table->tinyInteger('trangthai');
            $table->string('tinhtrang');
            $table->string('khuyenmai');
            $table->text('mota');
            $table->integer('giay_loai')->unsigned();
            $table->foreign('giay_loai')
                  ->references('loai_id')
                  ->on('loaigiay')
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
        Schema::dropIfExists('giay');
    }
}
