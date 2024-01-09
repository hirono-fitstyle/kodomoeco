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
    <link rel="stylesheet" href="{{ asset('/css/pw_change.css') }}" >
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
</header>
<main>
    <section class="login">
        <h2 class="u-margin-bottom-60 u-typography-6">パスワードリセット確認画面</h2>
        <form class="form" method="POST" action="{{ route('reset-password-request-complete') }}">
            @csrf

            <p class="u-typography-9 u-margin-bottom-20">以下の送信先に対して、パスワードをリセットするための情報を送信します。送信先を確認の上、送信ボタンを押してください。</p>
            <p class="u-typography-9 u-margin-bottom-20">Eメール</p>
            <p class="u-typography-9 u-margin-bottom-20">{{ $mask_email }}</p>
            <div class="btnbox">
                <button type="submit" class="btn2" style="width: 100%; cursor: pointer;">
                    リセットを要求
                </button>
            </div>
        </form>
    </section>
</main>

    <script src="/js/lib/scroll-hint.min.js"></script>
    <script src="/js/scripts.js"></script>

</body>
</html>