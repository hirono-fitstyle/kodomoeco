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
                <img alt="住宅省エネ 2024キャンペーン" src="{{ asset('/img/logo.svg') }}">
            </picture>
        </a>
        <span class="">共通ポータル</span>
    </p>
</header>
<main>
    <section class="login">
        <h2 class="u-margin-bottom-60 u-typography-6">パスワード変更画面</h2>
        <form class="form" method="POST" action="{{ route('portal.reset-initial-password-store') }}">
            @csrf

            <p class="u-typography-9 u-margin-bottom-20">パスワードの入力</p>
            <dl class="u-margin-bottom-20">
                <dt>新しいパスワード</dt>
                <dd>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="new password" autofocus>

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </dd>
            </dl>
            <dl class="u-margin-bottom-30">
                <dt>新しいパスワードの確認</dt>
                <dd>
                    <input id="confirm_password" type="password" class="form-control @error('confirm_password') is-invalid @enderror" name="confirm_password" value="{{ old('confirm_password') }}" required autocomplete="confirm password" autofocus>

                    @error('confirm_password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </dd>
            </dl>
            <p class=" u-margin-bottom-20">パスワードの使い回し（他のシステムやインターネットサービスで同ーパスワードを使用すること）にご注意ください。</p>
            <p class="indent u-margin-bottom-30"><span>※</span>パスワードは半角英字・数字を組み合わせた8桁以上のものを入力してください。</p>
            <div class="btnbox">
                <button type="submit" class="btn2" style="width: 100%; cursor: pointer;">
                    パスワード変更
                </button>
            </div>
        </form>
    </section>
</main>

    <script src="/js/lib/scroll-hint.min.js"></script>
    <script src="/js/scripts.js"></script>

</body>
</html>