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
        <h2 class="u-margin-bottom-60 u-typography-6">パスワードリセット画面</h2>
        <form class="form" method="POST" action="{{ route('reset-password-request') }}">
            @csrf

            <p class="u-typography-9 u-margin-bottom-20">以下の内容を入力し、パスワードリセットの要求をしてください。</p>
            <dl class="u-margin-bottom-20">
                <dt>アカウントID</dt>
                <dd>
                    <input id="operator_id" type="text" class="form-control @error('operator_id') is-invalid @enderror" name="operator_id" value="{{ old('operator_id') }}" required autocomplete="ID" autofocus>

                    @error('operator_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </dd>
            </dl>
            <dl class="u-margin-bottom-20">
                <dt>姓</dt>
                <dd>
                    <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                    @error('last_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </dd>
            </dl>
            <dl class="u-margin-bottom-20">
                <dt>名</dt>
                <dd>
                    <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                    @error('first_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </dd>
            </dl>
            <dl class="u-margin-bottom-30">
                <dt>メールアドレス</dt>
                <dd>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </dd>
            </dl>
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