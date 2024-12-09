<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('bloglist', function (Blueprint $table) {
        $table->id();
        $table->string('author');
        $table->string('email');
        $table->string('blog_title');
        $table->string('blog_content');
        $table->string('date_created');
        $table->string('user_id'); // Add this line
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
