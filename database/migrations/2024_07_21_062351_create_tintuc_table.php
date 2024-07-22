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
        Schema::create('tintuc', function (Blueprint $table) {
            $table->id();
            $table->string('tieude', 255);
            $table->text('noidung');
            $table->string('hinhanh')->nullable();
            $table->date('ngaydang');
            $table->integer('luotxem')->default(0);
            $table->foreignId('idLT')->constrained('loaitin')->onDelete('cascade');
            $table->foreignId('idUS')->constrained('user')->onDelete('cascade');
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
        Schema::dropIfExists('tintuc');
    }
};