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
        Schema::table('testimonials', function (Blueprint $table) {
            $table->string('profile_pic')->nullable(); // Add profile_pic field to store the user's profile picture
        });
    }
    
    public function down()
    {
        Schema::table('testimonials', function (Blueprint $table) {
            $table->dropColumn('profile_pic');
        });
    }
};    
