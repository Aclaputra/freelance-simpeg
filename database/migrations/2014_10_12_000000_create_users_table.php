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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('skp', function (Blueprint $table) {
            $table->id();
            // $table->unsignedInteger('user_id');
            $table->string('nama')->nullable();
            $table->string('nip')->nullable();
            $table->string('jabatan')->nullable();
            $table->timestamps();
            $table->foreignId('user_id')
                ->constrained('users')
                ->onUpdate('cascade')
                ->onDelete('cascade')
                ->nullable();
        });

        // create 6 foreign key table untuk penilaian oleh pejabat penilai

        Schema::create('penilaian_aktivitas', function (Blueprint $table) {
            $table->id();
            // $table->unsignedInteger('user_id');
            $table->string('nama')->nullable();
            $table->string('nip')->nullable();
            $table->string('jabatan')->nullable();
            $table->timestamps();
            $table->foreignId('user_id')
                ->constrained('users')
                ->onUpdate('cascade')
                ->onDelete('cascade')
                ->nullable();
        });

        Schema::create('penilaian_iku', function (Blueprint $table) {
            $table->id();
            // $table->unsignedInteger('user_id');
            $table->string('nama')->nullable();
            $table->string('nip')->nullable();
            $table->string('jabatan')->nullable();
            $table->timestamps();
            $table->foreignId('user_id')
                ->constrained('users')
                ->onUpdate('cascade')
                ->onDelete('cascade')
                ->nullable();
        });

        Schema::create('penilaian_realisasi', function (Blueprint $table) {
            $table->id();
            // $table->unsignedInteger('user_id');
            $table->string('nama')->nullable();
            $table->string('nip')->nullable();
            $table->string('jabatan')->nullable();
            $table->timestamps();
            $table->foreignId('user_id')
                ->constrained('users')
                ->onUpdate('cascade')
                ->onDelete('cascade')
                ->nullable();
        });

        Schema::create('penilaian_perilaku', function (Blueprint $table) {
            $table->id();
            // $table->unsignedInteger('user_id');
            $table->string('nama')->nullable();
            $table->string('nip')->nullable();
            $table->string('jabatan')->nullable();
            $table->timestamps();
            $table->foreignId('user_id')
                ->constrained('users')
                ->onUpdate('cascade')
                ->onDelete('cascade')
                ->nullable();
        });

        Schema::create('penilaian_iki', function (Blueprint $table) {
            $table->id();
            // $table->unsignedInteger('user_id');
            $table->string('nama')->nullable();
            $table->string('nip')->nullable();
            $table->string('jabatan')->nullable();
            $table->timestamps();
            $table->foreignId('user_id')
                ->constrained('users')
                ->onUpdate('cascade')
                ->onDelete('cascade')
                ->nullable();
        });

        Schema::create('penilaian_ikp', function (Blueprint $table) {
            $table->id();
            // $table->unsignedInteger('user_id');
            $table->string('nama')->nullable();
            $table->string('nip')->nullable();
            $table->string('jabatan')->nullable();
            $table->timestamps();
            $table->foreignId('user_id')
                ->constrained('users')
                ->onUpdate('cascade')
                ->onDelete('cascade')
                ->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('skp');
        Schema::dropIfExists('penilaian_aktivitas');
        Schema::dropIfExists('penilaian_iku');
        Schema::dropIfExists('penilaian_realisasi');
        Schema::dropIfExists('penilaian_perilaku');
        Schema::dropIfExists('penilaian_iki');
        Schema::dropIfExists('penilaian_ikp');
        Schema::dropIfExists('users');

    }
};
