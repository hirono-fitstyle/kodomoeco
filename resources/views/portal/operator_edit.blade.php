<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>住宅省エネ2024キャンペーン【公式】</title>
    <meta content="「住宅省エネ2024キャンペーン」の公式サイトです。" name="description">
    <meta content="住宅省エネ2024キャンペーン" name="keyword">
    <meta content="IE=Edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width" name="viewport">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/business.css') }}">
</head>

<body>
<header>
    <p class="note">ブラウザの「戻る」ボタンは使用できません</p>
    <p class="p-header-logo">
        <a href="/">
            <picture>
                <img alt="住宅省エネ 2024キャンペーン" src="{{ asset('/img/logo.svg') }}">
            </picture>
        </a>
        <span class="">共通ポータル</span>
    </p>
    <div class="config">
        <div class="list">
            <p class="name">{{ session('staff_name') }}</p>
            <div class="under">
                <p>
                    <a href="{{ route('portal.change-password') }}">
                        パスワード変更画面
                    </a>
                </p>
                <p>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        ログアウト
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                    </form>
                </p>
            </div>
        </div>
    </div>
</header>
<div class="gnav">
    <ul>
        <li><a class="is-active" href="">TOPに戻る</a></li>
        <li><a href="">担当者管理</a></li>
        <li><a href="">申請検索</a></li>
        <li><a href="">入金管理</a></li>
        <li><a href="">変更依頼（総括アカウント）</a></li>
    </ul>
</div>
<main>
    <form action="{{ route('portal.operator.update') }}" method="POST">
    @method('PUT')
    @csrf
        <h2 class="u-typography-6 u-margin-bottom-30">① 事業者登録の情報｜編集画面</h2>
        <div class="u-margin-bottom-30">
            <input class="btn white" name="temporary_save_button" value="仮保存" type="submit"
                onclick="return confirm('現在の内容で保存をします。よろしいですか？')">
            <input class="btn orange" name="permanent_save_button" value="保存" type="submit"
                onclick="return confirm('現在の内容で保存をします。よろしいですか？')">
            <p class="btn none">
                <a href="{{ route('portal.operator.detail') }}"
                    onclick="return confirm('詳細画面へ戻りますがよろしいですか。\n※入力した内容は保存されません。')">詳細へ戻る
                </a>
            </p>
        </div>
        <p class=" u-margin-bottom-30"><span class="u-color-text-red">＊</span>は必ず入力してください。</p>
        <div class="bg2 u-margin-bottom-60">
            <div class="detailbox u-margin-bottom-60">
                <div class="ttl3">管理情報</div>
                <dl class="bg4">
                    <dt><span>事業者登録ステータス</span></dt>
                    <dd>
                        <div>
                            {{ $operator->operator_status }}
                        </div>
                    </dd>
                </dl>
                <dl class="bg4">
                    <dt><span>登録事業者番号</span></dt>
                    <dd>
                        <div>
                            {{ $operator->operator_number }}
                        </div>
                    </dd>
                </dl>
            </div>
            <h4 class="u-typography-6 u-margin-bottom-20">① 住宅省エネ支援事業者の情報</h4>
            <div class="detailbox u-margin-bottom-60">
                <dl class="bg4">
                    <dt><span class="required">事業者種別</span></dt>
                    <dd>
                        <div>
                            <ul class="businesslist1">
                                <li>
                                    <input id="business1" name="operatorCategory" type="radio"
                                        {{ $operator->operator_category == 1 ? "checked" : "" }} required>
                                    <label for="business1">法人</label>
                                    <span class="u-color-text-red">※登録申請書に押印する印鑑が登録された「法人の印鑑証明」と「法人登記」の添付が必要です。</span>
                                </li>
                                <li>
                                    <input id="business2" name="operatorCategory" type="radio"
                                        {{ $operator->operator_category == 2 ? "checked" : "" }} required>
                                    <label for="business2">個人事業主</label>
                                    <span class="u-color-text-red">※登録申請書に押印する印鑑が登録された「個人の印鑑証明」の添付が必要です。</span>
                                </li>
                            </ul>
                        </div>
                    </dd>
                </dl>
                <dl class="bg4">
                    <dt><span class="required">宣誓</span></dt>
                    <dd>
                        <div>
                            <p class="check">
                                <input id="a" name="oath" type="checkbox"
                                    {{ $operator->oath == 1 ? "checked" : "" }} required>
                                <label for="a">以下に該当しません。 （法人においては、役員等（実質的に経営に関与する者を含む））</label>
                            </p>
                            <p>暴力団（暴力団員による不当な行為の防止等に関する法律（平成３年法律第７７号）第２条第２号に規定する暴力団をいう。以下同じ。）又は暴力団員（同条第６号に規定する暴力団員をいう。以下同じ。）である者、不正の利益を図る目的若しくは第三者に損害を加える目的をもって暴力団若しくは暴力団員を利用している者、資金等の供給若しくは便宜の供与等により直接的あるいは積極的に暴力団の維持、運営に協力し、若しくは関与している者、又は暴力団若しくは暴力団員であることを知りながらこれと社会的に非難されるべき関係を有している者</p>
                        </div>
                    </dd>
                </dl>
                <dl class="bg4">
                    <dt><span>建設業許可の有無</br><span class="u-color-text-red">※いずれか必須</span></span> </dt>
                    <dd>
                        <div>
                            <dl class="column2">
                                <dt class="w150"><span>建設業許可番号</span></dt>
                                <dd >
                                    <ul class="businesslist4">
                                        <li>
                                            <input id="construction_flag" name="construction_flag" type="radio"
                                                {{ $operator->construction_flag == 1 ? "checked" : "" }} required>
                                            <label for="construction_flag">あり</label>
                                            <div class="select-box w150">
                                                <select id="" name="constructionCategory">
                                                    <option value=""></option>
                                                    <option value=""></option>
                                                </select>
                                            </div>
                                            <span>許可</span>
                                            <div class="select-box w60">
                                                <select id="" name="constructionCategory2">
                                                    <option value=""></option>
                                                    <option value=""></option>
                                                </select>
                                            </div>
                                            <span></span>
                                            <input type="text" name="construction_pre_number" value="{{ old('constructionPreNumber', $operator->construction_pre_number) }}"
                                                class="w60" maxlength="3" inputmode="numeric" pattern="\d*">
                                            <span>第</span>
                                            <input type="text" name="construction_number" value="{{ old('constructionNumber', $operator->construction_number) }}"
                                                class="w150" maxlength="6" inputmode="numeric" pattern="\d*">
                                            <span>号</span>
                                        </li>
                                        <li>
                                            <input id="construction_flag" name="construction_flag" type="radio"
                                                {{ $operator->construction_flag == 0 ? "checked" : "" }} required>
                                            <label for="construction_flag">なし（申請中を含む）</label>
                                        </li>
                                    </ul>
                                </dd>
                            </dl>
                        </div>
                    </dd>
                </dl>
            </div>
            <h4 class="u-typography-6 u-margin-bottom-20">② 法人の情報</h4>
            <div class="detailbox u-margin-bottom-60">
                <dl class="bg4">
                    <dt class="required"><span>法人番号</span></dt>
                    <dd>
                        <div>
                            <p class="u-margin-bottom-10">
                                <input type="text" name="corp_number" value="{{ old('corpNumber', $operator->corp_number) }}"
                                    class="w150" minlength="13" maxlength="13" inputmode="numeric" pattern="\d*" require>
                                <span class="btn orange left20">法人番号入力完了</span>
                            </p>
                            <a href="https://www.houjin-bangou.nta.go.jp/" target="_blank" rel="noopener noreferrer"><span class="btn white">国税庁HP</span></a>
                            <span>※国税庁「法人番号公表サイト」で調べられます。</span>
                        </div>
                    </dd>
                </dl>
                <dl class="bg4">
                    <dt><span>法人名（商号または名称）</span></dt>
                    <dd>
                        <div class="entered">
                            <input class="w500 lock" id="" name="operator_name" type="text"
                                value="{{ old('operato_name', $operator->operator_name) }}" disabled>
                            <span >※編集できません。</span>
                        </div>
                    </dd>
                </dl>
                <dl class="bg4">
                    <dt><span>所在地<br>（本店または主たる事業所）</span></dt>
                    <dd>
                        <div class="entered">
                            <p class="u-margin-bottom-10"><span class="w60">郵便番号</span>
                                <input class="w150 lock" id="" name="operator_zipcode" type="text"
                                    value="{{ old('operator_zipcode', $operator->operator_zipcode) }}" disabled>
                                <span>※編集できません。</span>
                            </p>
                            <p class="u-margin-bottom-10"><span class="w60">都道府県</span>
                                <input class="w150 lock" id="" name="operator_prefecture" type="text"
                                    value="{{ old('operator_prefecture', $operator->operator_prefecture) }}" disabled>
                                <span>※編集できません。</span>
                            </p>
                            <p class="u-margin-bottom-10"><span class="w60">市区町村</span>
                                <input class="w150 lock" id="" name="operator_city" type="text"
                                    value="{{ old('operator_city', $operator->operator_city) }}" disabled>
                                <span>※編集できません。</span>
                            </p>
                            <p><span class="w60">以降</span>
                                <input class="w500 lock" id="" name="operator_address" type="text"
                                    value="{{ old('operator_address', $operator->operator_address) }}" disabled>
                                <span>※編集できません。</span>
                            </p>
                        </div>
                    </dd>
                </dl>
                <dl class="bg4">
                    <dt><span class="required">代表者肩書</span></dt>
                    <dd>
                        <div class="entered">
                            <input class="w200" type="text" name="operator_title"
                                value="{{ old('operator_title', $operator->operator_title) }}" require>
                            <span>※添付する法人登記と一致すること。</span>
                        </div>
                    </dd>
                </dl>
                <dl class="bg4">
                    <dt><span class="required">代表者氏名</span></dt>
                    <dd>
                        <div class="entered">
                            <span>氏</span><input type="text" name="representative_last_name"
                                value="{{ old('representative_last_name', $operator->representative_last_name) }}" require>
                            <span>名</span><input type="text" name="representative_first_name"
                                value="{{ old('representative_first_name', $operator->representative_first_name) }}" require>
                            <span>※添付する法人登記と一致すること。</span>
                        </div>
                    </dd>
                </dl>
            </div>
            <h4 class="u-typography-6 u-margin-bottom-20">② 個人事業主の情報</h4>
            <div class="detailbox u-margin-bottom-60">
                <dl class="bg4">
                    <dt><span class="required">氏名</span></dt>
                    <dd>
                        <div class="entered">
                            <span>氏</span><input type="text" name="representative_last_name"
                                value="{{ old('representative_last_name', $operator->representative_last_name) }}" require>
                            <span>名</span><input type="text" name="representative_first_name"
                                value="{{ old('representative_first_name', $operator->representative_first_name) }}" require>
                            <span>※添付する印鑑証明と一致すること。</span>
                        </div>
                    </dd>
                </dl>
                <dl class="bg4">
                    <dt><span>屋号（ある場合のみ）</span></dt>
                    <dd>
                        <div class="entered">
                            <input class="w500 lock" id="" name="operator_name" type="text"
                                value="{{ old('operator_name', $operator->operator_name) }}" disabled>
                            <span >※編集できません。</span>
                        </div>
                    </dd>
                </dl>
                <dl class="bg4">
                    <dt><span>所在地<br>（本店または主たる事業所）</span></dt>
                    <dd>
                        <div class="entered">
                            <p class="u-margin-bottom-10"><span class="w60">郵便番号</span>
                                <input class="w150 lock" id="" name="operator_zipcode" type="text"
                                    value="{{ old('operator_zipcode', $operator->operator_zipcode) }}" disabled>
                                <span>※ハイフン（－）不要</span>
                            </p>
                            <p class="u-margin-bottom-10"><span class="w60">都道府県</span>
                                <input class="w150 lock" id="" name="operator_prefecture" type="text"
                                    value="{{ old('operator_prefecture', $operator->operator_prefecture) }}">
                                <span>※（○⇒東京都、×⇒東京）</span>
                            </p>
                            <p class="u-margin-bottom-10"><span class="w60">市区町村</span>
                                <input class="w150 lock" id="" name="operator_city" type="text"
                                    value="{{ old('operator_city', $operator->operator_city) }}">
                                <span>※（○⇒横浜市西区、×⇒横浜市）</span>
                            </p>
                            <p class="u-margin-bottom-10"><span class="w60">丁目番地</span>
                                <input class="w500 lock" id="" name="operator_address_solo" type="text"
                                    value="{{ old('operator_address_solo', $operator->operator_address_solo) }}">
                                <span>※丁目から全角数字。１－１２－３⇒○　1丁目12番3号⇒✕</span>
                            </p>
                            <p class="u-margin-bottom-10"><span class="w60">建物名</span>
                                <input class="w500 lock" id="" name="operator_building_solo" type="text"
                                    value="{{ old('operator_building_solo', $operator->operator_building_solo) }}">
                                <span>※ある場合は必ず入力</span>
                            </p>
                            <p><span class="w60">部屋番号</span>
                                <input class="w500 lock" id="" name="operator_room_number_solo" type="text"
                                    value="{{ old('operator_room_number_solo', $operator->operator_room_number_solo) }}">
                                <span>※ある場合は必ず入力</span>
                            </p>
                        </div>
                    </dd>
                </dl>
            </div>
            <h4 class="u-typography-6 u-margin-bottom-20">③ 参加する事業</h4>
            <div class="detailbox u-margin-bottom-60">
                <dl class="bg4">
                    <dt><span>参加する事業<br><span class="u-color-text-red">＊いずれか必須、複数可</span></span></dt>
                    <dd class="pa">
                        <div class="not-padding entered">
                            <div>
                                <p>※参加すると申告した場合でも、事務局が参加条件に反すると判断した場合は当該事業について交付申請は行えません。</p>
                                <p>※宅地建物取引業免許、住宅リフォーム事業者団体の情報は編集画面をご確認ください</p>
                            </div>
                            <ul class="business">
                                <li>
                                    <div class="">
                                        <p class="input1 u-margin-bottom-10"><input type="checkbox"><label for="">子育てエコホーム支援事業</label></p>
                                        <ul class="businesslist2 u-margin-bottom-30">
                                            <li>
                                                <input type="checkbox"><label for="">注文住宅の新築（建築事業者、工事請負業者）</label>
                                            </li>
                                            <li>
                                                <input type="checkbox"><label class="u-margin-bottom-20" for="">新築分譲住宅の購入（販売事業者、販売代理業者） ※宅地建物取引業者に限ります。</label>
                                                <dl class="column2">
                                                    <dt class="w120"><span>宅地建物取引業免許</span></dt>
                                                    <dd>
                                                        <ul class="businesslist4">
                                                            <li>
                                                                <div class="select-box w120">
                                                                    <select id="" name="">
                                                                        <option value=""></option>
                                                                        <option value=""></option>
                                                                    </select>
                                                                </div>
                                                                <span>許可</span>
                                                                <input class="w60" type="text">
                                                                <span>第</span>
                                                                <input class="w120" type="text">
                                                                <span>号</span>
                                                            </li>
                                                        </ul>
                                                    </dd>
                                                </dl>
                                            </li>
                                            <li>
                                                <input type="checkbox"><label class="u-margin-bottom-20" for="">リフォーム工事（工事施工者）</label>
                                                <dl class="column2">
                                                    <dt class="w150"><span>住宅リフォーム事業者団体登録</span></dt>
                                                    <dd>
                                                        <ul class="businesslist4 flex">
                                                            <li>
                                                                <input type="checkbox"><label for="">あり</label>
                                                                <div>
                                                                    <dl>
                                                                        <dt>登録団体</dt>
                                                                        <dd>
                                                                            <div class="select-box w120">
                                                                                <select id="" name="">
                                                                                    <option value=""></option>
                                                                                    <option value=""></option>
                                                                                </select>
                                                                            </div>
                                                                        </dd>
                                                                    </dl>
                                                                    <dl>
                                                                        <dt>URL</dt>
                                                                        <dd>
                                                                            <input type="text">
                                                                        </dd>
                                                                    </dl>
                                                                    <p class="indent"><span>※</span>登録している団体のホームページで、自社が掲載されているページを指定してください。 ※本キャンペーンのホームページでの公表を希望している場合、公表されます。</p>
                                                                    <p class="indent"><span>※</span>本キャンペーンのホームページでの公表を希望している場合、公表されます。</p>

                                                                </div>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox"><label for="">なし（申請中を含む）</label>
                                                            </li>
                                                        </ul>
                                                    </dd>
                                                </dl>

                                            </li>
                                        </ul>
                                        <dl class="conditions">
                                            <dt>こどもエコすまい支援事業への参加条件</dt>
                                            <dd>
                                                <p class="u-margin-bottom-20">過去3カ年度内に国土交通省住宅局所管事業補助金（以下、「住宅局補助金」という。）において、交付決定の取り消しに相当する理由で 補助金の返還を求められたことのある者、又は当該住宅局補助金の規約その他これに類するものに反して若しくは虚偽の申告により、 申請するなどの不正な行為を行った者（団体を含む）に該当しない。</p>
                                                <p class="indent"><span>※</span>事業期間中に事業者登録規約（こどもエコすまい支援事業）第9条禁止事項に規定する行為または、第10条登録の停止に相当する行為を行った者は、交付申請の受付および事業者登録情報の公表を停止します。</p>
                                            </dd>
                                        </dl>
                                    </div>
                                    <div class="stop">
                                        <p><input id="stop1" name="" type="checkbox"><label for="stop1">停止</label></p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <p class="input1 u-margin-bottom-10"><input type="checkbox"><label for="">先進的窓リノベ2024事業</label></p>
                                        <dl class="conditions">
                                            <dt>先進的窓リノベ事業への参加条件</dt>
                                            <dd>
                                                <p class="u-margin-bottom-20">過去3カ年度内に経済産業省製造産業局又は環境省地球環境局所管事業補助金（以下、「所管補助金」という。）において、 交付決定の取り消しに相当する理由で補助金の返還を求められたことのある者、又は当該所管補助金の規約その他これに類するものに 反して若しくは虚偽の申告により、申請するなどの不正な行為を行った者（団体を含む）に該当しない。</p>
                                                <p class="indent"><span>※</span>事業期間中に事業者登録規約（先進的窓リノベ事業）第8条禁止事項に規定する行為または、 第9条登録の停止に相当する行為を行った者は、交付申請の受付および事業者登録情報の公表を停止します。</p>
                                            </dd>
                                        </dl>

                                    </div>

                                    <div class="stop">
                                        <p><input id="stop1" name="" type="checkbox"><label for="stop1">停止</label></p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <p class="input1 u-margin-bottom-10"><input type="checkbox"><label for="">給湯省エネ2024事業</label></p>
                                        <p class="u-margin-bottom-20">以下、該当する場合はチェックをいれてください。</p>
                                        <ul class="businesslist2">
                                            <li><input type="checkbox"><label for="">エネルギー小売業者に該当する（電気、ガスの販売について消費者と契約を締結する）</label></li>
                                            <li><input type="checkbox"><label for="">新築リース事業者（申請者と給湯器のリース契約を締結する事業者）分譲住宅の購入（販売事業者、販売代理業者） ※宅地建物取引業者に限ります。</label></li>
                                        </ul>
                                    </div>
                                    <div class="stop">
                                        <p><input id="stop1" name="" type="checkbox"><label for="stop1">停止</label></p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <p class="input1 u-margin-bottom-10"><input type="checkbox"><label for="">賃貸集合給湯省エネ2024事業</label></p>
                                        <p>テキストが入ります</p>

                                    </div>
                                    <div class="stop">
                                        <p><input id="stop1" name="" type="checkbox"><label for="stop1">停止</label></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </dd>
                </dl>
            </div>
            <h4 class="u-typography-6 u-margin-bottom-20">④ プライバシーポリシー、住宅省エネポータル利用規約への同意</h4>
            <div class="detailbox u-margin-bottom-60">
                <dl class="bg4">
                    <dt><span class="required">同意</span></dt>
                    <dd>
                        <div class="not-padding">
                            <ul class="businesslist3">
                                <li>
                                    <input type="checkbox" name="privacy_policy_consent1"
                                        value="{{ old('privacy_policy_consent1', $operator->privacy_policy_consent1) }}" {{ $operator->privacy_policy_consent1 == 1 ? "checked" : "" }} require>
                                    <label for="">本キャンペーンおよび各事業のプライバシーポリシーをすべて確認し、同意の上で事業者登録申請を行う。</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="privacy_policy_consent2"
                                        value="{{ old('privacy_policy_consent2', $operator->privacy_policy_consent2) }}" {{ $operator->privacy_policy_consent2 == 1 ? "checked" : "" }} require>
                                    <label for="">住宅省エネポータル利用規約を確認し、同意の上で事業者登録申請を行う。</label>
                                </li>
                            </ul>
                        </div>
                    </dd>
                </dl>
            </div>
            <!-- フェーズ2で実装 -->
            <div class="detailbox information ">
                <div class="ttl3">登録情報のチェック項目</div>
                <p>以下の項目すべてが正しく登録（事務局確認欄がすべて「はい」）されていない場合、事業者登録は完了しませんので、ご注意ください。</p>
                <div class="ttl3">【法人の場合】</div>
                <div class="table1">
                    <div>事務局確認内容</div>
                    <div>事務局確認欄</div>
                    <div>備考</div>
                </div>
                <ul class="table2">
                    <li>
                        <div>
                            <p>「法人名（商号または名称）」に入力した事業者の法人登記が正しく添付されている。（法務局発行のもの）<br><span>他の書類、他法人の登記は不可。</span></p>
                        </div>
                        <div class="businesslist1">
                            <ul>
                                <li><input id="" name="" type="checkbox"><label for="">はい</label></li>
                                <li><input id="" name="" type="checkbox"><label for="">いいえ/不明（要修正）</label></li>
                            </ul>
                        </div>
                        <div></div>
                    </li>
                    <li>
                        <div>
                            <p>「代表者肩書」「代表者氏名」が法人登記に記載された内容と一致する。<br><span>代表者以外の方が登録申請および登録申請書の提出はできません</span></p>
                        </div>
                        <div class="businesslist1">
                            <ul>
                                <li><input id="" name="" type="checkbox"><label for="">はい</label></li>
                                <li><input id="" name="" type="checkbox"><label for="">いいえ/不明（要修正）</label></li>
                            </ul>
                        </div>
                        <div></div>
                    </li>
                    <li>
                        <div>
                            <p>【分譲を選択の場合のみ】「宅建業許可番号」が正しく登録されている。<br><span>他社の番号、許可番号が不存在は不可。</span></p>
                        </div>
                        <div class="businesslist1">
                            <ul>
                                <li><input id="" name="" type="checkbox"><label for="">はい</label></li>
                                <li><input id="" name="" type="checkbox"><label for="">いいえ/不明（要修正）</label></li>
                            </ul>
                        </div>
                        <div></div>
                    </li>
                    <li>
                        <div>
                            <p>添付した「住宅省エネ支援事業者登録申請書」が正しく提出されている。<br><span>他の書類、修正液等での修正は不可。</span></p>
                        </div>
                        <div class="businesslist1">
                            <ul>
                                <li><input id="" name="" type="checkbox"><label for="">はい</label></li>
                                <li><input id="" name="" type="checkbox"><label for="">いいえ/不明（要修正）</label></li>
                            </ul>
                        </div>
                        <div></div>
                    </li>
                    <li>
                        <div>
                            <p>添付した「住宅省エネ支援事業者登録申請書」に代表者の押印がされている。</p>
                        </div>
                        <div class="businesslist1">
                            <ul>
                                <li><input id="" name="" type="checkbox"><label for="">はい</label></li>
                                <li><input id="" name="" type="checkbox"><label for="">いいえ/不明（要修正）</label></li>
                            </ul>
                        </div>
                        <div></div>
                    </li>
                    <li>
                        <div>
                            <p>「法人名（商号または名称）」に入力した法人の印鑑証明書が正しく添付されている。<br><span>他の書類、他法人の印鑑証明書は不可。</span></p>
                        </div>
                        <div class="businesslist1">
                            <ul>
                                <li><input id="" name="" type="checkbox"><label for="">はい</label></li>
                                <li><input id="" name="" type="checkbox"><label for="">いいえ/不明（要修正）</label></li>
                            </ul>
                        </div>
                        <div></div>
                    </li>
                    <li>
                        <div>
                            <p>添付した「住宅省エネ支援事業者登録申請書」と「法人の印鑑証明書」の印章が一致している。</p>
                        </div>
                        <div class="businesslist1">
                            <ul>
                                <li><input id="" name="" type="checkbox"><label for="">はい</label></li>
                                <li><input id="" name="" type="checkbox"><label for="">いいえ/不明（要修正）</label></li>
                            </ul>
                        </div>
                        <div></div>
                    </li>
                    <li>
                        <div>
                            <p>添付した「住宅省エネ支援事業者登録申請書」の「事業者名・商号」が一致している。</p>
                        </div>
                        <div class="businesslist1">
                            <ul>
                                <li><input id="" name="" type="checkbox"><label for="">はい</label></li>
                                <li><input id="" name="" type="checkbox"><label for="">いいえ/不明（要修正）</label></li>
                            </ul>
                        </div>
                        <div></div>
                    </li>
                    <li>
                        <div>
                            <p>添付した「住宅省エネ支援事業者登録申請書」の「代表者肩書」「代表者氏名」が一致している。</p>
                        </div>
                        <div class="businesslist1">
                            <ul>
                                <li><input id="" name="" type="checkbox"><label for="">はい</label></li>
                                <li><input id="" name="" type="checkbox"><label for="">いいえ/不明（要修正）</label></li>
                            </ul>
                        </div>
                        <div></div>
                    </li>
                </ul>
            </div>
            <!-- フェーズ2で実装 -->
        </div>
        <div>
            <input class="btn white" name="temporary_save_button" value="仮保存" type="submit"
                onclick="return confirm('現在の内容で保存をします。よろしいですか？')">
            <input class="btn orange" name="permanent_save_button" value="保存" type="submit"
                onclick="return confirm('現在の内容で保存をします。よろしいですか？')">
            <p class="btn none">
                <a href="{{ route('portal.operator.detail') }}"
                    onclick="return confirm('詳細画面へ戻りますがよろしいですか。\n※入力した内容は保存されません。')">詳細へ戻る
                </a>
            </p>
        </div>
    </form>
</main>
</body>
</html>
