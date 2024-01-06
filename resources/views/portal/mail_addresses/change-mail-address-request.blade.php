<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>住宅省エネ2024キャンペーン【公式】</title>
    <meta content="「住宅省エネ2024キャンペーン」の公式サイトです。" name="description">
    <meta content="住宅省エネ2024キャンペーン" name="keyword">
    <meta content="IE=Edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/profile.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/common.js'])
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
            <p class="name">アカウントの名前</p>
            <div class="under">
                <p><a href="">パスワード変更画面</a></p>
                <p><a href="">ログアウト</a></p>
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
    <h2 class="u-typography-6 u-margin-bottom-30">② 本アカウントの利用者の情報 | メールアドレス画面</h2>
    <div class="bg2 u-margin-bottom-20">
        <h4 class="u-typography-6 u-margin-bottom-20">メールアドレスの変更</h4>
        @include('layouts.result')
        <form id="form" class="form" action="{{ route('portal.manager.change-mail-address-request') }}" method="POST">
            @csrf
            <div class="detailbox u-margin-bottom-60">
                <dl class="bg4">
                    <dt>
                        <span>新しいメールアドレス</span>
                    </dt>
                    <dd>
                        <div>
                            <input type="text" name="mail_address">
                        </div>
                    </dd>
                </dl>
                <dl class="bg4">
                    <dt>
                        <span>新しいメールアドレス<br />（確認用）</span>
                    </dt>
                    <dd>
                        <div>
                            <input type="text" name="mail_address_new">
                        </div>
                    </dd>
                </dl>
                <dl class="bg4">
                    <dt>
                        <span>パスワード</span>
                    </dt>
                    <dd>
                        <div>
                            <input type="password" name="current_password">
                        </div>
                    </dd>
                </dl>
            </div>
        </form>
    </div>
    <div class="u-margin-bottom-30">
        <p class="btn orange">
            <a id="change">変更</a>
        <p class="btn none">
            <a id="toDetail">詳細へ戻る</a>
        </p>
    </div>
</main>
<script type="module">
    $(() => {
        $("#change").on('click', () => {
            confirmSubmitForm("form")
        })
        $("#toDetail").on('click', () => {
            confirmBackForm("{{ route('portal.manager.detail') }}", CONFIRM_BACK_DETAIL)
        })
    })
</script>

</body>
</html>
