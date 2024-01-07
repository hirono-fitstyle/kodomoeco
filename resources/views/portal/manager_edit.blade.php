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
    <h2 class="u-typography-6 u-margin-bottom-30">② 本アカウントの利用者の情報 | 編集画面</h2>
    <div class="u-margin-bottom-30">
        <p class="btn white">編集</p>
        <p class="btn orange">①事業者登録へ</p>
        <p class="btn none">TOPに戻る</p>
    </div>
    <p class="u-color-text-red u-margin-bottom-30">異動・退職等により利用者が変更する場合、必ず次の担当者に引き継ぎを行ってください。 また、新しい担当者の方は必ずメールアドレスを含む登録情報を更新し、パスワードを変更してください。</p>
    <div class="bg2 u-margin-bottom-20">
        <h4 class="u-typography-6 u-margin-bottom-20">統括アカウントの利用者情報</h4>
        <form id="form" class="form" action="{{ route('portal.manager.update') }}" method="POST">
            @method('PUT')
            @csrf
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
                            <input type="text" name="staffDepartment" value="{{ $operator['staff_department'] }}">
                        </div>
                    </dd>
                </dl>
                <dl class="bg4">
                    <dt>
                        <span>統括｜利用者役職</span>
                    </dt>
                    <dd>
                        <div>
                            <input type="text" name="staffPosision" value="{{ $operator['staff_posision'] }}">
                        </div>
                    </dd>
                </dl>
                <dl class="bg4">
                    <dt>
                        <span>氏名</span>
                    </dt>
                    <dd>
                        <div class="half">
                            <dl>
                                <dt>氏</dt>
                                <dd><input type="text" name="staffLastName" value="{{ $operator['staff_last_name'] }}"></dd>
                            </dl>
                            <dl>
                                <dt>名</dt>
                                <dd><input type="text" name="staffFirstName" value="{{ $operator['staff_first_name'] }}"></dd>
                            </dl>
                        </div>
                    </dd>
                </dl>
                <dl class="bg4">
                    <dt>
                        <span>統括｜事業所の住所</span>
                    </dt>
                    <dd>
                        <div>
                            <dl class="input">
                                <dt>郵便番号</dt>
                                <dd>
                                    <input id="staffZipcode" class="w200" type="text" name="staffZipcode" value="{{ $operator['staff_zipcode'] }}">　
                                    <span id="getAddress" class="btn orange">住所検索</span> ※ハイフン不要
                                </dd>
                            </dl>
                            <dl class="input">
                                <dt>都道府県</dt>
                                <dd><input id="staffPrefecture" class="w200" type="text" name="staffPrefecture" value="{{ $operator['staff_prefecture'] }}"> ※東京都⇒○　東京⇒✕</dd>
                            </dl>
                            <dl class="input">
                                <dt>市区町村</dt>
                                <dd><input id="staffCity" class="w200" type="text" name="staffCity" value="{{ $operator['staff_city'] }}"> ※横浜市西区⇒○　横浜市⇒✕</dd>
                            </dl>
                            <dl class="input">
                                <dt>丁目番地</dt>
                                <dd><input id="staffAddress" class="w500" type="text" name="staffAddress" value="{{ $operator['staff_address'] }}"><br>
                                    ※丁目から全角数字。１ー１２－３⇒○ 　1丁目12番3号⇒✕</dd>
                            </dl>
                            <dl class="input">
                                <dt>建物名</dt>
                                <dd><input class="w500" type="text" name="staffBuilding" value="{{ $operator['staff_building'] }}">
                                    ※ある場合は必ず入力</dd>
                            </dl>
                            <dl class="input">
                                <dt>部屋番号</dt>
                                <dd><input class="w200" type="text" name="staffRoomNumber" value="{{ $operator['staff_room_number'] }}">
                                    ※ある場合は必ず入力</dd>
                            </dl>

                        </div>
                    </dd>
                </dl>
                <dl class="bg4">
                    <dt>
                        <span>統括｜事業所の電話</span>
                    </dt>
                    <dd>
                        <div class="half">
                            <dl>
                                <dt>固定</dt>
                                <dd><input type="text" name="staffTel" value="{{ $operator['staff_tel'] }}"></dd>
                            </dl>
                            <dl>
                                <dt>携帯</dt>
                                <dd><input type="text" name="staffMobile" value="{{ $operator['staff_mobile'] }}"></dd>
                            </dl>
                        </div>
                    </dd>
                </dl>
                <dl class="bg4">
                    <dt>
                        <span>審査進捗のメール受信設定</span>
                    </dt>
                    <dd>
                        <div>
                            <p class="u-margin-bottom-20">{{ $operator['staffMail'] }}　<span>※メールアドレスの変更画面は「詳細画面」のリンクから行ってください。</span></p>
                            <ul class="businesslist">
                                <li><input id="business1" name="recieveMailFlag" type="radio" value="1" {{ $operator['recieve_mail_flag'] == '1' ? 'checked': '' }}><label for="business1">受信する</label></li>
                                <li><input id="business2" name="recieveMailFlag" type="radio" value="0" {{ $operator['recieve_mail_flag'] == '0' ? 'checked': '' }}><label for="business2">受信しない</label></li>
                            </ul>
                        </div>
                    </dd>
                </dl>
            </div>
        </form>
    </div>
    <div class="u-margin-bottom-30">
        <p class="btn orange">
            <a href="{{ route('portal.manager.update') }}" onclick="event.preventDefault(); document.getElementById('form').submit();">
                保存
            </a>
        <p class="btn none">詳細へ戻る</p>
    </div>
</main>
<script type="module">
    $(() => {
        // 住所情報の取得
        $('#getAddress').on('click', () => {
            $.ajax({
                url: '{{ url('/portal/manager/get-address') }}',
                type: 'POST',
                dataType: 'json',
                data : { zipCode : $('#staffZipcode').val() },
                timeout: 3000,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                }
            }).done(function(response) {
                if (response.existInputZipCode) {
                    if (response.status == "ok") {
                        if (response.addressList) {
                            $('#staffPrefecture').val(response.addressList.prefecture)
                            $('#staffCity').val(response.addressList.city)
                            $('#staffAddress').val(response.addressList.street)
                        } else {
                            alert("該当する住所はありません。")
                        }
                    } else {
                        alert("対象の郵便番号の取得に失敗しました。")
                    }
                } else {
                    alert("対象の郵便番号の取得に失敗しました。")
                }
            }).fail(function(XMLHttpRequest, textStatus, errorThrown) {
                alert("対象の郵便番号の取得に失敗しました。")
            })
        })
    })
</script>

</body>
</html>
