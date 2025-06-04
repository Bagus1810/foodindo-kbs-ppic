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
        Schema::create('lead_time', function (Blueprint $table) {
            $table->id();
            $table->string('KODE')->nullable();
            $table->string('NAMA')->nullable();
            $table->string('TYPE')->nullable();
            $table->integer('HARI')->nullable();
            $table->integer('QUANTITY')->nullable();
            $table->integer('USERID')->nullable();
            $table->dateTime('TGL_ID', $precision = 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lead_time');
    }
};
