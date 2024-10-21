<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('Bid');
            $table->unsignedBigInteger('Uid');
            $table->unsignedBigInteger('Aid');
            $table->date('date');
            $table->time('time_from');
            $table->time('time_to');
            $table->string('con_status');
            $table->boolean('need_instructor');
            $table->timestamps();

            $table->foreign('Uid')->references('Uid')->on('users')->onDelete('cascade');
            $table->foreign('Aid')->references('Aid')->on('arenas')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};

