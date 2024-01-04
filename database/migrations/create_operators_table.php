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
        Schema::create('operators', function (Blueprint $table) {
            $table->string('operatorNumber', '7')->comment('事業者登録番号');
            $table->string('operatorPasscode', '6')->comment('連携用パスコード');
            $table->integer('operatorId')->comment('補助事業者ID');
            $table->string('operatorStatus', '1')->comment('事業者登録ステータス');
            $table->string('operatorCategory', '1')->nullable()->comment('補助事業者区分');
            $table->string('oath', '1')->nullable()->comment('宣誓');
            $table->string('corpNumber', '13')->nullable()->comment('法人番号');
            $table->string('operatorName', '50')->nullable()->comment('法人名・屋号');
            $table->string('operatorTitle', '30')->nullable()->comment('代表者 肩書');
            $table->string('representativeLastName', '20')->nullable()->comment('代表者 氏名（氏）');
            $table->string('representativeFirstName', '20')->nullable()->comment('代表者 氏名（名）');
            $table->string('operatorZipCode', '7')->nullable()->comment('所在地（郵便番号）');
            $table->string('operatorPrefecture', '10')->nullable()->comment('所在地（都道府県）');
            $table->string('operatorCity', '30')->nullable()->comment('所在地（市区町村）');
            $table->string('operatorAddress', '50')->nullable()->comment('所在地（丁目番地等）');
            $table->string('operatorAddressSolo', '50')->nullable()->comment('所在地（丁目番地等）※個人事業主');
            $table->string('operatorBuildingSolo', '50')->nullable()->comment('所在地（建物名）※個人事業主');
            $table->string('operatorRoomNumberSolo', '10')->nullable()->comment('所在地（部屋番号）※個人事業主');
            $table->string('staffDepartment', '100')->nullable()->comment('担当者 部署');
            $table->string('staffPosision', '100')->nullable()->comment('担当者 役職');
            $table->string('staffLastName', '20')->comment('担当者 氏名（氏）');
            $table->string('staffFirstName', '20')->comment('担当者 氏名（名）');
            $table->string('staffZipcode', '7')->nullable()->comment('担当者 住所（郵便番号）');
            $table->string('staffPrefecture', '10')->nullable()->comment('担当者 住所（都道府県）');
            $table->string('staffCity', '30')->nullable()->comment('担当者 住所（市区町村）');
            $table->string('staffAddress', '50')->nullable()->comment('担当者 住所（丁目番地等）');
            $table->string('staffBuilding', '50')->nullable()->comment('担当者 住所（建物名）');
            $table->string('staffRoomNumber', '10')->nullable()->comment('担当者 住所（部屋番号）');
            $table->string('staffTel', '11')->nullable()->comment('担当者 電話番号（固定）');
            $table->string('staffMobile', '11')->nullable()->comment('担当者 電話番号（携帯）');
            $table->string('staffMail', '100')->comment('担当者 メールアドレス');
            $table->boolean('publicProject1')->nullable()->comment('公開情報 参加補助金事業（こどもエコすまい）');
            $table->boolean('publicProject2')->nullable()->comment('公開情報 参加補助金事業（高効率給湯器）');
            $table->boolean('publicProject3')->nullable()->comment('公開情報 参加補助金事業（断熱窓）');
            $table->boolean('publicBuisiness1')->nullable()->comment('公開情報 参加事業（注文住宅の新築）');
            $table->boolean('publicBuisiness2')->nullable()->comment('公開情報 参加事業（新築分譲住宅の販売）');
            $table->boolean('publicBuisiness3')->nullable()->comment('公開情報 参加事業（リフォーム工事）');
            $table->boolean('publicBuisiness4')->nullable()->comment('公開情報 参加事業公開情報 参加事業（リース事業者）');
            $table->boolean('publicBuisiness5')->nullable()->comment('公開情報 参加補助金事業（エネルギー小売）');
            $table->boolean('constructionFlag')->nullable()->comment('建設業許可有無');
            $table->string('constructionCategory', '2')->nullable()->comment('建設業許可区分');
            $table->string('constructionCategory2', '1')->nullable()->comment('建設業許可区分2');
            $table->string('constructionNumber', '6')->nullable()->comment('建設業許可番号');
            $table->boolean('realEstateFlag')->nullable()->comment('宅建業許可有無');
            $table->string('realEstateCategory', '2')->nullable()->comment('宅建業許可区分');
            $table->string('constructionPreNumber', '3')->nullable()->comment('建設業許可更新番号');
            $table->string('realEstatePreNumber', '3')->nullable()->comment('宅建業許可更新番号');
            $table->string('realEstateNumber', '6')->nullable()->comment('宅建業許可番号');
            $table->boolean('reformFlag')->nullable()->comment('住宅リフォーム事業者団体登録有無');
            $table->string('reformAssociation', '2')->nullable()->comment('住宅リフォーム事業者団体');
            $table->string('reformAssociationUrl', '100')->nullable()->comment('住宅リフォーム事業者団体URL');
            $table->boolean('publicProjectAbolishFlag1')->nullable()->comment('公開情報 参加補助金事業（こどもエコすまい）廃止フラグ');
            $table->boolean('publicProjectAbolishFlag2')->nullable()->comment('公開情報 参加補助金事業（高効率給湯器）廃止フラグ');
            $table->boolean('publicProjectAbolishFlag3')->nullable()->comment('公開情報 参加補助金事業（断熱窓）廃止フラグ');
            $table->boolean('recieveMailFlag')->nullable()->comment('メール受信希望フラグ');
            $table->boolean('privacyPolicyConsent1')->nullable()->comment('プライバシーポリシー同意1');
            $table->boolean('privacyPolicyConsent2')->nullable()->comment('プライバシーポリシー同意2');

            $table->timestamps();
            $table->softDeletes();

            $table->unique(['operatorNumber']);

            $table->comment('事業者情報');

        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('operators');
    }
};
