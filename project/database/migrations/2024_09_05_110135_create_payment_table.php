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
        Schema::create('payment', function (Blueprint $table) {
            $table->bigIncrements('Pid');
            $table->unsignedBigInteger('Bid');
            $table->unsignedBigInteger('Uid');
            $table->decimal('amount', 8, 2);
            $table->string('pay_meth');
            $table->date('pdate');
            $table->time('ptime');
            $table->timestamps();

            $table->foreign('Bid')->references('Bid')->on('bookings')->onDelete('cascade');
            $table->foreign('Uid')->references('Uid')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment');
    }
};
