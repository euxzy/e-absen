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
        Schema::create('walkels', function (Blueprint $table) {
            $table->id();
            $table->string('nuptk', 16)->unique();
            $table->string('nama', 50);
            $table->tinyInteger('gender');
            $table->date('tgl_lahir');
            $table->text('photo');
            $table->text('password');
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
        Schema::dropIfExists('walkels');
    }
};
