<?php
// database/migrations/xxxx_xx_xx_create_involvement_responses_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvolvementResponsesTable extends Migration
{
    public function up()
    {
        Schema::create('involvement_responses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('interest');
            $table->timestamps(); // This will create 'created_at' and 'updated_at' fields
        });
    }

    public function down()
    {
        Schema::dropIfExists('involvement_responses');
    }
}

