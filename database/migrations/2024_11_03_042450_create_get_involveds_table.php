<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('get_involveds', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('event_id'); // Foreign key to events
            $table->unsignedBigInteger('user_id'); // User who submitted the form
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->text('availability');
            $table->text('skills');
            $table->timestamps();

            // Foreign key constraints (if you have these tables)
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('get_involveds');
    }
};
