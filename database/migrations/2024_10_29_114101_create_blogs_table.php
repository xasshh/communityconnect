<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('name');           // Author's name
            $table->string('title');          // Blog post title
            $table->text('content');          // Blog post content
            $table->string('image_path')->nullable(); // Blog post image path
            $table->string('profile_pic')->nullable(); // Author's profile picture path
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign key to users table
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
        Schema::dropIfExists('blogs');
    }
}
