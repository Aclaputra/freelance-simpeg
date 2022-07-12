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
        // Schema::create('penilaian_aktivitas', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('nama');
        //     $table->string('nip');
        //     $table->string('jabatan');
        //     $table->timestamps();
        // });

        // // create 6 foreign key table untuk penilaian oleh pejabat penilai

        // Schema::create('skp', function (Blueprint $table) {
        //     $table->id();
        //     // $table->unsignedInteger('user_id');
        //     $table->string('nama');
        //     $table->string('nip');
        //     $table->string('jabatan');
        //     $table->timestamps();
        //     $table->foreignId('user_id')
        //         ->constrained('penilaian_aktivitas')
        //         ->onUpdate('cascade')
        //         ->onDelete('cascade');
        // });

        // Schema::create('skp', function (Blueprint $table) {
        //     $table->id();
        //     // $table->unsignedInteger('user_id');
        //     $table->string('nama');
        //     $table->string('nip');
        //     $table->string('jabatan');
        //     $table->timestamps();
        //     $table->foreignId('user_id')
        //         ->constrained('penilaian_aktivitas')
        //         ->onUpdate('cascade')
        //         ->onDelete('cascade');
        // });

        // Schema::create('skp', function (Blueprint $table) {
        //     $table->id();
        //     // $table->unsignedInteger('user_id');
        //     $table->string('nama');
        //     $table->string('nip');
        //     $table->string('jabatan');
        //     $table->timestamps();
        //     $table->foreignId('user_id')
        //         ->constrained('penilaian_aktivitas')
        //         ->onUpdate('cascade')
        //         ->onDelete('cascade');
        // });

        // Schema::create('skp', function (Blueprint $table) {
        //     $table->id();
        //     // $table->unsignedInteger('user_id');
        //     $table->string('nama');
        //     $table->string('nip');
        //     $table->string('jabatan');
        //     $table->timestamps();
        //     $table->foreignId('user_id')
        //         ->constrained('penilaian_aktivitas')
        //         ->onUpdate('cascade')
        //         ->onDelete('cascade');
        // });

        // Schema::create('skp', function (Blueprint $table) {
        //     $table->id();
        //     // $table->unsignedInteger('user_id');
        //     $table->string('nama');
        //     $table->string('nip');
        //     $table->string('jabatan');
        //     $table->timestamps();
        //     $table->foreignId('user_id')
        //         ->constrained('penilaian_aktivitas')
        //         ->onUpdate('cascade')
        //         ->onDelete('cascade');
        // });

        // Schema::create('skp', function (Blueprint $table) {
        //     $table->id();
        //     // $table->unsignedInteger('user_id');
        //     $table->string('nama');
        //     $table->string('nip');
        //     $table->string('jabatan');
        //     $table->timestamps();
        //     $table->foreignId('user_id')
        //         ->constrained('penilaian_aktivitas')
        //         ->onUpdate('cascade')
        //         ->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penilaian_aktivitas');
    }
};
