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
    Schema::create('blog_posts', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('name'); // New field for author's name
        $table->text('content');
        $table->string('image_path')->nullable(); // Blog post image
        $table->string('profile_pic')->nullable(); // Profile picture of the author
        $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Associate with user
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_posts');
    }
};
