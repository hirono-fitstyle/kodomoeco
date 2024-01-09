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
    <link rel="stylesheet" href="{{ asset('/css/styles.css') }}" >
    <link rel="stylesheet" href="{{ asset('/css/top.css') }}" >
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
    <h2 class="u-typography-6 u-margin-bottom-30">TOP （統括アカウント）</h2>
    <div class="bg1 u-margin-bottom-20">
        <p class="u-margin-bottom-10">※重要※ ＜こどもエコすまい支援事業＞の交付申請 および 交付申請の予約 の受付を終了しました。</p>
        <p class="indent"><span>●</span>こどもエコすまい支援事業の交付申請額（予約含む）が予算上限に達し、交付申請 および 交付申請の予約 の受付が終了したため、 ワンストップ申請では、「こどもエコすまい支援事業」への振り分けはされません。「先進的窓リノベ事業」「給湯省エネ事業」に対して振り分けが行われワンストップ申請の作成・提出が行えます。</p>
    </div>
    <dl>
        <dt class="u-color-text-red">【ご注意ください】</dt>
        <dd class="u-margin-bottom-40">
            <p class="u-color-text-red indent"><span>※</span>統括アカウントと担当者アカウントの利用者が同じ場合、担当者アカウントを利用するには一度ログアウトを行い 担当者アカウントのID、パスワードで再度ログインをする必要があります。 （アカウントに応じて異なるブラウザアプリを使う等もご検討ください）</p>
        </dd>
    </dl>
    <h3 class="u-typography-6 u-margin-bottom-30">専用ポータルの切り替え</h3>
    <ul class="tab u-margin-bottom-40">
        <li class="is-active"><span>共通ポータル</span></li>
        <li><span>子育てエコホーム<br>支援事業</span></li>
        <li><span>先進的窓リノベ2024事業</span></li>
        <li><span>給湯省エネ2024事業</span></li>
        <li><span>賃貸集合給湯省エネ<br>2024事業</span></li>
    </ul>
    <div class="bg2">
        <h4 class="u-typography-6 u-margin-bottom-20">住宅省エネ2023キャンペーン【共通ポータル】とは？</h4>
        <p class="u-margin-bottom-40">住宅省エネ2023キャンペーンの3つの事業は、すべて本ポータル上で交付申請等の手続きを行います。 各事業の【専用ポータル】へは、『専用ポータルへの切り替え』からそれぞれ遷移することができます。（2023年3月31日開始） 本【共通ポータル】は、各事業の【専用ポータル】への入口であり、事業をまたいで情報の登録や管理を行うことができる機能を提供します。</p>
        <h4 class="u-typography-6 u-margin-bottom-20">統括アカウントとは？</h4>
        <p class="u-margin-bottom-40">本キャンペーンの情報を管理する専用アカウントで、事業者が一つに限り取得・利用するものです。（交付申請はできません）<br>本アカウントからは、「事業者登録」「公表情報の登録」「補助金の振込口座の登録」「補助金の入金管理」「（担当者アカウントが行う）交付申請の進捗管理」等を行うことができます。<br>なお、補助金の交付申請には、専用の【担当者アカウント】を別途取得して利用する必要があります。（2023年3月31日開始）<br>担当者アカウントは、支社等の担当者ごとに取得することができますが、本統括アカウントとアカウント連携して始めて交付申請の登録が可能になります。 （両アカウントを一人が取得・利用することも可能ですが、それぞれログインが必要です。）</p>
        <h4 class="u-typography-6 u-margin-bottom-20">本キャンペーン全体のお知らせ情報</h4>
        <ul class="news u-margin-bottom-60">
            <li>
                <dl>
                    <dt>2023/12/20 18:00:00</dt>
                    <dd><a href="">住宅省エネ2024キャンペーンへの継続参加を辞退する場合について</a></dd>
                </dl>
            </li>
            <li>
                <dl>
                    <dt>2023/12/20 18:00:00</dt>
                    <dd><a href="">住宅省エネ2024キャンペーンへの継続参加を辞退する場合について</a></dd>
                </dl>
            </li>
            <li>
                <dl>
                    <dt>2023/12/20 18:00:00</dt>
                    <dd><a href="">住宅省エネ2024キャンペーンへの継続参加を辞退する場合について</a></dd>
                </dl>
            </li>
            <li>
                <dl>
                    <dt>2023/12/20 18:00:00</dt>
                    <dd><a href="">住宅省エネ2024キャンペーンへの継続参加を辞退する場合について</a></dd>
                </dl>
            </li>
            <li>
                <dl>
                    <dt>2023/12/20 18:00:00</dt>
                    <dd><a href="">住宅省エネ2024キャンペーンへの継続参加を辞退する場合について</a></dd>
                </dl>
            </li>
            <li>
                <dl>
                    <dt>2023/12/20 18:00:00</dt>
                    <dd><a href="">住宅省エネ2024キャンペーンへの継続参加を辞退する場合について</a></dd>
                </dl>
            </li>
            <li>
                <dl>
                    <dt>2023/12/20 18:00:00</dt>
                    <dd><a href="">住宅省エネ2024キャンペーンへの継続参加を辞退する場合について</a></dd>
                </dl>
            </li>
            <li>
                <dl>
                    <dt>2023/12/20 18:00:00</dt>
                    <dd><a href="">住宅省エネ2024キャンペーンへの継続参加を辞退する場合について</a></dd>
                </dl>
            </li>
            <li>
                <dl>
                    <dt>2023/12/20 18:00:00</dt>
                    <dd><a href="">住宅省エネ2024キャンペーンへの継続参加を辞退する場合について</a></dd>
                </dl>
            </li>
            <li>
                <dl>
                    <dt>2023/12/20 18:00:00</dt>
                    <dd><a href="">住宅省エネ2024キャンペーンへの継続参加を辞退する場合について</a></dd>
                </dl>
            </li>
            <li>
                <dl>
                    <dt>2023/12/20 18:00:00</dt>
                    <dd><a href="">住宅省エネ2024キャンペーンへの継続参加を辞退する場合について</a></dd>
                </dl>
            </li>
        </ul>
        <h4 class="u-typography-6 u-margin-bottom-20">住宅省エネ支援事業者の情報</h4>
        <div class="detailbox u-margin-bottom-60">
            <dl class="half bg3">
                <dt><span>登録事業者番号</span></dt>
                <dd>
                    <div class="not-padding">
                        <p class="u-color-text-red">{{ $operator->operator_number }}</p>
                        <p class="indent"><span>※</span>公表を希望する場合、本キャンペーンのホームページで公表されます。</p>
                    </div>
                </dd>
            </dl>
            <dl class="half bg3">
                <dt>
                    <span>連携用パスコード<br>（変更できません）</span>
                </dt>
                <dd>
                    <div class="not-padding">
                        <p class="u-color-text-red">{{ $operator->operator_passcode }}</p>
                        <p class="indent"><span>※</span>交付申請用の担当者アカウントと連携する際に必要です。 外部に漏れないように厳重に管理してください。</p>
                    </div>
                </dd>
            </dl>
            <dl class="bg4">
                <dt>
                    <span>ポータル関連資料<br>（操作説明書等）</span>
                </dt>
                <dd>
                    <div>
                        <a href="">https://jutaku-shoene2023.mlit.go.jp/portal-download/</a>
                    </div>
                </dd>
            </dl>
        </div>
        <h4 class="u-typography-6 u-margin-bottom-20">① 事業者登録の情報</h4>
        <div class="detailbox u-margin-bottom-60">
            <dl class="half bg3">
                <dt><span>事業者登録ステータス</span></dt>
                <dd>
                    <div class="not-padding">
                        <p>編集完了</p>
                        <p class="indent"><span>※</span>【承認済（登録完了）】まで③公表情報、④口座情報の登録を完了できません。</p>
                    </div>
                </dd>
            </dl>
            <dl class="half bg3">
                <dt><span>連携用パスコード<br>（変更できません）</span></dt>
                <dd>
                    <div>
                        <p class="indent"><span>※</span>先進的窓リノベ事業、給湯省エネ事業は当該日付より前に着工した補助事業は補助対象になりません。 こどもみらい住宅支援事業からの継続事業者の場合は、「2022年12月16日（本事業の事務局開設日）」 または「こどもみらい住宅支援事業の登録申請日」のいずれか遅い日が登録申請日となります。</p>
                    </div>
                </dd>
            </dl>
            <dl class="bg4">
                <dt><span>法人名<br>（個人事業主は屋号</span> </dt>
                <dd>
                    <div>{{ $operator->operator_name }}</div>
                </dd>
            </dl>
            <dl class="bg4">
                <dt><span>参加する事業</span></dt>
                <dd>
                    <div>
                        <ul class="businesslist">
                            <li><input id="business1" name="" type="checkbox" {{ $operator->public_project1 == 1 ? "checked" : "" }} disabled><label for="business1">こどもエコすまい支援事業</label></li>
                            <li><input id="business2" name="" type="checkbox" {{ $operator->public_project3 == 1 ? "checked" : "" }} disabled><label for="business2">先進的窓リノベ事業</label></li>
                            <li><input id="business3" name="" type="checkbox" {{ $operator->public_project2 == 1 ? "checked" : "" }} disabled><label for="business3">給湯省エネ事業</label></li>
                            <li><input id="business4" name="" type="checkbox" {{ $operator->public_buisiness1 == 1 ? "checked" : "" }} disabled><label for="business4">注文住宅の新築</label></li>
                            <li><input id="business5" name="" type="checkbox" {{ $operator->public_buisiness2 == 1 ? "checked" : "" }} disabled><label for="business5">新築分譲住宅の購入</label></li>
                            <li><input id="business6" name="" type="checkbox" {{ $operator->public_buisiness3 == 1 ? "checked" : "" }} disabled><label for="business6">リフォーム工事</label></li>
                            <li><input id="business7" name="" type="checkbox" {{ $operator->public_buisiness5 == 1 ? "checked" : "" }} disabled><label for="business7">エネルギー小売業者に該当する</label></li>
                            <li><input id="business8" name="" type="checkbox" {{ $operator->public_buisiness4 == 1 ? "checked" : "" }} disabled><label for="business8">リーズ事業者</label></li>
                        </ul>

                    </div>
                </dd>
            </dl>
        </div>
        <a class="white" href="{{ route('portal.operator.detail') }}">
            <p class="bg5 ttl1 u-margin-bottom-10">事業者情報の登録・更新</p>
        </a>
        <p class="indent u-margin-bottom-60"><span>※</span>情報の更新後、専用ポータル・担当者アカウントへの反映には一定時間を要します。</p>
        <div class="detailbox u-margin-bottom-30">
            <p class="u-typography-7 important ">※重要※ 住宅省エネ2024キャンペーンへの参加申告</p>
            <dl class="half bg3">
                <dt><span>申告内容</span></dt>
                <dd>
                    <div>
                        住宅省エネ2024キャンペーンに住宅省エネ支援事業者として継続参加を
                        <ul>
                            <li>inp希望する</li>
                            <li>継続参加を希望しない</li>
                        </ul>
                    </div>

                </dd>
            </dl>
            <dl class="half bg3">
                <dt><span>参加申告日（初回）</span></dt>
                <dd></dd>
            </dl>
        </div>
        <p class="ttl2 u-margin-bottom-60">参加申告・更新</p>
        <h4 class="u-typography-6 u-margin-bottom-20">② 本アカウントの利用者情報</h4>
        <div class="detailbox u-margin-bottom-30">
            <dl class="half bg3">
                <dt><span>アカウント発行日</span></dt>
                <dd><div>2023/12/22 19:00</div></dd>
            </dl>
            <dl class="half bg4">
                <dt><span>最終ログイン</span></dt>
                <dd><div>2023/12/25 14:39</div></dd>
            </dl>
            <dl class="half bg4">
                <dt><spna>氏</spna></dt>
                <dd><div>{{ $operator->staff_last_name }}</div></dd>
            </dl>
            <dl class="half bg4">
                <dt><span>名</span></dt>
                <dd><div>{{ $operator->staff_first_name }}</div></dd>
            </dl>
            <dl class="bg4">
                <dt><span>メール受信設定</span></dt>
                <dd>
                    <div>
                        <ul>
                            <li>受信する</li>
                            <li>受信しない</li>
                        </ul>
                    </div>
                </dd>
            </dl>
        </div>
        <p class="bg5 ttl1 u-margin-bottom-10">利用者情報の登録・更新</p>
        <p class="u-margin-bottom-60">※ 情報の更新後、専用ポータル・担当者アカウントへの反映には一定時間を要します。</p>

        <h4 class="u-typography-6 u-margin-bottom-20">③ 公表情報</h4>
        <div class="detailbox u-margin-bottom-30">
            <dl class="half bg4">
                <dt><span>公表</span></dt>
                <dd>
                    <div>
                        <ul>
                            <li>希望する</li>
                            <li>希望しない</li>
                        </ul>
                    </div>
                </dd>
            </dl>
            <dl class="half bg4">
                <dt><span>更新日時</span></dt>
                <dd><div>{{ $operator->update_at }}</div></dd>
            </dl>
            <dl class="half bg3">
                <dt><span>公表ステータス</span></dt>
                <dd><div>非公表</div></dd>
            </dl>
            <dl class="half bg3">
                <dt><span>公表情報備考<br>（事務局からの連絡欄）</span></dt>
                <dd></dd>
            </dl>
        </div>

        <p class="ttl2 u-margin-bottom-10">公表情報の登録・更新</p>
        <p class="u-margin-bottom-60">※ 情報の更新後、専用ポータル・担当者アカウントへの反映には一定時間を要します。</p>

        <h4 class="u-typography-6 u-margin-bottom-20">④ 口座登録</h4>
        <p class="ttl2 u-margin-bottom-10">口座の新規作成</p>
        <div class="detailbox u-margin-bottom-20">
            <ul class="ttl3">
                <li>ステータス</li>
                <li>口座ID</li>
                <li>登録名</li>
                <li>金融機関コード</li>
                <li>金融機関名</li>
                <li>支店コード</li>
                <li>支店名</li>
                <li>口座種別</li>
                <li>口座番号</li>
                <li>口座名義人</li>
            </ul>
            <div class="list"></div>
        </div>
        <div class="pager">
            <ul class=" u-margin-bottom-60">
                <li>前を表示</li>
                <li>次を表示</li>
            </ul>
            <p><a href="">検索画面を表示する</a></p>

        </div>

        <div class="textbox">
            <dl>
                <dt>注意事項</dt>
                <dd>
                    <span class="red">＜パスワードは定期的に変更してください＞</span><br>
                    第三者による不正利用を防ぐために、定期的なパスワードの変更をお願いしています。 パスワードは、<a href="">ユーザ情報変更</a>から変更することができます。
                </dd>
            </dl>
        </div>
        <div class="textbox">
            <dl>
                <dt>各種リンク</dt>
                <dd>
                    <ul class="linklist">
                        <li>
                            住宅省エネ2024キャンペーン ホームページ<br>
                            <a href="https://jutaku-shoene2024.mlit.go.jp/">https://jutaku-shoene2024.mlit.go.jp/</a>
                        </li>
                        <li>
                            子育てエコホーム支援事業<br>
                            <a href="https://kosodate-ecohome.mlit.go.jp/">https://kosodate-ecohome.mlit.go.jp/</a>
                        </li>
                        <li>
                            先進的窓リノベ2024事業<br>
                            <a href="https://window-renovation2024.env.go.jp/">https://window-renovation2024.env.go.jp/</a>
                        </li>
                        <li>
                            給湯省エネ2024事業<br>
                            <a href="https://kyutou-shoene2024.meti.go.jp/">https://kyutou-shoene2024.meti.go.jp/</a>
                        </li>
                        <li>
                            賃貸集合給湯省エネ2024事業<br>
                            <a href="https://chintai-shoene2024.meti.go.jp/">https://chintai-shoene2024.meti.go.jp/</a>
                        </li>
                    </ul>
                </dd>
            </dl>
        </div>
        <div class="textbox">
            <dl>
                <dt>推奨ブラウザ</dt>
                <dd>
                    <p class="u-margin-bottom-20">この機能は、以下のOSおよびウェブブラウザでご利用頂くことを推奨します。 推奨環境であっても端末の設定によっては、ご利用できない場合や正しく表示・出力されない場合があります。</p>
                    <p>＜推奨環境＞<br>OS：Windows 10 / macOS 11 ブラウザ：Microsoft Edge、Firefox、Google Chrome、Safari（いずれも最新版）</p>
                </dd>
            </dl>
        </div>
    </div>




</main>

<script src="{{ asset('/js/lib/scroll-hint.min.js') }}"></script>
<script src="{{ asset('/js/scripts.js') }}"></script>

</body>
</html>
