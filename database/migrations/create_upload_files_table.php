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
        Schema::create('upload_files', function (Blueprint $table) {
            $table->string('operator_number', '7')->comment('事業者登録番号');
            $table->integer('file_no')->comment('ファイル番号');
            $table->string('file_type', '1')->comment('添付タイプ');
            $table->string('file_name', '50')->comment('ファイル名');
            $table->datetime('upload_date')->comment('添付日');
            $table->string('remark', '100')->nullable()->comment('備考');
            $table->string('setNo', '100')->nullable()->comment('セット番号');
            
            $table->timestamps();
            $table->softDeletes();

            $table->unique(['operator_number', 'file_no']);

            $table->comment('添付ファイル情報');

        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('upload_files');
    }
};
