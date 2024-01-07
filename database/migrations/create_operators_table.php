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
            $table->string('operator_number', '7')->comment('事業者登録番号');
            $table->string('operator_passcode', '6')->comment('連携用パスコード');
            $table->integer('operator_id')->comment('補助事業者ID');
            $table->string('operator_status', '1')->comment('事業者登録ステータス');
            $table->string('operator_category', '1')->nullable()->comment('補助事業者区分');
            $table->string('oath', '1')->nullable()->comment('宣誓');
            $table->string('corp_number', '13')->nullable()->comment('法人番号');
            $table->string('operator_name', '50')->nullable()->comment('法人名・屋号');
            $table->string('operator_title', '30')->nullable()->comment('代表者 肩書');
            $table->string('representative_last_name', '20')->nullable()->comment('代表者 氏名（氏）');
            $table->string('representative_first_name', '20')->nullable()->comment('代表者 氏名（名）');
            $table->string('operator_zipcode', '7')->nullable()->comment('所在地（郵便番号）');
            $table->string('operator_prefecture', '10')->nullable()->comment('所在地（都道府県）');
            $table->string('operator_city', '30')->nullable()->comment('所在地（市区町村）');
            $table->string('operator_address', '50')->nullable()->comment('所在地（丁目番地等）');
            $table->string('operator_address_solo', '50')->nullable()->comment('所在地（丁目番地等）※個人事業主');
            $table->string('operator_building_solo', '50')->nullable()->comment('所在地（建物名）※個人事業主');
            $table->string('operator_room_number_solo', '10')->nullable()->comment('所在地（部屋番号）※個人事業主');
            $table->string('staff_department', '100')->nullable()->comment('担当者 部署');
            $table->string('staff_posision', '100')->nullable()->comment('担当者 役職');
            $table->string('staff_last_name', '20')->comment('担当者 氏名（氏）');
            $table->string('staff_first_name', '20')->comment('担当者 氏名（名）');
            $table->string('staff_zipcode', '7')->nullable()->comment('担当者 住所（郵便番号）');
            $table->string('staff_prefecture', '10')->nullable()->comment('担当者 住所（都道府県）');
            $table->string('staff_city', '30')->nullable()->comment('担当者 住所（市区町村）');
            $table->string('staff_address', '50')->nullable()->comment('担当者 住所（丁目番地等）');
            $table->string('staff_building', '50')->nullable()->comment('担当者 住所（建物名）');
            $table->string('staff_room_number', '10')->nullable()->comment('担当者 住所（部屋番号）');
            $table->string('staff_tel', '11')->nullable()->comment('担当者 電話番号（固定）');
            $table->string('staff_mobile', '11')->nullable()->comment('担当者 電話番号（携帯）');
            $table->string('staff_mail', '100')->comment('担当者 メールアドレス');
            $table->boolean('public_project1')->nullable()->comment('公開情報 参加補助金事業（こどもエコすまい）');
            $table->boolean('public_project2')->nullable()->comment('公開情報 参加補助金事業（高効率給湯器）');
            $table->boolean('public_project3')->nullable()->comment('公開情報 参加補助金事業（断熱窓）');
            $table->boolean('public_buisiness1')->nullable()->comment('公開情報 参加事業（注文住宅の新築）');
            $table->boolean('public_buisiness2')->nullable()->comment('公開情報 参加事業（新築分譲住宅の販売）');
            $table->boolean('public_buisiness3')->nullable()->comment('公開情報 参加事業（リフォーム工事）');
            $table->boolean('public_buisiness4')->nullable()->comment('公開情報 参加事業公開情報 参加事業（リース事業者）');
            $table->boolean('public_buisiness5')->nullable()->comment('公開情報 参加補助金事業（エネルギー小売）');
            $table->boolean('construction_flag')->nullable()->comment('建設業許可有無');
            $table->string('construction_category', '2')->nullable()->comment('建設業許可区分');
            $table->string('construction_category2', '1')->nullable()->comment('建設業許可区分2');
            $table->string('construction_number', '6')->nullable()->comment('建設業許可番号');
            $table->boolean('real_estate_flag')->nullable()->comment('宅建業許可有無');
            $table->string('real_estate_category', '2')->nullable()->comment('宅建業許可区分');
            $table->string('construction_pre_number', '3')->nullable()->comment('建設業許可更新番号');
            $table->string('real_estate_pre_number', '3')->nullable()->comment('宅建業許可更新番号');
            $table->string('real_estate_number', '6')->nullable()->comment('宅建業許可番号');
            $table->boolean('reform_flag')->nullable()->comment('住宅リフォーム事業者団体登録有無');
            $table->string('reform_association', '2')->nullable()->comment('住宅リフォーム事業者団体');
            $table->string('reform_association_url', '100')->nullable()->comment('住宅リフォーム事業者団体URL');
            $table->boolean('public_project_abolish_flag1')->nullable()->comment('公開情報 参加補助金事業（こどもエコすまい）廃止フラグ');
            $table->boolean('public_project_abolish_flag2')->nullable()->comment('公開情報 参加補助金事業（高効率給湯器）廃止フラグ');
            $table->boolean('public_project_abolish_flag3')->nullable()->comment('公開情報 参加補助金事業（断熱窓）廃止フラグ');
            $table->boolean('recieve_mail_flag')->nullable()->comment('メール受信希望フラグ');
            $table->boolean('privacy_policy_consent1')->nullable()->comment('プライバシーポリシー同意1');
            $table->boolean('privacy_policy_consent2')->nullable()->comment('プライバシーポリシー同意2');
            $table->timestamps();
            $table->softDeletes();

            $table->unique(['operator_number']);

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
