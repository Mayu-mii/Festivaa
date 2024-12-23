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
    Schema::create('mailing_lists', function (Blueprint $table) {
        $table->id();
        $table->foreignId('event_id')->constrained()->onDelete('cascade'); // Assuming you have an events table
        $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Add this line
        $table->string('name');
        $table->string('email')->unique();
        $table->string('contact_number');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mailing_lists');
    }
};
