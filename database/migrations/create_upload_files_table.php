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
            $table->integer('operatorId')->comment('補助事業者ID');
            $table->integer('fileNo')->comment('ファイル番号');
            $table->string('fileType', '1')->comment('添付タイプ');
            $table->string('fileName', '50')->comment('ファイル名');
            $table->datetime('uploadDate')->comment('添付日');
            $table->string('remark', '100')->nullable()->comment('備考');
            $table->string('setNo', '100')->comment('セット番号');
            
            $table->timestamps();
            $table->softDeletes();

            $table->unique(['operatorId', 'fileNo']);

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
