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
    <link rel="stylesheet" href="{{ asset('/css/login.css') }}" >
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

</header>
<main>
    <section class="login">
        <h2 class="u-margin-bottom-60 u-typography-6">ログイン</h2>
        <form class="form" method="POST" action="{{ route('login') }}">
            @csrf
            <dl class="u-margin-bottom-20">
                <dt>ID</dt>
                <dd>
                    <input id="operator_id" type="text" class="form-control @error('operator_id') is-invalid @enderror" name="operator_id" value="{{ old('operator_id') }}" required autocomplete="ID" autofocus>

                    @error('operator_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </dd>
            </dl>
            <dl class="u-margin-bottom-30">
                <dt>パスワード</dt>
                <dd>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </dd>
            </dl>
            @if (Route::has('reset-password-request'))
                <p class="u-margin-bottom-20">
                    <a href="{{ route('reset-password-request') }}">
                        パスワードをお忘れの場合はこちら
                    </a>
                </p>
            @endif
            <button type="submit" class="btn" style="width: 100%; cursor: pointer;">
                ログイン
            </button>
        </form>
        <p class="red u-margin-bottom-10">ログインやポータルの操作については「住宅省エネポータル操作説明書」をご確認ください。<br>（記載内容についてのお問い合わせには対応しない場合があります）</p>
        <ul class="explanation">
            <li class="u-margin-bottom-10"><a href="">住宅省エネポータル操作説明書（統括アカウント編）</a></li>
            <li><a href="">住宅省エネポータル操作説明書（担者アカウント編）</a></li>
        </ul>
        <div class="spec">
            <h3 class="u-typography-size--bold u-margin-bottom-10">推奨環境</h3>
            <dl class="u-margin-bottom-10">
                <dt>OS：</dt>
                <dd>Windows 10 / macOS 11</dd>
            </dl>
            <dl class="u-margin-bottom-10">
                <dt>ブラウザ：</dt>
                <dd>Microsoft Edge、Firefox、Google Chrome、Safari
                    （いずれも最新版）</dd>
            </dl>
            <p>※ 上記、環境であってもパソコン設定により、ご利用できない、正しく表示されない場合があります。</p>
        </div>

    </section>
</main>

    <script src="/js/lib/scroll-hint.min.js"></script>
    <script src="/js/scripts.js"></script>

</body>
</html>