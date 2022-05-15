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
        Schema::create('skp', function (Blueprint $table) {
            $table->id();
            $table->string('NIP')->nullable;
            $table->string('no_hp');
            $table->string('tempat');
            $table->date('tgl_lahir');
            $table->enum('jenis_kelamin', ['Pria', 'Wanita']);
            $table->enum('agama', ['Islam', 'Protestan', 'Katolik', 'Hindu', 'Budha', 'Atheis']);
            $table->enum('kewarganegaraan', ['Indonesia', 'Luar']);
            $table->enum('status', ['Menikah', 'Belum Menikah']);
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('skp');
    }
};
