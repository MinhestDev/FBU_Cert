<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->string('tenVBCC', 500);
            $table->integer('soHieuVBCC');
            $table->string('certificate_type');
            $table->date('ngayCap');
            $table->float('soDiem');
            $table->string('hotenSV');
            $table->string('tenLop');
            $table->string('tenNganh');
            $table->float('diemTB');
            $table->string('xepLoai');
            $table->date('ngaySinh');
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
        Schema::dropIfExists('certificates');
    }
}
