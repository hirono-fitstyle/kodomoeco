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
    <link rel="stylesheet" href="{{ asset('/css/profile.css') }}">
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
    <h2 class="u-typography-6 u-margin-bottom-30">② 本アカウントの利用者の情報 | 詳細画面</h2>
    <div class="u-margin-bottom-30">
        <p class="btn white">
            <a href="{{ route('portal.manager.edit') }}">
                編集
            </a>
        </p>
        <p class="btn orange">
            <a href="{{ route('portal.operator.detail') }}">
                ①事業者登録へ
            </a>
        </p>
        <p class="btn none">
            <a href="{{ route('portal.top') }}">
                TOPに戻る
            </a>
        </p>
    </div>
    <p class="u-color-text-red u-margin-bottom-30">異動・退職等により利用者が変更する場合、必ず次の担当者に引き継ぎを行ってください。 また、新しい担当者の方は必ずメールアドレスを含む登録情報を更新し、パスワードを変更してください。</p>
    <div class="bg2 u-margin-bottom-20">
        <h4 class="u-typography-6 u-margin-bottom-20">統括アカウントの利用者情報</h4>
        <div class="detailbox u-margin-bottom-60">
            <dl class="bg4">
                <dt>
                    <span>法人名（屋号）</span>
                </dt>
                <dd>
                    <div>
                        <p>{{ $operator['operator_name'] }}</p>
                    </div>
                </dd>
            </dl>
            <dl class="bg4">
                <dt>
                    <span>統括｜利用者部署</span>
                </dt>
                <dd>
                    <div>
                        <p>{{ $operator['staff_department'] }}</p>

                    </div>
                </dd>
            </dl>
            <dl class="bg4">
                <dt>
                    <span>統括｜利用者役職</span>
                </dt>
                <dd>
                    <div>
                        <p>{{ $operator['staff_posision'] }}</p>

                    </div>
                </dd>
            </dl>
            <dl class="bg4">
                <dt>
                    <span>氏名</span>
                </dt>
                <dd>
                    <div>
                        <p>{{ $operator['staff_last_name'] }}{{ $operator['staff_first_name'] }}</p>
                    </div>
                </dd>
            </dl>
            <dl class="bg4">
                <dt>
                    <span>統括｜事業所の住所</span>
                </dt>
                <dd>
                    <div>
                      <p>{{ $operator['staff_zipcode'] }}<br>
                        {{ $operator['staff_prefecture'] }}<br>
                        {{ $operator['staff_city'] }}<br>
                        {{ $operator['staff_address'] }}<br>
                        {{ $operator['staff_building'] }}<br>
                        {{ $operator['staff_room_number'] }}</p>
                    </div>
                </dd>
            </dl>
            <dl class="bg4">
                <dt>
                    <span>統括｜事業所の電話</span>
                </dt>
                <dd>
                    <div>
                        <p>
                            固定 {{ $operator['staff_tel'] }}<br>
                            携帯 {{ $operator['staff_mobile'] }}
                        </p>
                    </div>
                </dd>
            </dl>
            <dl class="bg4">
                <dt>
                    <span>審査進捗のメール受信設定</span>
                </dt>
                <dd>
                    <div>
                        <p class="u-margin-bottom-20">{{ $operator['staff_mail'] }}　
                        <span class="btn orange">
                                <a href="{{ route('portal.manager.change-mail-address-request') }}">
                                    登録メールアドレスの変更はこちら
                                </a>
                            </p>
                    </span></p>
                        <ul class="businesslist">
                            <li><input id="business1" name="" type="radio" {{ $operator['recieve_mail_flag'] == '1' ? 'checked': '' }}><label for="business1">受信する</label></li>
                            <li><input id="business2" name="" type="radio" {{ $operator['recieve_mail_flag'] == '0' ? 'checked': '' }}><label for="business2">受信しない</label></li>
                            <li class="u-color-text-red">※受診しない設定しても、事務局が重要と判断するメールは添付されます。</li>
                        </ul>
                    </div>
                </dd>
            </dl>
        </div>
    </div>
    <div class="u-margin-bottom-30">
        <p class="btn white">
            <a href="{{ route('portal.manager.edit') }}">
                編集
            </a>
        </p>
        <p class="btn orange">
            <a href="{{ route('portal.operator.detail') }}">
                ①事業者登録へ
            </a>
        </p>
        <p class="btn none">
            <a href="{{ route('portal.top') }}">
                TOPに戻る
            </a>
        </p>
    </div>
</main>
</body>
</html>
