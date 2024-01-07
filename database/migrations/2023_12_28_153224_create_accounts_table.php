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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('operator_number', 7)->nullable();
            $table->string('verify_token', '32')->nullable();
            $table->timestamp('verify_expired_at')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->boolean('is_reset_password')->nullable();
            $table->string('password_reset_token', '32')->nullable();
            $table->timestamp('password_reset_expired_at')->nullable();
            $table->timestamp('password_reset_verified_at')->nullable();
            $table->string('last_name', '20');
            $table->string('first_name', '20');
            $table->string('email', '100');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
