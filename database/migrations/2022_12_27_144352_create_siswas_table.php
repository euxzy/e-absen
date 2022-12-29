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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('id_role')->default(1);
            $table->bigInteger('id_kelas');
            $table->string('nama', 50);
            $table->string('nis', 10)->unique();
            $table->string('nisn', 10)->unique();
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
        Schema::dropIfExists('siswas');
    }
};
