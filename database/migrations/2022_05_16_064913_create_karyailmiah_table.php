<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * some changes
     * @return void
     */
    public function up()
    {
        Schema::create('karyailmiah', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('pencipta');
            $table->integer('years');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('karyailmiah');
    }
};
