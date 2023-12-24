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
        Schema::create('mst_kouzas', function (Blueprint $table) {
            $table->integer('number')->comment('システム管理番号');
            $table->string('operatorId', '9')->comment('事業者ID');
            $table->string('kinyuKikanName', '100')->comment('登録口座名称');
            $table->string('kinyuKikanCode', '3')->comment('金融機関コード');
            $table->string('kinyuKikanMei', '100')->comment('金融機関名');
            $table->string('kinyuKikanShitenCode', '3')->comment('支店コード');
            $table->string('kinyuKikanShitenMei', '100')->comment('支店名');
            $table->string('kinyuKikanYokinKubun', '1')->comment('預金種別');
            $table->string('kinyuKikanYokinKubunSonota', '100')->comment('預金種別　その他備考');
            $table->string('kinyuKikanKouzaBangou', '7')->comment('口座番号');
            $table->string('kinyuKikanKouzaMeigininKana', '50')->comment('口座名義人');
            
            $table->timestamps();
            $table->softDeletes();

            $table->unique(['number', 'operatorId']);

            $table->comment('口座情報');

        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mst_kouzas');
    }
};
