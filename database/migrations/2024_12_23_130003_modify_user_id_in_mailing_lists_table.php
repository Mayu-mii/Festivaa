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
    Schema::table('mailing_lists', function (Blueprint $table) {
        $table->unsignedBigInteger('user_id')->nullable()->change(); // Make user_id nullable
    });
}

public function down()
{
    Schema::table('mailing_lists', function (Blueprint $table) {
        $table->unsignedBigInteger('user_id')->nullable(false)->change(); // Revert to NOT NULL if needed
    });
}
};
