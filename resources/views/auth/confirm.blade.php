<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>住宅省エネ2024キャンペーン【公式】</title>
    <meta content="「住宅省エネ2024キャンペーン」の公式サイトです。" name="description">
    <meta content="住宅省エネ2024キャンペーン" name="keyword">
    <meta content="IE=Edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width" name="viewport">
    <link href="https://jutaku-shoene2024.mlit.go.jp/" rel="canonical">
    <meta content="ja_JP" property="og:locale">
    <meta content="https://jutaku-shoene2024.mlit.go.jp/img/ogp.jpg" property="og:image">
    <meta content="住宅省エネ2024キャンペーン【公式】" property="og:title">
    <meta content="「住宅省エネ2024キャンペーン」の公式サイトです。" property="og:description">
    <meta content="https://jutaku-shoene2024.mlit.go.jp/" property="og:url">
    <meta content="住宅省エネ2024キャンペーン【公式】" property="og:site_name">
    <meta content="website" property="og:type">
    <meta content="summary_large_image" name="twitter:card">
    <link href="/favicon.ico" rel="icon" sizes="any">
    <link href="/icon.svg" rel="icon" type="image/svg+xml">
    <link href="/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/styles.css') }}" >
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DYB5FTRP5M"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-DYB5FTRP5M');
    </script>
</head>

<body>

    <header class="p-header">
        <p class="p-header-logo">
            <a href="/">
                <picture>
                    <source media="(max-width:767px)" srcset="{{ asset('/img/logo_jutaku_shoene_01_sp.svg') }}">
                    <img alt="住宅省エネ 2024キャンペーン" src="{{ asset('/img/logo_jutaku_shoene_01.svg') }}">
                </picture>
            </a>
        </p>
        <p class="p-header-nav-button"><button data-drawer-trigger="menu">開く/閉じる</button></p>
        <nav class="p-nav" data-drawer-panel="menu">
            <ul class="p-category-nav">
                <li class="p-category-nav__item--top is-current"><a href="/">総合TOP</a></li>
                <li class="p-category-nav__item--kodomo"><a href="https://kosodate-ecohome.mlit.go.jp/" rel="noopener" target="_blank">子育てエコホーム</a></li>
                <li class="p-category-nav__item--window"><a href="https://window-renovation2024.env.go.jp/" rel="noopener" target="_blank">先進的窓リノベ</a></li>
                <li class="p-category-nav__item--kyutou"><a href="https://kyutou-shoene2024.meti.go.jp/" rel="noopener" target="_blank">給湯省エネ</a></li>
                <li class="p-category-nav__item--chintai"><a href="https://chintai-shoene2024.meti.go.jp/" rel="noopener" target="_blank">賃貸集合給湯省エネ</a></li>
            <!-- /.p-category-nav --></ul>
            <ul class="p-site-nav">
                <li class="p-site-nav__item"><a href="/">TOP</a></li>
                <li class="p-site-nav__item"><a href="/about/">キャンペーンについて</a></li>
                <li class="p-site-nav__item"><a href="/material/">補助対象建材・設備</a></li>
                <li class="p-site-nav__item"><a href="/faq/">よくあるご質問</a></li>
                <li class="p-site-nav__item--contact"><a href="/contact/">お問い合わせ窓口</a></li>
            <!-- /.p-site-nav --></ul>
        <!-- /.p-nav --></nav>
    <!-- /.p-header --></header>

    <section class="p-page-header">
        <p class="p-page-header__sub">統括アカウント</p>
        <h1 class="p-page-header__label">住宅省エネ支援事業者登録用 アカウント発行依頼</h1>
        <!-- /.p-page-header --></section>

    <section class="p-page">
        <section class="p-index-main">
            <div class="p-index-flow">
                <ul class="p-index-flow-liststep">
                    <li class="p-index-flow-listitem step1"><span>STEP 1</span><br>情報の入力</li>
                    <li class="p-index-flow-listitem step2 is-active"><span>STEP 2</span><br>入力内容の確認</li>
                    <li class="p-index-flow-listitem step3"><span>STEP 3</span><br>メール認証確認</li>
                    <li class="p-index-flow-listitem step4"><span>STEP 4</span><br>発行依頼完了</li>
                </ul>
            </div>
            <form method="POST" action="{{ route('entry.register') }}">
                @csrf
                <section class="p-index-block">
                    <h3 class="p-index-block__ttl">入力内容の確認</h3>
                    <p class="p-index-block__text">入力内容に間違いがないことを確認いただき、「送する」ボタンをクリックしてください。</p>
                    <div class="p-index-from">
                        <div class="p-index-from-item">
                            <div class="p-index-from-item__head w250">
                                <p>あなたの氏名<span class="required">必須</span></p>
                            </div>
                            <div class="p-index-from-item__data">
                                <p>{{ $input['last_name'] . ' ' . $input['first_name'] }}</p>
                            </div>
                            <input id="last_name" type="hidden" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ $input['last_name'] }}" required readonly>
                            @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <input id="first_name" type="hidden" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ $input['first_name'] }}" required readonly>
                            @error('first_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div class="p-index-from-item">
                            <div class="p-index-from-item__head w250">
                                <p>メールアドレス<span class="required">必須</span></p>
                            </div>
                            <div class="p-index-from-item__data">
                                <p>{{ $input['email'] }}</p>
                            </div>
                            <input id="email" type="hidden" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $input['email'] }}" required readonly>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <p class="indent emphasis"><span>※</span>メールが受信できない場合、以下をご確認ください。</p>
                    <ul class="emphasislist">
                        <li>メールアドレスが正しく入力されているか</li>
                        <li>迷惑メールフォルダやゴミ箱フォルダに事務局からのメールが入っていないか</li>
                        <li>以下のドメインからのメールが受できるよう、迷惑メールフィルター等で正しく設定されているか<br>
                            ●●@mail.jutaku-shoene2023.mlit.go.jp<br>
                            ●●@jutaku-shoene2023.jp<br>
                            ●●@kodomo-ecosumai.jp<br>
                            ●●@window-renovation.jp<br>
                            ●●@kyutou-shoene.jp</li>
                    </ul>
                    <p class="center emphasis">事務局からのメールの到着に、一定の時間を要する場合があります。</p>
                    <div class="p-index-from-btnbox">
                        <p class="p-index-from-btnbox__btn btn1">
                            <button type="submit" name='back' value="back">
                                入力画面へ戻る
                            </button>
                        </p>
                        <p class="p-index-from-btnbox__btn btn2">
                            <button type="submit" name='submit' value="submit">
                                送信する
                            </button>
                        </p>
                    </div>
                </section>
            </form>
            <ul class="p-index-btnbox">
                <li class="p-index-btnbox__btn btn-top"><a href="">住宅省エネ2024キャンペーンTOP</a></li>
            </ul>
            <ul class="p-index-btnbox">
                <li class="p-index-btnbox__btn btn1"><a href=""><span>子育てエコホーム<br>支援事業</span></a></li>
                <li class="p-index-btnbox__btn btn2"><a href=""><span>先進的窓リノベ2024事業</span></a></li>
                <li class="p-index-btnbox__btn btn3"><a href=""><span>給湯省エネ2024事業</span></a></li>
                <li class="p-index-btnbox__btn btn4"><a href=""><span>賃貸集合給湯省エネ<br>2024事業</span></a></li>
            </ul>
        </section>
    </section>

    <section class="p-index-pager">
        <div class="p-index-pager-inner">
            <ul>
                <li><a href="">総合TOP</a></li>
                <li>住宅省エネ支援事業者登録用 アカウント発行依頼</li>
            </ul>
        </div>
    </section>
    <footer class="p-footer">
        <ul class="p-footer-nav">
            <li class="p-footer-nav__item"><a href="/privacy/">プライバシーポリシー</a></li>
            <li class="p-footer-nav__item"><a href="/requirement/">サイトご利用に関して</a></li>
        <!-- /.p-footer-nav --></ul>
        <ul class="p-footer-banners">
            <li class="p-footer-banners__item"><a href="https://www.mlit.go.jp/"><img alt="国土交通省" src="{{ asset('/img/banner_footer_mlit_01.png') }}"></a></li>
            <li class="p-footer-banners__item"><a href="https://www.meti.go.jp/"><img alt="経済産業省" src="{{ asset('/img/banner_footer_meti_01.png') }}"></a></li>
            <li class="p-footer-banners__item"><a href="https://www.env.go.jp/"><img alt="環境省" src="{{ asset('/img/banner_footer_env_01.png') }}"></a></li>
        <!-- /.p-footer-banners --></ul>
        <p class="p-footer-copy">©子育てエコホーム支援事業事務局 All Rights Reserved.</p>
    <!-- /.p-footer --></footer>

    <script src="{{ asset('/js/lib/scroll-hint.min.js') }}"></script>
    <script src="{{ asset('/js/scripts.js') }}"></script>

</body>
</html>