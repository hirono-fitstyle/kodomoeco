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
        Schema::create('internal_codes', function (Blueprint $table) {
            $table->string('id', 36)->primary()->comment('ID');
            $table->string('identification_name', '30')->comment('識別名');
            $table->string('key', '3')->comment('キー');
            $table->string('value', '100')->comment('値');
            
            $table->timestamps();
            $table->softDeletes();

            $table->unique(['identification_name', 'key']);

            $table->comment('内部コードマスタ');

        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('internal_codes');
    }
};
