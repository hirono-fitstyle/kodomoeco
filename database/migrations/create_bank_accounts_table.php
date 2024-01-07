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
        Schema::create('bank_accounts', function (Blueprint $table) {
            $table->integer('number')->comment('システム管理番号');
            $table->string('operator_number', '7')->comment('事業者登録番号');
            $table->string('kinyu_kikan_name', '100')->comment('登録口座名称');
            $table->string('kinyu_kikan_code', '3')->comment('金融機関コード');
            $table->string('kinyu_kikan_mei', '100')->comment('金融機関名');
            $table->string('kinyu_kikan_shiten_code', '3')->comment('支店コード');
            $table->string('kinyu_kikan_shiten_mei', '100')->comment('支店名');
            $table->string('kinyu_kikan_yokin_kubun', '1')->comment('預金種別');
            $table->string('kinyu_kikan_yokin_kubun_sonota', '100')->nullable()->comment('預金種別　その他備考');
            $table->string('kinyu_kikan_kouza_bangou', '7')->comment('口座番号');
            $table->string('kinyu_kikan_kouza_meiginin_kana', '50')->comment('口座名義人');
            
            $table->timestamps();
            $table->softDeletes();

            $table->unique(['number', 'operator_number']);

            $table->comment('口座情報');

        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bank_accounts');
    }
};
