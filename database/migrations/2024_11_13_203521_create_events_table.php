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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('event_name');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->text('description');
            $table->longText('photo')->nullable();
            $table->string('organizer');
            $table->string('location');
            $table->text('detail_description');
            $table->integer('max_capacity');
            $table->integer('tickets_bought');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
