<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoadons', function (Blueprint $table) {
            $table->string('maHD', 10)->primary();
            $table->string('maKH', 10);
            $table->string('maNV', 10);
            $table->dateTime('ngayThanhToan');
            $table->string('SDT', 20);
            $table->string('email', 255);
            $table->foreign('maKH')->references('maKH')->on('khach_hangs');
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
        Schema::dropIfExists('hoa_dons');
    }
};
