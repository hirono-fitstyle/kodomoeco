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
                <img alt="住宅省エネ 2024キャンペーン" src="/assets/img/logo.svg">
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
    <h2 class="u-typography-6 u-margin-bottom-30">① 事業者登録の情報｜詳細画面</h2>
    <p class="u-color-text-red u-margin-bottom-30">1.まず【0】から利用者（あなた）の情報を登録してください。<br>
        2.【1】から【4】の順に事業者登録の手続きを進めてください。<br>
        3.【3】申請書については出力・押印後、【4】書類添付してください。 （出力後に【１】再編集をした場合、申請書も更新されます。再度出力してください。）</p>
    <div class="flow u-margin-bottom-60">
        <ul>
            <li class="flowitem"><a href="{{ route('portal.manager.detail') }}">利用者登録</a></li>
            <li class="flowitem"><a href="{{ route('portal.operator.edit') }}">編集</a></li>
            <li class="flowitem">編集完了</li>
            <li class="flowitem">申請書出力</li>
            <li class="flowitem">書類添付</li>
            <li class="flowitem">登録申請</li>
            <li><a href="">TOPに戻る</a></li>
        </ul>
    </div>
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
                <dt><span>事業者種別</span></dt>
                <dd>
                    <div>
                        <ul class="businesslist1">
                            <li>
                                <input id="business1" name="operator_category" type="radio"
                                    {{ $operator->operator_category == 1 ? "checked" : "" }} disabled>
                                <label for="business1">法人</label>
                                <span class="u-color-text-red">※登録申請書に押印する印鑑が登録された「法人の印鑑証明」と「法人登記」の添付が必要です。</span>
                            </li>
                            <li>
                                <input id="business2" name="operator_category" type="radio"
                                    {{ $operator->operator_category == 2 ? "checked" : "" }} disabled>
                                <label for="business2">個人事業主</label>
                                <span class="u-color-text-red">※登録申請書に押印する印鑑が登録された「個人の印鑑証明」の添付が必要です。</span>
                            </li>
                        </ul>
                    </div>
                </dd>
            </dl>
            <dl class="bg4">
                <dt><span>宣誓</span></dt>
                <dd>
                    <div>
                        <p class="check">
                            <input id="a" name="oath" type="checkbox"
                                {{ $operator->oath == 1 ? "checked" : "" }} disabled>
                            <label for="a">以下に該当しません。 （法人においては、役員等（実質的に経営に関与する者を含む））</label>
                        </p>
                        <p>暴力団（暴力団員による不当な行為の防止等に関する法律（平成３年法律第７７号）第２条第２号に規定する暴力団をいう。以下同じ。）又は暴力団員（同条第６号に規定する暴力団員をいう。以下同じ。）である者、不正の利益を図る目的若しくは第三者に損害を加える目的をもって暴力団若しくは暴力団員を利用している者、資金等の供給若しくは便宜の供与等により直接的あるいは積極的に暴力団の維持、運営に協力し、若しくは関与している者、又は暴力団若しくは暴力団員であることを知りながらこれと社会的に非難されるべき関係を有している者</p>
                    </div>
                </dd>
            </dl>
            <dl class="bg4">
                <dt><span>建設業許可の有無</span></dt>
                <dd>
                    <div>なし</div>
                    <!-- 建設業許可区分＋" "+建設業許可区分2+"-"+建設業許可更新番号+" 第"+建設業許可番号+"号" -->
                </dd>
            </dl>
        </div>
        <h4 class="u-typography-6 u-margin-bottom-20">② 法人の情報</h4>
        <div class="detailbox u-margin-bottom-60">
            <dl class="bg4">
                <dt><span>法人番号</span></dt>
                <dd>
                    <div>
                        <p class="u-margin-bottom-10">
                            {{ $operator->corp_number }}
                        </p>
                        <a href="https://www.houjin-bangou.nta.go.jp/" target="_blank" rel="noopener noreferrer"><span class="btn white">国税庁HP</span></a>
                        <span>※国税庁「法人番号公表サイト」で調べられます。</span>
                    </div>
                </dd>
            </dl>
            <dl class="bg4">
                <dt><span>法人名（商号または名称）</span></dt>
                <dd>
                    <div>
                        {{ $operator->operator_name }}
                    </div>
                </dd>
            </dl>
            <dl class="bg4">
                <dt><span>所在地<br>（本店または主たる事業所）</span></dt>
                <dd>
                    <div>
                        {{ preg_replace("/(\d{3})(\d{4})/", "$1 - $2", $operator->operator_zipCode) }}<br>
                        {{ $operator->getAddress($operator->operator_category) }}
                    </div>
                </dd>
            </dl>
            <dl class="bg4">
                <dt><span>代表者肩書</span></dt>
                <dd>
                    <div>
                        {{ $operator->operator_title }}
                        ※添付する法人登記と一致すること。
                    </div>
                </dd>
            </dl>
            <dl class="bg4">
                <dt><span>代表者氏名</span></dt>
                <dd>
                    <div>
                        {{ $operator->representative_last_name }} {{ $operator->representative_first_name }}
                        ※添付する法人登記と一致すること。
                    </div>
                </dd>
            </dl>
        </div>
        <h4 class="u-typography-6 u-margin-bottom-20">③ 参加する事業</h4>
        <div class="detailbox u-margin-bottom-60">
            <dl class="bg4">
                <dt><span>参加する事業</span></dt>
                <dd class="pa">
                    <div class="not-padding">
                        <div>
                            <p>※参加すると申告した場合でも、事務局が参加条件に反すると判断した場合は当該事業について交付申請は行えません。</p>
                            <p>※宅地建物取引業免許、住宅リフォーム事業者団体の情報は編集画面をご確認ください</p>
                        </div>
                        <ul class="business">
                            <li>
                                <div>
                                    <p class="input1 u-margin-bottom-10">
                                        <input name="public_project1" type="checkbox"
                                            {{ $operator->public_project1 == 1 ? "checked" : "" }} disabled>
                                        <label for="">子育てエコホーム支援事業</label>
                                    </p>
                                    <ul class="businesslist2">
                                        <li>
                                            <input name="public_buisiness1" type="checkbox"
                                                {{ $operator->public_buisiness1 == 1 ? "checked" : "" }} disabled>
                                            <label for="">注文住宅の新築（建築事業者、工事請負業者）</label>
                                        </li>
                                        <li>
                                            <input name="public_buisiness2" type="checkbox"
                                                {{ $operator->public_buisiness2 == 1 ? "checked" : "" }} disabled>
                                            <label for="">新築分譲住宅の購入（販売事業者、販売代理業者） ※宅地建物取引業者に限ります。</label>
                                        </li>
                                        <li>
                                            <input name="public_buisiness3" type="checkbox"
                                                {{ $operator->public_buisiness3 == 1 ? "checked" : "" }} disabled>
                                            <label for="">リフォーム工事（工事施工者）</label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="stop">
                                    <p>
                                        <input id="stop1" name="public_project1" type="checkbox"
                                            {{ $operator->public_project1 == 0 ? "checked" : "" }} disabled>
                                        <label for="stop1">停止</label>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <p class="input1 u-margin-bottom-10">
                                        <input name="public_project3" type="checkbox"
                                            {{ $operator->public_project3 == 1 ? "checked" : "" }} disabled>
                                        <label for="">先進的窓リノベ2024事業</label>
                                    </p>
                                </div>
                                <div class="stop">
                                    <p>
                                        <input id="stop1" name="public_project3" type="checkbox"
                                            {{ $operator->public_project3 == 0 ? "checked" : "" }} disabled>
                                        <label for="stop1">停止</label>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <p class="input1 u-margin-bottom-10">
                                        <input name="public_project2" type="checkbox"
                                            {{ $operator->public_project2 == 1 ? "checked" : "" }} disabled>
                                        <label for="">給湯省エネ2024事業</label>
                                    </p>
                                    <ul class="businesslist2">
                                        <li>
                                            <input name="public_buisiness5" type="checkbox"
                                                {{ $operator->public_buisiness5 == 1 ? "checked" : "" }} disabled>
                                            <label for="">エネルギー小売業者に該当する（電気、ガスの販売について消費者と契約を締結する）</label>
                                        </li>
                                        <li>
                                            <input name="public_buisiness4" type="checkbox"
                                                {{ $operator->public_buisiness4 == 1 ? "checked" : "" }} disabled>
                                            <label for="">新築リース事業者（申請者と給湯器のリース契約を締結する事業者）分譲住宅の購入（販売事業者、販売代理業者） ※宅地建物取引業者に限ります。</label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="stop">
                                    <p>
                                        <input id="stop1" name="public_project2" type="checkbox"
                                            {{ $operator->public_project2 == 0 ? "checked" : "" }} disabled>
                                        <label for="stop1">停止</label>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <p class="input1 u-margin-bottom-10">
                                        <input type="checkbox">
                                        <label for="">賃貸集合給湯省エネ2024事業</label>
                                    </p>
                                </div>
                                <div class="stop">
                                    <p>
                                        <input id="stop1" name="" type="checkbox">
                                        <label for="stop1">停止</label>
                                    </p>
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
                <dt><span>同意</span></dt>
                <dd>
                    <div class="not-padding">
                        <ul class="businesslist3">
                            <li>
                                <input name="privacy_policy_consent1" type="checkbox"
                                    {{ $operator->privacy_policy_consent1 == 1 ? "checked" : "" }} disabled>
                                <label for="">本キャンペーンおよび各事業のプライバシーポリシーをすべて確認し、同意の上で事業者登録申請を行う。</label>
                            </li>
                            <li>
                                <input name="privacy_policy_consent2" type="checkbox"
                                    {{ $operator->privacy_policy_consent2 == 1 ? "checked" : "" }} disabled>
                                <label for="">住宅省エネポータル利用規約を確認し、同意の上で事業者登録申請を行う。</label>
                            </li>
                        </ul>
                    </div>
                </dd>
            </dl>
        </div>
        <h4 class="u-typography-6 u-margin-bottom-20">添付書類の情報</h4>
        <p class="btn white u-margin-bottom-20">添付表示</p>
        <div class="detailbox u-margin-bottom-20">
            <ul class="ttl3 bg4">
                <li>添付タイプ</li>
                <li>ファイル名称</li>
                <li>添付日</li>
                <li>備考</li>
                <li>編集</li>
                <li><input type="checkbox"><label for="">一括</label></li>
            </ul>
            <div class="list">
                <p class="btn orange">書類を削除</p>
            </div>
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
    <div class="flow">
        <ul>
            <li class="flowitem">利用者登録</li>
            <li class="flowitem">再編集</li>
            <li class="flowitem">編集完了</li>
            <li class="flowitem">申請書出力</li>
            <li class="flowitem">書類添付</li>
            <li class="flowitem">登録申請</li>
            <li><a href="">TOPに戻る</a></li>
        </ul>
    </div>
</main>
</body>
</html>
