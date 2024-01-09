<!DOCTYPE html>
<html>

<head>
    <style>
        @font-face {
            font-family: 'BIZ UDP明朝';
            src: url('/var/www/html/storage/fonts/BIZUDMincho-Regular.ttf');
            src: local('BIZ UDP明朝'), url('/var/www/html/storage/fonts/BIZUDMincho-Regular.ttf'), format('truetype')
        }

        * {
            font-family: 'BIZ UDP明朝', serif;
            font-size: 15px;
            box-sizing: border-box;
        }

        body {
        }

        ul {
            margin: 0px;
            padding-left: 15px;
        }

        ol {
            margin: 0px;
            padding-left: 25px;
        }

        .info-wrap {
            margin-top: 15px;
        }

        .info-wrap > .title {
            padding: 0px;
            margin: 0px;
        }

        .page {
            page-break-after: always;
            page-break-inside: avoid;
        }

        .page-header {
            text-align: right;
            color: #888888;
            height: 30px;
        }

        .page:last-child {
            page-break-after: auto;
        }

        .page-partition {
            float: left;
            width: 48%;
        }

        .page-separater {
            float: left;
            width: 4%;
        }
        .dear {
            text-decoration: underline;
            padding: 0px;
            margin: 0px;
            font-size: 1.2rem;
        }

        .page-title1 {
            text-align: center;
            padding: 30px 0px;
        }

        .page-title2 {
            text-align: center;
            padding: 15px 0px;
        }

        .explanation1 {
            font-size: 0.9rem;
        }

        .apply-info {
            width: 100%;
            border-spacing: 0px;
            border-width: thin;
            border-top-style: solid;
            border-right-style: solid;
            border-color: #000000;
        }

        .apply-info tr th,
        .apply-info tr td {
            border-width: thin;
            border-left-style: solid;
            border-bottom-style: solid;
            border-color: #000000;
            padding: 0px 7px;
            height: 40px;
        }

        .apply-info tr th {
            font-weight: normal;
        }

        .font-xl {
            font-size: 1.4rem;
        }

        .font-lg {
            font-size: 1.2rem;
        }

        .font-sm {
            font-size: 0.9rem;
        }

        .apply-title {
            font-size: 1.4rem;
            text-align: center;
            margin: 40px 0px;
        }

        .page-title {
            font-size: 1.2rem;
            text-align: center;
            text-decoration: underline;
        }

        .mark1 {
            background-color: #888;
            padding: 10px 0px;
            width: 100px;
            color: #ffffff;
            text-align: center;
            font-size: 1.2rem;9
        }

        .mark2 {
            background-color: #000000;
            padding: 10px 0px;
            width: 100px;
            color: #ffffff;
            text-align: center;
            font-size: 1.2rem;
        }

        .clause {
            font-size: 0.8rem;
            margin-bottom: 25px;
        }

        .clause-title {
            text-decoration: underline;
            margin-bottom: 3px;
            font-size: 0.9rem;
        }

        .clause-explanation {
            padding: 0px;
            margin: 0px;
            font-size: 0.9rem;
        }

        ol.custom-list {
            position: relative;
            margin: 0;
            padding: 0;
        }

        ol.custom-list>li {
            list-style: none;
            list-style-position: outside;
            margin: 0;
            padding-left: 1.5em;
            font-size: 0.9rem;
        }

        ol.custom-list>li>span {
            position: absolute;
            left: 0;
            margin: 0;
            font-size: 0.9rem;
        }

        .check {
            font-size: 1.2rem;
        }

        .revision-date {
            margin-top: 30px;
            text-align: right;
        }
        .revision-date > p {
            margin: 0px;
            font-size: 0.9rem;
        }

    </style>
</head>

<body>
    <!-- 1ページ目 -->
    <div class='page'>
        <div class="page-header">（様式１）</div>
        <p class='dear'>子育てエコホーム支援事業事務局　殿</p>
        <p class='dear'>先進的窓リノベ2024事業事務局　殿</p>
        <p class='dear'>給湯省エネ2024事業事務局　殿</p>
        <p class='dear'>賃貸集合給湯省エネ2024事業事務局　殿</p>
        <div class='apply-title'>
            住宅省エネ2024キャンペーン・住宅省エネ支援事業者登録申請書
        </div>
        <div class='explanation1'>
            <p>&emsp;以下の通り、「子育てエコホーム支援事業（以下、「エコホーム支援事業」という。）」、「先進的窓リノベ2024事業」、「給湯省エネ2024事業」及び「賃貸集合給湯 省エネ2024事業」（以下、「構成事業」という。）が参加する「住宅省エネ2024キャンペーン」（以下、「本キャンペーン」という。）において、消費者等に代わり各構成事業の交付申請等の手続きを行う「住宅省エネ支援事業者」に登録を申請いたします。<br />
            &emsp;なお、登録申請にあたり、本キャンペーンの事業者登録規約（本様式別紙①）をよく理解の上、遵守します。また、各構成事業の交付申請の提出の際には、当該交付申請を提出する構成事業の事業者登録規約（本様式別紙②～⑤）を遵守することに同意いたします。        </div>
        <div class="info-wrap">
            <p class="title">【事業者情報】</p>
            <table class='apply-info'>
                <tr>
                    <th style="width: 240px;">作&emsp;成&emsp;日（&emsp;出&emsp;力&emsp;日&emsp;）</th>
                    <td colspan="2">{{ $eradate['era'] }} {{ $eradate['year'] }} 年 {{ $eradate['month'] }} 月 {{ $eradate['day'] }} 日</td>
                </tr>
                <tr>
                    <th>事&emsp;業&emsp;者&emsp;名&emsp;・&emsp;商&emsp;号<br />（ 個 人 事 業 主 は 屋 号 ）</th>
                    <td>{{ $operator_name }}</td>
                    <td rowspan="3" style="width: 120px; text-align: center; vertical-align: middle;">
                        <div style="color: #888888">実印</div>
                        <div style="color: #888888; font-size: 0.65rem">(印鑑証明書の登録印)</div>
                    </td>
                </tr>
                <tr>
                    <th>代&emsp;&emsp;表&emsp;&emsp;者&emsp;&emsp;肩&emsp;&emsp;書<br />（ 個 人 事 業 主 は 不 要 ）</th>
                    @if ($operator_category == "1")
                        <td>{{ $operator_title }}</td>
                    @else
                        <td></td>
                    @endif
                </tr>
                <tr>
                    <th>代&emsp;&emsp;表&emsp;&emsp;者&emsp;&emsp;氏&emsp;&emsp;名<br />（ 個人事業主は本人氏名 ）</th>
                    <td>{{ $representative_last_name }} {{ $representative_first_name }}</td>
                </tr>
                <tr>
                    <th>本&emsp; 店&emsp; の&emsp; 所&emsp; 在&emsp; 地<br />（ 個 人 事 業 主 は 住 所 ）</th>
                    @if ($operator_category == "1")
                        <td colspan="2">〒{{ $operator_zipcode }}<br />{{ $operator_prefecture }} {{ $operator_city }} {{ $operator_address }}</td>
                    @else 
                        <td colspan="2">〒{{ $operator_zipcode }}<br />{{ $operator_prefecture }} {{ $operator_city }} {{ $operator_address_solo }}{{ $operator_building_solo }}{{ $operator_room_number_solo }}</td>
                    @endif
                </tr>
                <tr>
                    <td colspan="3">
                        <div style="padding: 10px;">
                            <div class="font-lg" style="display: inline">☑</span>
                            <div style="display: inline">
                                <span>以下に該当しません（法人においては、役員等（実質的に経営に関与する者を含む））</span>
                                <p class="font-sm" style="margin: 10px;">
                                    暴力団（暴力団員による不当な行為の防止等に関する法律（平成３年法律第77号）第2条第2号に規定する暴力団をいう。以下同じ。）又は暴力団員（同条第６に規定する暴力団員をいう。以下同じ。）である者、不正の利益を図る目的若しくは第三者に損害を加える目的をもって暴力団若しくは暴力団員を利用している者、資金等の供給若しくは便宜の供与等により直接的あるいは積極的に暴力団の維持、運営に協力し、若しくは関与している者、又は暴力団若しくは暴力団員であることを知りながらこれと社会的に非難されるべき関係を有している者
                                </p>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="info-wrap">
            <p class="title">【参加を予定する構成事業】 ※登録後も変更できます</p>
            <table class='apply-info'>
                <tr>
                    <td>
                        <span class='font-xl'>
                            @if ($public_project1 == 1) ☑ @else □ @endif
                        </span>
                        <span>子育てエコホーム支援事業</span>
                        (
                        <span class="font-lg">
                            @if ($public_buisiness1 == 1) ☑ @else □ @endif
                        </span>
                        <span class="font-sm">注文住宅の新築</span>
                        <span class="font-lg">
                            @if ($public_buisiness2 == 1) ☑ @else □ @endif
                        </span>
                        <span class='font-sm'>新築分譲住宅の購入（宅地建物取引業者に限る）</span>
                        <span class="font-lg">
                            @if ($public_buisiness3 == 1) ☑ @else □ @endif
                        </span>
                        <span class='font-sm'>リフォーム</span>
                        )
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class='font-xl'>
                            @if ($public_project3 == 1) ☑ @else □ @endif
                        </span>
                        <span>先進的窓リノベ2024事業</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class='font-xl'>
                            @if ($public_project2 == 1) ☑ @else □ @endif
                        </span>
                        <span>給湯省エネ2024事業</span>
                        (
                        <span class="font-lg">
                            @if ($public_buisiness5 == 1) ☑ @else □ @endif
                        </span>
                        <span class='font-sm'>エネルギー小売</span>
                        <span class="font-lg">
                            @if ($public_buisiness4 == 1) ☑ @else □ @endif
                        </span>
                        <span class='font-sm'>リース事業者</span>
                        )
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class='font-xl'>
                            @if ($public_project4 == 1) ☑ @else □ @endif
                        </span>
                        <span>賃貸集合給湯省エネ2024事業</span>
                    </td>
                </tr>

            </table>
        </div>
        <div class="info-wrap">
            <p class="title">【添付する書類】 ※該当する書類をすべて提出してください＊</p>
            <table class='apply-info'>
                <tr>
                    <td rowspan="2" style="width: 190px">
                        <span class="font-xl">
                            @if ($operator_category == "1") ☑ @else □ @endif
                        </span>
                        <span>法&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;人</span>
                    </td>
                    <td>
                        <div style="width: 160px; display: inline-block">法人の印鑑証明書</div>
                        <span class="font-sm">（法務局で３ヶ月以内に発行されたもの）</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div style="width: 160px; display: inline-block">商業法人登記の写し</div>
                        <span class="font-sm">（法務局で３ヶ月以内に発行されたもので、現在事項が確認できるもの）</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="font-xl">
                            @if ($operator_category == "2") ☑ @else □ @endif
                        </span>
                        <span>個&emsp;人&emsp;事&emsp;業&emsp;主</span>
                    </td>
                    <td>
                        <div style="width: 160px; display: inline-block">個人の印鑑証明書</div>
                        <span class="font-sm">（住民登録がある自治体等で３ヶ月以内に発行されたもの）</span>
                    </td>
                </tr>
            </table>
            <p class="font-sm">＊住宅省エネ2023キャンペーンにおいて住宅省エネ支援事業者として事業者登録を行い、本キャンペーンへの継続参加を希望した者は、住宅省エネ2023キャンペーン  の事業者登録時においてすでに提出されている書類に変更がある場合のみ、当該変更内容が確認できる書類を提出してください。<br />
                （例）法人又は個人事業主の実印（自治体への登録印）が変更になった場合、「印鑑証明書」を添付してください。<br />
                &emsp;&emsp;&emsp;法人の代表者や本店の所在地が変更になった場合、「商業法人登記の写し」を添付してください。</p>
        </div>
        <div>
            <table>
                <tr>
                    <td style="width: 100px; vertical-align: top">【注意事項】</td>
                    <td>
                        <ol class="custom-list" style="font-size: 1rem;">
                            <li><span>・</span>修正液、訂正印は使用できません。（ポータルの情報修正後、再出力してください）</li>
                            <li><span>・</span>記入、押印漏れがある場合、登録申請の受付は行いません。</li>
                            <li><span>・</span>印字することのできない一部の人名漢字等を、常用漢字若しくはひらがなに置きかえている場合があります。</li>
                        </ol>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <!-- 2ページ目 -->
    <div class='page font-sm'>
        <div class="page-header">（様式１別紙①）</div>
        <table style="width: 100%">
            <tr>
                <td class="mark1">別紙①</td>
                <td>
                    <div class="page-title">事業者登録規約（住宅省エネ2024キャンペーン）</div>
                </td>
                <td class="mark2">提出不要</td>
            </tr>
        </table>
        <p class="font-sm">
            &emsp;「住宅省エネ2024キャンペーン」（以下、「本キャンペーン」という。）は、一体的に実施、運用される構成事業、すなわち「子育てエコホーム支援事業（以下、「エコホーム事業」という）」、「先進的窓リノベ2024事業（以下、「窓リノベ事業」という。）」、「給湯省エネ2024事業（以下、「給湯省エネ事業」という。）、「賃貸集合給湯省エネ2024事業（以下、「賃貸集合給湯省エネ事業」という。）」の総称です。
        </p>
        <div class="page-partition">
            <div class="clause">
                <p class="clause-title">第１条　住宅省エネ支援事業者</p>
                <span class="clause-explanation">
                    <ol class="custom-list">
                        <li><span>１．</span>住宅省エネ支援事業者とは、本キャンペーンにおいて住宅省エネ2024キャンペーン・住宅省エネ支援事業者登録申請書を提出し、エコホーム事業の事務局（以下、「本事務局」という。）に登録された者をいいます。ただし、当該登録により、本事務局及び国（以下、「本事務局等」という。）は住宅省エネ支援事業者として登録された事業者に対して何らその優良性を認定するものではありません。
                        </li>
                        <li><span>２．</span>本事業者登録規約（住宅省エネ2024キャンペーン）（以下、「本規約」という。）に基づき、住宅省エネ支援事業者として登録されるためには、以下①～④の要件（以下、「登録要件」という。）が満たされていなければなりません。登録後に登録要件のいずれかが満たされなくなった場合には、当該住宅省エネ支援事業者は、直ちに本事務局にその旨を通知しなければならないものとします。本事務局は、当該通知を受けた場合、又は登録要件のいずれかを満たさなくなったことが明らかな場合は、速やかにその登録を抹消又は停止するものとします。
                            <ol class="custom-list">
                                <li><span>&#9312;</span>構成事業のいずれかにおいて、補助金の交付が見込まれること</li>
                                <li><span>&#9313;</span>国内に法人登記された法人又は住民登録された個人事業主</li>
                                <li><span>&#9314;</span>インターネット環境を有し、本事務局が提供する本キャンペーンのWebシステム（以下、「住宅省エネポータル」  という。）を利用できる者</li>
                                <li>
                                    <span>&#9315;</span>以下の該当しない者（法人においては、役員等（実質的に経営に関与する者を含む））
                                    <ol class="custom-list">
                                        <li><span>・</span>暴力団（暴力団員による不当な行為の防止等に関する法律（平成３年法律第77号）第３条第２号に規定する暴力団をいう。以下同じ。）又は暴力団員（同条第6号に規定する暴力団員をいう。以下同じ。）である者、不正の利益を図る目的若しくは第三者に損害を加える目的をもって暴力団若しくは暴力団員を利用している者、資金等の供給若しくは便宜の供与等により直接的あるいは積極的に暴力団の維持、運営に協力し、若しくは関与している者、又は暴力団若しくは暴力団員であることを知りながらこれと社会的に非難されるべき関係を有している者</li>
                                    </ol>
                                </li>
                            </ol>
                        </li>
                    </ol>
                </span>
            </div>
            <div class="clause">
                <p class="clause-title">第２条　構成事業への参加</p>
                <p class="clause-explanation">
                    &emsp;住宅省エネ支援事業者は、補助金の交付申請を希望する構成事業に対して参加を申告することができます。本事務局は、当該住宅省エネ支援事業者が以下①及び②の参加要件を満たす場合、各構成事業の登録事業者として登録します。
                    <ol class="custom-list" style="padding: 10px">
                        <li><span>&#9312;</span>前条第２項に基づき、住宅省エネ支援事業者の登録が抹消　　又は停止されていないこと</li>
                        <li><span>&#9313;</span>各構成事業にあっては、以下の要件を充足すること</li>
                        <li>
                            <ol class="custom-list">
                                <li><span>(ⅰ)</span>&emsp;エコホーム事業の参加にあたっては、当該事業の事業者登録規約第１条第３項に規定する参加要件</li>
                                <li><span>(ⅱ)</span>&emsp;窓リノベ事業の参加にあたっては、当該事業の事業者登録規約第１条第３項に規定する参加要件</li>
                                <li><span>(ⅲ)</span>&emsp;給湯省エネ事業の参加にあたっては、当該事業の事業者登録規約第１条第３項に規定する参加要件</li>
                                <li><span>(ⅳ)</span>&emsp;賃貸集合給湯省エネ事業の参加にあたっては、当該事業の事業者登録規約第１条第３項に規定する参加要件</li>
                            </ol>
                        </li>
                    </ol>
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第３条　構成事業への参加拒否と停止</p>
                <p class="clause-explanation">
                    <ol class="custom-list">
                        <li><span>１．</span>本事務局は、前条により登録された各構成事業の登録事業者が、登録後に当該参加要件を満たさなくなった場合、または満たさないことが確認された場合、各構成事業における登録事業者としての地位を停止することがあります。</li>
                    </ol>
                </p>
            </div>

        </div>
        <div class="page-separater">&emsp;</div>
        <div class="page-partition">

            <div class="clause">
                <p class="clause-explanation">
                    <ol class="custom-list">
                        <li><span>２．</span>各構成事業の事務事業者（以下、「担当事務局」という。）は、他の構成事業又は以下（ⅰ）～（ⅲ）の事業において、当該事業の規約及びこれに類するものに反して、若しくは怠慢、虚偽による申告及びその他不正な手段により、補助金の交付を受ける又は受けようとするなどの行為を行った住宅省エネ支援事業者からの各構成事業に対する参加申告を拒否し、登録後にあってはその地位を停止することがあります。</li>
                        <li>
                            <ol class="custom-list">
                                <li><span>(ⅰ)</span>&emsp;こどもエコすまい支援事業（令和４年補正予算第２号）</li>
                                <li><span>(ⅱ)</span>&emsp;先進的窓リノベ事業（令和４年補正予算第２号）</li>
                                <li><span>(ⅲ)</span>&emsp;給湯省エネ事業（令和４年補正予算第２号）</li>
                            </ol>
                        </li>
                    </ol>
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第４条　情報公開と問い合わせ</p>
                <p class="clause-explanation">
                    &emsp;住宅省エネ支援事業者が希望した場合、本事務局が作成する本キャンペーンのホームページ上で当該住宅省エネ支援事業者に関する情報が、登録事業者として公開されます。ただし、情報の公開にあたっては、住宅省エネ支援事業者は、構成事業の交付申請を検討する者（以下、「消費者等」という。）からの問い合わせに対応する義務を負い、消費者等からの問い合わせに適切に対応できる体制を整備しなければなりません。本事務局は、住宅省エネ支援事業者による問い合わせ対応若しくは体制の整備が不十分であると判断した場合、公開内容が不適切であると判断した場合、本規約第１条に定める登録要件を満たさないと判断した場合、本規約第７条に定める登録の抹消をした場合、若しくは本事務局または   担当事務局が本規約第３条に定める構成事業への参加拒否又は登録事業者の地位の停止をした場合、住宅省エネ支援事業者へ事前の通告なしに当該住宅省エネ支援事業者に関する情報の全部又は一部の公開を停止することがあります。
                </p>
            </div>
            <div class="clause">
                <p class="clause-title">第５条&emsp;従業員等への周知</p>
                <p class="clause-explanation">
                    &emsp;住宅省エネ支援事業者は、本キャンペーンに関わる従業員及びその取引先等（以下、「従業員等」という。）に対して、禁止事項等、本規約が定める事項について、周知と教育を徹底しなければなりません。
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第６条&emsp;禁止事項</p>
                <p class="clause-explanation">
                    &emsp;住宅省エネ支援事業者（住宅省エネ支援事業者になろうとする者を含む。以下本条において同じ。）及びその従業員等は、以下①～⑧に掲げる行為を行ってはなりません。
                    <ol class="custom-list">
                        <li><span>&#9312;</span>不正、虚偽により住宅省エネ支援事業者の登録を受け、又は登録を申請すること</li>
                        <li><span>&#9313;</span>構成事業において、担当事務局が作成するマニュアル及び規約並びに担当事務局及び国が行う告知・発表等に定める事項（以下、「マニュアル等」という。）において禁止されている行為をすること</li>
                        <li><span>&#9314;</span>消費者等に対して、本キャンペーン及び構成事業、並びに本事務局等及び担当事務局の名称、商標、又は称呼等を用いて、当該住宅省エネ支援事業者が取り扱う商品及び事業の優良性または有利性を誤認させるおそれのある言動、表示及び広告をすること</li>
                        <li><span>&#9315;</span>本事務局等に対する債権を、第三者に譲渡し、若しくは移転し、又は担保に供すること</li>
                        <li><span>&#9316;</span>本事務局等に対する一切の権利及び義務並びに本規約に基づき締結される本事務局との間の契約上の地位について、本事務局の同意なしに第三者に対して譲渡し、若しくは移転し、又は担保に供すること</li>
                        <li><span>&#9317;</span>本事務局等及び消費者等を誹謗中傷し、又は名誉若しくは信用を傷つける言動をすること</li>
                        <li><span>&#9318;</span>法令もしくは法令に基づく処分等に違反するまたはそのおそれのある行為</li>
                        <li><span>&#9319;</span>その他、本事務局等が本キャンペーン及び構成事業の趣旨に反すると判断する行為、及び本事務局等との信頼関係を損なう一切の行為</li>
                    </ol>
                </p>
            </div>

        </div>
        <div style="clear: both"></div>
    </div>

    <!-- 3ページ目 -->
    <div class='page font-sm'>
        <div class="page-header">（様式１別紙①）</div>
        <div class="page-partition">

            <div class="clause">
                <p class="clause-title">第７条&emsp;登録の抹消</p>
                <p class="clause-explanation">
                    &emsp;本事務局は、住宅省エネ支援事業者又はその従業員等が本規約に反する行為を行い、又は行おうとしたと本事務局が判断した場合、住宅省エネ支援事業者としての登録を抹消することがあります。
                </p>
            </div>
            <div class="clause">
                <p class="clause-title">第８条&emsp;本規約の変更等</p>
                <p class="clause-explanation">
                    &emsp;本事務局が本規約を変更するときは、あらかじめ変更の７日前までに、本キャンペーンのホームページ及び住宅省エネポータルにより、本規約の変更をする旨、変更内容及び変更の効力発生時期を通知するものとします。ただし、上記にかかわらず、当該変更が住宅省エネ支援事業者一般の利益に適合する場合、又は緊急の必要がある場合その他やむを得ない事情がある場合には、周知期間を短縮し、又は変更の効力発生後速やかに上記の方法において周知することができるものとします。変更後の本規約については、本事務局が定めた効力発生時期より、効力を生じるものとします。
                </p>
            </div>
            <div class="clause">
                <p class="clause-title">第９条&emsp;免責</p>
                <p class="clause-explanation">
                    <ol class="custom-list">
                        <li><span>１．</span>本事務局等及び担当事務局は、本キャンペーンに関して、住宅省エネ支援事業者（住宅省エネ支援事業者になろうとする者を含む。以下本条において同じ。）に生じたあらゆる損失等について、一切の責任及び義務を負わないものとします。ただし、本事務局等又は担当事務局の故意又は重過失によるものである場合には、当該事務局等又は担当事務局は、当該住宅省エネ支援事業者に直接かつ現実に生じた損害に限り、責任を負うものとします。</li>
                        <li><span>２．</span>本事務局等及び担当事務局は、本キャンペーンに関して、住宅省エネ支援事業者と、第三者との間に生じた紛争やあらゆる損失等について、一切の責任及び義務を負わないものとします。</li>
                    </ol>
                </p>
            </div>
        </div>
        <div class="page-separater">&emsp;</div>
        <div class="page-partition">
            <div class="clause">
                <p class="clause-title">第１０条&emsp;本事務局による個人情報の利用</p>
                <p class="clause-explanation">
                    &emsp;本キャンペーンにおいて本事務局が取得した個人情報の利用、保存及び管理には、本キャンペーンのプライバシーポリシーが適用されます。
                </p>
            </div>
            <div class="clause">
                <p class="clause-title">第１１条&emsp;住宅省エネ支援事業者の秘密保持義務</p>
                <p class="clause-explanation">
                <ol class="custom-list">
                    <li><span>１．</span>住宅省エネ支援事業者（住宅省エネ支援事業者になろうとする者を含む。以下本条において同じ。）は、本キャンペーンに関連して、本事務局等又は担当事務局から開示される技術上又は営業上の情報（以下、「秘密情報」という。）を、第三者に漏洩、開示又は公表してはならないものとします。ただし、本事務局の書面による事前の同意を得た場合はこの限りではありません。</li>
                    <li><span>２．</span>住宅省エネ支援事業者は、本キャンペーン上の義務を履行する目的に限り、秘密情報を複製、加工、及び利用することができます。</li>
                    <li><span>３．</span>本事務局及び住宅省エネ支援事業者は、秘密情報又は個人情報の漏洩等の事故が発生し、又は発生したおそれのあることを知った場合、当該事故の発生原因の如何にかかわらず、直ちにその旨を相手方に報告し、本事務局と住宅省エネ支援事業者が協議の上、適切な措置を講じるものとします。</li>
                    <li><span>４．</span>本事務局及び住宅省エネ支援事業者は、前項の事故について、事故を引き起こした責任がいずれにあるかを協議の上、確定するものとします。</li>
                </ol>
                </p>
            </div>
            <div class="clause">
                <p class="clause-title">第１２条&emsp;専属的合意管轄裁判所</p>
                <p class="clause-explanation">
                    &emsp;本キャンペーンに関して、本事務局と住宅省エネ支援事業者又は住宅省エネ支援事業者になろうとする者との間に生じた紛争については、東京簡易裁判所又は東京地方裁判所を第一審の専属的合意管轄裁判所とする。
                </p>
            </div>
            <div class="clause">
                <p class="clause-title">第１３条&emsp;雑則</p>
                <p class="clause-explanation">
                    &emsp;本規約に定めるもののほか、業務の実施に必要な事項については、マニュアル等に定めるものとする。
                </p>
            </div>

            <div class="revision-date">
                <p>制定日&emsp;令和5年1月17日</p>
                <p>改正日&emsp;令和5年11月29日</p>
            </div>

        </div>
        <div style="clear: both"></div>
    </div>

    <!-- 4ページ目 -->
    <div class='page font-sm'>
        <div class="page-header">（様式１別紙②）</div>
        <table style="width: 100%">
            <tr>
                <td class="mark1">別紙②</td>
                <td>
                    <div class="page-title">事業者登録規約（子育てエコホーム支援事業）</div>
                </td>
                <td class="mark2">提出不要</td>
            </tr>
        </table>
        <p class="font-sm">&emsp;子育てエコホーム支援事業（以下、「本事業」という。）は、子育てエコホーム支援事業補助金交付要綱（令和５年12●月26●日国住生第254●号。以下、「交付要綱」という。）に定める要件に合致する注文住宅の新築、新築分譲住宅の購入（以下、併せて「新築住宅の建築・購入」という。）及びリフォーム（以下、「リフォーム」という。また新築住宅の建築・購入と合わせて「補助事業」という。）に対する補助金（以下、「本補助金」という。）の交付を行う事業です。</p>
        <div class="page-partition">
            <div class="clause">
                <p class="clause-title">第１条　エコホーム支援事業者</p>
                <ol class="custom-list font-sm">
                    <li><span>１．</span>エコホーム支援事業者とは、新築住宅の建築事業者及び販売事業者（宅地建物取引業者に限る。）並びにリフォームの工事施工者で、次条に定める共同事業者と補助事業を共同して行う事業者として子育てエコホーム支援事業事務局（以下、「本事務局」という。）に登録された者をいいます。ただし、当該登録により、本事務局及び国（以下、「本事務局等」という。）は、エコホーム支援事業者として登録された事業者に対して何らその優良性を認定するものではありません。</li>
                    <li><span>２．</span>エコホーム支援事業者としての登録を希望する者は、事業者登録規約（住宅省エネ2024キャンペーン）（以下、「本キャンペーンの登録規約」という。）に基づき住宅省エネ支援事業者（以下、「住宅省エネ支援事業者」という。）としての登録を申請する際に、又は住宅省エネ支援事業者としての登録を受けた後に、本事業への参加を申告することによって、登録を受けるものとします。</li>
                    <li><span>３．</span>本事業者登録規約（子育てエコホーム支援事業）（以下、「本規約」という。）に基づき、エコホーム支援事業者として登録されるためには、以下①及び②の要件（以下、「参加要件」という。）が満たされていなければなりません。登録後に参加要件のいずれかが満たされなくなった場合には、当該登録事業者は、直ちに本事務局にその旨を通知しなければならないものとします。本事務局は、当該通知を受けた場合、又は参加要件のいずれかを満たさなくなったことが明らかな場合は、速やかにその登録を停止（本規約第10条第２項に規定）するものとします。
                        <ol class="custom-list font-sm">
                            <li><span>&#9312;</span>本キャンペーンの登録規約に基づき住宅省エネ支援事業者として登録を受け、かつ当該登録の要件を充足しており、当該登録を抹消されていない者であること。</li>
                            <li><span>&#9313;</span>過去３カ年度内に国土交通省住宅局所管事業補助金（以下、「住宅局補助金」という。）において、以下のいずれにも該当しない者であること。
                                <ol class="custom-list">
                                    <li><span>(a)</span>交付決定の取り消しに相当する理由で補助金の返還を求められたことのある者</li>
                                    <li><span>(b)</span>当該住宅局補助金の規約その他これに類するものに反して又は怠慢、虚偽の申告若しくはその他の不正な手段により、住宅局補助金の交付を受け、又は受けようとするなどの行為（以下、「不適切な行為」という。）を行った者（団体を含む。本号において以下同じ。）</li>
                               </ol>
                            </li>
                        </ol>
                    </li>
                    <li><span>４．</span>前項②の規定にかかわらず、当該住宅局補助金の事務事業者及び国が、以下のいずれかに該当すると判断し、本事業への参加について制限しない旨の通知を行った者を除く。
                        <ol class="custom-list font-sm">
                            <li><span>(ⅰ)</span>前項②（a）の補助金の返還が、補助事業の全部又は一部の取りやめに伴って求められたものであった場合</li>
                            <li><span>(ⅱ)</span>前項②（a）の補助金の返還が、第三者の重過失、その他自らの責に帰すべき事由によらずに求められたものであった場合</li>
                            <li><span>(ⅲ)</span>前項②（b）に該当する者が、意図せず又は本事業に関わる従業員及びその取引先等（以下、「従業員等」という。）が独自の判断で行った不適切な行為を自ら申告した場合</li>
                            <li><span>(ⅳ)</span>不適切な行為に情状酌量の余地があり、十分な再発防止措置が講じられた場合</li>
                        </ol>
                    </li>
                </ol>
            </div>
            <div class="clause">
                <p class="clause-title">第２条 共同事業者</p>
                <p class="clause-explanation">
                    &emsp;共同事業者とは、本事業の利用を希望する消費者等（以下、単に「消費者等」という。）のうち、エコホーム支援事業者と工事請負契約又は不動産売買契約を締結し、共同して補助事業を行う住宅所有者等をいいます。なお、当該契約の当事者のみで本事業の世帯に関する要件を満たすことができない場合、当該要件を満たすために必要な同居する配偶者等を含みます。
                </p>
            </div>
            <div class="clause">
                <p class="clause-title">第３条 エコホーム支援事業者の義務</p>
                <p class="clause-explanation">
                    &emsp;エコホーム支援事業者は、以下①～⑨に掲げる事項全てについてその責任と義務を有します。
                </p>

                <ol class="custom-list font-sm">
                    <li><span>&#9312;</span>エコホーム支援事業補助金交付規程（以下、「交付規程」という。）、本事務局が作成するマニュアル及び規約（本規約を含む。）並びに本事務局等が行った告知・発表等（以下、「マニュアル等」という。）に定める事項を遵守すること</li>
                </ol>
            </div>
        </div>
        <div class="page-separater">&emsp;</div>
        <div class="page-partition">

            <div class="clause">
                <p class="clause-explanation"></p>
                <ol class="custom-list font-sm">
                    <li><span>&#9313;</span>消費者等に対して、本事業とリフォーム工事による省エネ効果について正しい説明を行うこと</li>
                    <li><span>&#9314;</span>共同事業者から依頼を受けた本補助金の交付申請手続きを遅滞なく、また適正に実施すること。また、当該手続きの進捗に関する共同事業者からの問い合わせに誠実に対応すること </li>
                    <li><span>&#9315;</span>本事務局が本事業のホームページやメール等を通じて行う連絡事項を確認すること</li>
                    <li><span>&#9316;</span>本事務局から交付された本補助金について、共同事業者との取り決めに基づき、速やかに還元すること</li>
                    <li><span>&#9317;</span>本事務局等が、本事業の適正かつ円滑な運営のために行う調査（補助対象となる住宅への現地確認や事業所への立ち入り検査を含む）に応じること</li>
                    <li><span>&#9318;</span>事務局等が、本事業の効果検証のために行う事業（共同事業者へのアンケートを含む）に協力すること</li>
                    <li><span>&#9319;</span>共同事業者に対して前2号の協力を依頼すること</li>
                    <li><span>&#9320;</span>破産手続開始、民事再生手続開始、会社更生手続開始、特別清算開始の申立てがなされ、又は自らこれらの申立て若しくは特定調停の申立てをしたときは、直ちに本事務局に通知するものとし、本事務局の要請に従って、当該エコホーム支援事業者が交付申請を行い、又は交付決定を受けた本補助金の交付事務について、本事務局に必要な協力を行うこと</li>
                </ol>
            </div>
            <div class="clause">
                <p class="clause-title">第４条 交付申請の手続き</p>
                <p class="clause-explanation">
                    &emsp;本補助金の交付申請（交付申請の予約を含む。）にあたり、エコホーム支援事業者と共同事業者は交付規程に定める「共同事業実施規約」（以下、「共同事業実施規約」という。）を締結するとともに、共同事業者はエコホーム支援事業者に対して本補助金の交付申請を委託します。委託を請けたエコホーム支援事業者は、遅滞なく本事務局が提供する本補助金の交付申請のためのWebシステム（以下、「住宅省エネポータル」という。）により交付申請を提出しなければなりません。本事務局は、提出された交付申請書類に不備又は不足を発見した場合、住宅省エネポータルを通じた通知又は電話により確認を行うことがあります。エコホーム支援事業者は本事務局からの確認について、指定される期限までに回答しなければなりません。</p>
            </div>

            <div class="clause">
                <p class="clause-title">第５条 本補助金の還元方法</p>
                <p class="clause-explanation">
                    &emsp;エコホーム支援事業者が、前条の交付申請により本補助金の交付を受けたとき、エコホーム支援事業者は受領した当該補助金相当額について、直ちに以下の①又は②のいずれかの方法により共同事業者に還元しなければなりません。還元方法については、共同事業実施規約の締結時に双方で確認する必要があります。ただし、②については補助金が交付された時点において、契約に係る代金が精算済みであり、共同事業者のエコホーム支援事業者に対する債務に充当できないことが見込まれる場合に限ります。 
                    <ol class="custom-list font-sm">
                        <li><span>&#9312;</span>契約に係る共同事業者のエコホーム支援事業者に対する債務（最終支払いに限る。） に充当する方法</li>
                        <li><span>&#9313;</span>現金で支払う方法</li>
                    </ol>
                </p>
            </div>
            <div class="clause">
                <p class="clause-title">第６条 完了報告の提出</p>
                <p class="clause-explanation">
                    &emsp;補助事業が新築住宅の建築・購入に該当する場合、本補助金の交付後であっても、エコホーム支援事業者は本補助金の対象である新築住宅を引渡し及び共同事業者の入居が完了したことを、本事務局が定める方法により、本事務局が定める期限までに本事務局に対して報告（以下、「完了報告」という。）を行わなければなりません。本事務局が定める期限までに完了報告の提出がない場合、又は提出された完了報告により補助事業の要件を満たさないことが確認された場合、本事務局は交付規程第15の規定に基づき当該補助事業の交付決定を取り消すことがあります。
                </p>
            </div>
        </div>

    </div>

    <!-- 5ページ目 -->
    <div class='page font-sm'>
        <div class="page-header">（様式１別紙②）</div>
        <div class="page-partition">

            <div class="clause">
                <p class="clause-explanation">
                    <ol class="custom-list font-sm">
                        <li><span>&#9312;</span>本事業の予算には限りがあり、令和６年12月末以前であっても、交付申請（交付申請の予約を含む。以下本条において同じ）が予算上限に達した段階で受付を終了すること。よって、可能な限り早い時期に本補助金の交付申請を提出することが望ましいこと</li>
                        <li><span>&#9313;</span>本補助金の交付額は、交付申請を行った額から減額されることがあること</li>
                        <li><span>&#9314;</span>補助金の還元方法が第５条①である場合、エコホーム支援事業者は本補助金の交付から還元までの期間について本補助金を保持しなければならないこと</li>
                        <li><span>&#9315;</span>共同事業者の協力が得られず完了報告の提出ができない等の場合であっても、交付規程第15に基づく本補助金の返還は、原則、エコホーム支援事業者が行わなければならないこと</li>
                        <li><span>&#9316;</span>本規約第９条③に該当する疑いがある場合、本事務局は当該他の補助金の所管先に対して、当該交付申請の情報を提供し、合同して調査及び確認を行うことがあること</li>
                        <li><span>&#9316;</span>本規約第10条に定める処分を受けたエコホーム支援事業者は、停止から ３カ年度内に実施する住宅局補助金及び国が行う他の補助金事業 に対する参加や交付申請が制限される場合があること。</li>
                    </ol>
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第８条 従業員等への周知</p>
                <p class="clause-explanation">
                    &emsp;エコホーム支援事業者は、従業員等に対して、エコホーム支援事業者の業務、義務、留意点、禁止事項等について、周知と教育を徹底しなければなりません。
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第９条  禁止事項</p>
                <p class="clause-explanation">
                    &emsp;エコホーム支援事業者（エコホーム支援事業者になろうとする者を含む。）及びその従業員等は、以下①～⑧に掲げる行為を行ってはなりません。
                    <ol class="custom-list font-sm">
                        <li><span>&#9312;</span>不正、虚偽によりエコホーム支援事業者の登録を受け、又は登録を申請すること</li>
                        <li><span>&#9313;</span>自らの不正、虚偽により、又は共同事業者の不正、虚偽を知りながら本補助金の交付を受け、又は本補助金の交付申請（交付申請の予約を含む。以下本条において同じ。）をすること</li>
                        <li><span>&#9314;</span>同一の補助事業に対して、国庫補助を財源とする他の補助金と併用して交付申請を行い、重複して補助を受けること</li>
                        <li><span>&#9315;</span>消費者等に対して、本事業の制度及び本事務局等の名称、商標、又は称呼等を用いて、当該エコホーム支援事業者が取り扱う補助事業の優良性または有利性を誤認させるおそれのある言動、表示及び広告をすること</li>
                        <li><span>&#9316;</span>本事務局等に対する債権を、第三者に譲渡し、若しくは移転し、又は担保に供すること</li>
                        <li><span>&#9317;</span>本事務局等に対する一切の権利及び義務並びに本規約に基づき締結される本事務局との間の契約上の地位について、本事務局の同意なしに第三者に対して譲渡し若しくは移転し、又は担保に供すること</li>
                        <li><span>&#9318;</span>本事務局等及び消費者等を誹謗中傷し、又は名誉若しくは信用を傷つける言動をすること</li>
                        <li><span>&#9319;</span>その他、本事務局等が本事業の趣旨に反すると判断する行為、及び本事務局等との信頼関係を損なう一切の行為</li>
                    </ol>
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第１０条  不適切な行為に対する処分 </p>
                <p class="clause-explanation">
                    <ol class="custom-list font-sm">
                        <li><span>１．</span>本事務局は、不適切な行為を伴う補助事業に対して、その交付申請（交付申請の予約を含む。本条において同じ。）のを却下し、既に交付決定を行った場合にあっては、交付規程第15に基づき、その交付決定を取り消します。</li>
                        <li><span>２．</span>本事務局は、本事業において不適切な行為を行ったエコホーム支援事業者について、その地位を停止することがあります。 </li>
                        <li><span>３．</span>本事務局は、事業者登録規約（住宅省エネ2024キャンペーン）第３条第２項に該当する住宅省エネ支援事業者からの本事業への参加申告を拒否又は却下し、又はその地位を停止することがあります。</li>
                        <li><span>４．</span>本事務局は、エコホーム支援事業者の地位の停止に伴い、当該エコホーム支援事業者に対して、以下①～⑥に定める処分の全部又は一部を科す ことができます。
                            <ol class="custom-list font-sm">
                                <li><span>&#9312;</span>エコホーム支援事業者としての公表の停止</li>
                                <li><span>&#9313;</span>不適切な行為が行われた事実、及び国及び本事務局による当該エコホーム支援事業者に対する処分の公表</li>
                                <li><span>&#9314;</span>他の構成事業の所管庁及び事務事業者に対する処分の通達</li>
                                <li><span>&#9315;</span>本事業の交付申請（不適切な行為があった補助事業以外の補助事業に係る交付申請を含む。）の全部又は一部に対する本補助金の不交付</li>
                                <li><span>&#9316;</span>本事業の交付決定（不適切な行為があった補助事業以外の補助事業に係る交付決定を含む。）の全部又は一部の取り消し</li>
                                <li><span>&#9317;</span>交付した本補助金の全部又は一部の返還命令</li>
                            </ol>
                        </li>
                    </ol>
                </p>
            </div>
        </div>
        <div class="page-separater">&emsp;</div>
        <div class="page-partition">

            <div class="clause">
                <p class="clause-title">第１１条  補助金の返還等</p>
                <p class="clause-explanation">
                    <ol class="custom-list font-sm">
                        <li><span>１．</span>本事務局は、交付決定を取り消され、又は交付規程第17に定める取得財産の処分 に反した補助事業に対して、その補助金の全部若しくは一部について交付せず、その交付を停止し、又は交付した本補助金の全部若しくは一部の返還を命じることがあります。</li>
                        <li><span>２．</span>前項による返還命令を受けたエコホーム支援事業者は、速やかに本補助金の全部又は一部を本事務局に返還しなければなりません。なお、本規定は、本事務局が、エコホーム支援事業者から補助金の還元を受けた共同事業者が、当該補助金を返還することを妨げるものではありません。 </li>
                        <li><span>３．</span>本事務局は、第１項の補助金の返還にあたっては、交付規程第15-条第３に定める「加算金」 の支払いを求めることができ、その期限を指定するものとします。</li>
                    </ol>
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第１２条 本規約の変更等</p>
                <p class="clause-explanation">
                    &emsp;本事務局が本規約を変更するときは、あらかじめ変更の7日前までに、本事業のホームページ及び住宅省エネポータルにより、本規約の変更をする旨、変更内容及び変更の効力発生時期を通知するものとします。ただし、上記にかかわらず、当該変更がエコホーム支援事業者一般の利益に適合する場合、又は緊急の必要がある場合その他やむを得ない事情がある場合には、周知期間を短縮し、又は変更の効力発生後速やかに上記の方法において周知することができるものとします。変更後の本規約については、本事務局が定めた効力発生時期より、効力を生じるものとします。
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第１３条  免責</p>
                <p class="clause-explanation">
                    <ol class="custom-list font-sm">
                        <li><span>１．</span>本事務局等は、本事業に関して、エコホーム支援事業者（エコホーム支援事業者になろうとする者を含む。以下本条において同じ。）に生じたあらゆる損失等について、一切の責任及び義務を負わないものとします。ただし、本事務局等の故意又は重過失によるものである場合には、本事務局等は、当該エコホーム支援事業者に直接かつ現実に生じた損害に限り、責任を負うものとします。</li>
                        <li><span>２．</span>本事務局等は、本事業に関して、エコホーム支援事業者と、第三者との間に生じた紛争やあらゆる損失等について、一切の責任及び義務を負わないものとします。</li>
                    </ol>
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第１４条  本事務局による個人情報の利用</p>
                <p class="clause-explanation">
                    &emsp;本事業において本事務局が取得した個人情報の利用、保存及び管理には、本事業のプライバシーポリシーが適用されます。エコホーム支援事業者は、共同事業者が本事務局に提供する共同事業者の個人情報について、本事業のプライバシーポリシーに従って利用、保管及び管理等されることについて、共同事業者の同意を得るものとします。
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第１５条  エコホーム支援事業者の秘密保持義務及び個人情報保護義務</p>
                <p class="clause-explanation">
                    <ol class="custom-list font-sm">
                        <li><span>１．</span>エコホーム支援事業者（エコホーム支援事業者になろうとする者を含む。以下本条において同じ。）は、本事業に関連して、本事務局等から開示される技術上又は営業上の情報（以下、「秘密情報」という。）を、第三者に漏洩、開示又は公表してはならないものとします。ただし、本事務局の書面による事前の同意を得た場合はこの限りではありません。</li>
                        <li><span>２．</span>エコホーム支援事業者は、本事業上の義務を履行する目的に限り、秘密情報を複製、加工、及び利用することができます。</li>
                        <li><span>３．</span>エコホーム支援事業者は、本事務局から指示を受けた場合、当該指示に従い速やかに、秘密情報（秘密情報を複製及び加工したものを含む。）を返却、廃棄又は消去するものとします。当該返却、廃棄、又は消去に要する費用は、エコホーム支援事業者が負担するものとします。</li>
                        <li><span>４．</span>エコホーム支援事業者は、秘密情報及び個人情報の安全な管理のために、組織的、人的、物理的及び技術的な安全措置を講じなければならないものとします。</li>
                        <li><span>５．</span>本事務局が要求する場合、エコホーム支援事業者は、秘密情報及び個人情報の管理状態を本事務局に報告するものとします。また、本事務局は、エコホーム支援事業者に対し、事前の書面による通知により、本事務局がエコホーム支援事業者の業務の適正を確認するために必要と認める範囲内において、エコホーム支援事業者の事業所その他秘密情報及び個人情報の管理場所又は使用場所に立入り、関連する書類等の提出を求める等秘密情報及び個人情報の管理等の情報セキュリティ監査を行うことができるものとします。</li>
                    </ol>
                </p>
            </div>

        </div>
        <div style="clear: both"></div>

    </div>

    <!-- 6ページ目 -->
    <div class='page font-sm'>
        <div class="page-header">（様式１別紙②）</div>
        <div class="page-partition">

            <div class="clause">
                <p class="clause-explanation">
                    <ol class="custom-list font-sm">
                        <li><span>６．</span>本事務局及びエコホーム支援事業者は、秘密情報又は個人情報の漏洩等の事故が発生し、又は発生したおそれのあることを知った場合、当該事故の発生原因の如何にかかわらず、直ちにその旨を相手方に報告し、本事務局とエコホーム支援事業者が協議の上、適切な措置を講じるものとします。</li>
                        <li><span>７．</span>本事務局及びエコホーム支援事業者は、前項の事故について、事故を引き起こした責任がいずれにあるかを協議の上、確定するものとします。</li>
                    </ol>
                </p>
            </div>
        </div>
        <div class="page-separater">&emsp;</div>
        <div class="page-partition">

            <div class="clause">
                <p class="clause-title">第１６条  専属的合意管轄裁判所</p>
                <p class="clause-explanation">
                    &emsp;本事業に関して、本事務局とエコホーム支援事業者又はエコホーム支援事業者になろうとする者との間に生じた紛争については、東京簡易裁判所又は東京地方裁判所を第一審の専属的合意管轄裁判所とします。
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第１７条　雑則</p>
                <p class="clause-explanation">
                    &emsp;本規約に定めるもののほか、業務の実施に必要な事項については、マニュアル等に定めるものとします。
                </p>
            </div>

            <div class="revision-date">
                <p>制定日&emsp;令和5年1月17日</p>
            </div>
        </div>
    </div>

    <!-- 7ページ目 -->
    <div class='page font-sm'>
        <div class="page-header">（様式１別紙③）</div>
        <table style="width: 100%">
            <tr>
                <td class="mark1">別紙③</td>
                <td>
                    <div class="page-title">事業者登録規約（先進的窓リノベ2024事業）</div>
                </td>
                <td class="mark2">提出不要</td>
            </tr>
        </table>

        <p class="font-sm">
            先進的窓リノベ2024事業（以下、「本事業」という。）は、脱炭素成長型経済構造移行推進対策費補助金（断熱窓への改修促進等による住宅の省エネ・省CO2加速化支援事業）交付要綱（令和４年12月２日環地温発第2212024号。以下、「交付要綱」という。）に基づき、先進的窓リノベ2024事業事務局（以下、「本事務局」という。）が登録し公表する窓、窓ガラス又はドア（以下、「対象製品」という。）の導入を行うリフォーム工事（以下、「補助事業」という。）に対する補助金（以下、「本補助金」という。）の交付を行う事業です。
        </p>

        <div class="page-partition">

            <div class="clause">
                <p class="clause-title">第１条  窓リノベ事業者</p>
                <p class="clause-explanation">
                    <ol class="custom-list font-sm">
                        <li><span>１．</span>窓リノベ事業者とは、次条に定める共同事業者と補助事業を共同して行う事業者として本事務局に登録された者をいいます。ただし、当該登録により、本事務局及び国（以下、「本事務局等」という。）は、窓リノベ事業者として登録された事業者に対して何らその優良性を認定するものではありません。</li>
                        <li><span>２．</span>窓リノベ事業者としての登録を希望する者は、事業者登録規約（住宅省エネ2024キャンペーン）（以下、「本キャンペーンの登録規約」という。）に基づき住宅省エネ支援事業者（以下、「住宅省エネ支援事業者」という。）としての登録を申請する際に、又は住宅省エネ支援事業者としての登録を受けた後に、本事業への参加を申告することによって、登録を受けるものとします。</li>
                        <li><span>３．</span>
                            本事業者登録規約（先進的窓リノベ2024事業）（以下、「本規約」という。）に基づき、窓リノベ事業者として登録されるためには、以下①及び②の要件（以下、「参加要件」という。）が満たされていなければなりません。登録後に参加要件のいずれかが満たされなくなった場合には、当該登録事業者は、直ちに本事務局にその旨を通知しなければならないものとします。本事務局は、当該通知を受けた場合、又は参加要件のいずれかを満たさなくなったことが明らかな場合は、速やかにその登録を停止（本規約第９条第２項に規定）するものとします。
                            <ol class="custom-list font-sm">
                                <li><span>&#9312;</span>本キャンペーンの登録規約に基づき住宅省エネ支援事業者として登録を受け、かつ当該登録の要件を充足しており、当該登録を抹消されていない者であること。</li>
                                <li><span>&#9313;</span>過去３カ年度内に環境省地球環境局所管事業補助金（以下、「環境局補助金」という。）において、以下のいずれにも該当しない者であること。
                                    <ol class="custom-list">
                                        <li><span>(a)</span>交付決定の取り消しに相当する理由で補助金の返還を求められたことのある者</li>
                                        <li><span>(b)</span>当該環境局補助金の規約その他これに類するものに反して、又は怠慢、虚偽の申告若しくはその他の不正な手段により、環境局補助金の交付を受け、又は受けようとするなどの行為（以下、「不適切な行為」という。）を行った者（団体を含む。本号において以下同じ。）</li>
                                    </ol>
                                </li>
                            </ol>
                        </li>
                        <li><span>４．</span>前項②の規定にかかわらず、当該環境局補助金の事務事業者及び国が以下のいずれかに該当すると判断し、本事業への参加について制限しない旨の通知を行った者を除く。
                            <ol class="custom-list">
                                <li><span>(ⅰ)</span>前項②(a)の補助金の返還が、補助事業の全部又は一部の取りやめに伴って求められたものであった場合</li>
                                <li><span>(ⅱ)</span>前項②(a)の補助金の返還が、第三者の重過失、その他自らの責に帰すべき事由によらずに求められたものであった場合</li>
                                <li><span>(ⅲ)</span>前項②(b)に該当する者が、意図せず又は本事業に関わる従業員及びその取引先等（以下、「従業員等」という。）が独自の判断で行った不適切な行為を自ら申告した場合</li>
                                <li><span>(ⅳ)</span>不適切な行為に情状酌量の余地があり、十分な再発防止措置が講じられた場合</li>
                            </ol>
                        </li>
                    </ol>
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第２条  共同事業者</p>
                <p class="clause-explanation">
                    &emsp;共同事業者とは、本事業の利用を希望する消費者等（以下、単に「消費者等」という。）のうち、窓リノベ事業者と工事請負契約を締結し、共同して補助事業を行う住宅所有者等をいいます。
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第３条  窓リノベ事業者の義務</p>
                <p class="clause-explanation">
                    &emsp;窓リノベ事業者は、以下①～⑨に掲げる事項全てについてその責任と義務を有します。
                    <ol class="custom-list font-sm">
                        <li><span>&#9312;</span>脱炭素成長型経済構造移行推進対策費補助金（断熱窓への改修促進等による住宅の省エネ・省CO2加速化支援事業）補助金交付規程（以下、「交付規程」という。）、本事務局が作成するマニュアル及び規約（本規約を含む。）並びに本事務局等が行った告知・発表等（以下、「マニュアル等」という。）に定める事項を遵守すること</li>
                        <li><span>&#9313;</span>消費者等に対して、本事業とリフォーム工事による省エネ効果について正しい説明を行うこと</li>
                    </ol>
                </p>
            </div>

        </div>
        <div class="page-separater">&emsp;</div>
        <div class="page-partition">

            <div class="clause">
                <p class="clause-explanation">
                    <ol class="custom-list font-sm">
                        <li><span>&#9314;</span>共同事業者から依頼を受けた本補助金の交付申請手続きを遅滞なく、また適正に実施すること。また、当該手続きの進捗に関する共同事業者からの問い合わせに誠実に対応すること </li>
                        <li><span>&#9315;</span>本事務局が本事業のホームページやメール等を通じて行う連絡事項を確認すること</li>
                        <li><span>&#9316;</span>本事務局から交付された本補助金について、共同事業者との取り決めに基づき、速やかに還元すること</li>
                        <li><span>&#9317;</span>本事務局等が、本事業の適正かつ円滑な運営のために行う調査（補助対象となる住宅への現地確認や事業所への立ち入り検査を含む。）に応じること</li>
                        <li><span>&#9318;</span>事務局等が、本事業の効果検証のために行う事業（共同事業者へのアンケートを含む。）に協力すること</li>
                        <li><span>&#9319;</span>共同事業者に対して前2号の協力を依頼すること</li>
                        <li><span>&#9320;</span>破産手続開始、民事再生手続開始、会社更生手続開始、特別清算開始の申立てがなされ、又は自らこれらの申立て若しくは特定調停の申立てをしたときは、直ちに本事務局に通知するものとし、本事務局の要請に従って、当該窓リノベ事業者が交付申請を行い、又は交付決定を受けた本補助金の交付事務について、本事務局に必要な協力を行うこと  </li>
                    </ol>
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第４条  交付申請の手続き</p>
                <p class="clause-explanation">
                    &emsp;本補助金の交付申請（交付申請の予約を含む。）にあたり、窓リノベ事業者と共同事業者は交付規程に定める「共同事業実施規約」（以下、「共同事業実施規約」という。）を締結するとともに、共同事業者は窓リノベ事業者に対して本補助金の交付申請を委託します。委託を請けた窓リノベ事業者は、遅滞なく本事務局が提供する本補助金の交付申請のためのWebシステム（以下、「住宅省エネポータル」という。）により交付申請を提出しなければなりません。本事務局は、提出された交付申請書類に不備又は不足を発見した場合、住宅省エネポータルを通じた通知又は電話により確認を行うことがあります。窓リノベ事業者は本事務局からの確認について、指定される期限までに回答しなければなりません。
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第５条 本補助金の還元方法</p>
                <p class="clause-explanation">
                    &emsp;窓リノベ事業者が、前条の交付申請により本補助金の交付を受けたとき、窓リノベ事業者は受領した当該補助金相当額について、直ちに以下の①又は②のいずれかの方法により共同事業者に還元しなければなりません。還元方法については、共同事業実施規約の締結時に双方で確認する必要があります。
                    <ol class="custom-list font-sm">
                        <li><span>&#9312;</span>契約に係る共同事業者の窓リノベ事業者に対する債務に充当する方法</li>
                        <li><span>&#9313;</span>現金で支払う方法</li>
                    </ol>
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第６条 本事業の留意点</p>
                <p class="clause-explanation">
                    &emsp;窓リノベ事業者は、本補助金の交付申請にあたり以下①～⑥の留意点について理解しておかなければなりません。
                    <ol class="custom-list font-sm">
                        <li><span>&#9312;</span>本事業の予算には限りがあり、令和６年12月末以前であっても、交付申請（交付申請の予約を含む。以下本条において同じ）が予算上限に達した段階で受付を終了すること。よって、可能な限り早い時期に本補助金の交付申請を提出することが望ましいこと</li>
                        <li><span>&#9313;</span>本補助金の交付額は、交付申請を行った額から減額されることがあること</li>
                        <li><span>&#9314;</span>補助金の還元方法が第５条①である場合、窓リノベ事業者は本補助金の交付から還元までの期間について本補助金を保持しなければならないこと</li>
                        <li><span>&#9315;</span>交付規程第13条第２項及び第16条第３項に基づく本補助金の返還は、原則、窓リノベ事業者が行わなければならないこと</li>
                        <li><span>&#9316;</span>本規約第８条③に該当する疑いがある場合、本事務局は当該他の補助金の所管先に対して、当該交付申請の情報を提供し、合同して調査及び確認を行うことがあること</li>
                        <li><span>&#9317;</span>本規約第９条に定める処分を受けた窓リノベ事業者は、停止から ３カ年度内に実施する環境局補助金及び国が行う他の補助金事業 に対する参加や交付申請が制限される場合があること。</li>
                    </ol>
                </p>
            </div>

        </div>
        <div style="clear: both"></div>

    </div>

    <!-- 8ページ目 -->
    <div class='page font-sm'>
        <div class="page-header">（様式１別紙③）</div>
        <div class="page-partition">

            <div class="clause">
                <p class="clause-title">第７条 従業員等への周知</p>
                <p class="clause-explanation">
                    &emsp;従業員等に対して、窓リノベ事業者の業務、義務、留意点、禁止事項等について、周知と教育を徹底しなければなりません。
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第８条  禁止事項</p>
                <p class="clause-explanation">
                    &emsp;窓リノベ事業者（窓リノベ事業者になろうとする者を含む。）及びその従業員等は、以下①～⑧に掲げる行為を行ってはなりません。
                    <ol class="custom-list font-sm">
                        <li><span>&#9312;</span>不正、虚偽により窓リノベ事業者の登録を受け、又は登録を申請すること</li>
                        <li><span>&#9313;</span>自らの不正、虚偽により、又は共同事業者の不正、虚偽を知りながら本補助金の交付を受け、又は本補助金の交付申請（交付申請の予約を含む。以下本条において同じ。）をすること</li>
                        <li><span>&#9314;</span>同一の補助事業に対して、国庫補助を財源とする他の補助金と併用して交付申請を行い、重複して補助を受けること</li>
                        <li><span>&#9315;</span>消費者等に対して、本事業の制度及び本事務局等の名称、商標、又は称呼等を用いて、当該窓リノベ事業者が取り扱う補助事業の優良性又は有利性を誤認させるおそれのある言動、表示及び広告をすること</li>
                        <li><span>&#9316;</span>本事務局等に対する債権を、第三者に譲渡し、若しくは移転し、又は担保に供すること</li>
                        <li><span>&#9317;</span>本事務局等に対する一切の権利及び義務並びに本規約に基づき締結される本事務局との間の契約上の地位について、本事務局の同意なしに第三者に対して譲渡し若しくは移転し、又は担保に供すること</li>
                        <li><span>&#9318;</span>本事務局等及び消費者等を誹謗中傷し、又は名誉若しくは信用を傷つける言動をすること</li>
                        <li><span>&#9319;</span>その他、本事務局等が本事業の趣旨に反すると判断する行為、及び本事務局等との信頼関係を損なう一切の行為</li>
                    </ol>
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第９条  不適切な行為に対する処分 </p>
                <p class="clause-explanation">
                    <ol class="custom-list font-sm">
                        <li><span>１．</span>本事務局は、不適切な行為を伴う補助事業に対して、その交付申請（交付申請の予約を含む。本条において同じ。）を却下し、既に交付決定を行った場合にあっては、交付規程第13条に基づき、その交付決定を取り消します。</li>
                        <li><span>２．</span>本事務局は、本事業において不適切な行為を行った窓リノベ事業者について、その地位を停止することがあります。 </li>
                        <li><span>３．</span>本事務局は、事業者登録規約（住宅省エネ2024キャンペーン）第３条第２項に該当する住宅省エネ支援事業者からの本事業への参加申告を拒否又は却下し、又はその地位を停止することがあります。</li>
                        <li><span>４．</span>本事務局は、窓リノベ事業者の地位の停止に伴い、当該窓リノベ事業者に対して、以下①～⑥に定める処分の全部又は一部を科す ことができるものとします。
                            <ol class="custom-list font-sm">
                                <li><span>&#9312;</span>窓リノベ事業者としての公表の停止</li>
                                <li><span>&#9313;</span>不適切な行為が行われた事実、及び国及び本事務局による当該窓リノベ事業者に対する処分の公表</li>
                                <li><span>&#9314;</span>他の構成事業の所管庁及び事務事業者に対する処分の通達</li>
                                <li><span>&#9315;</span>本事業の交付申請（不適切な行為があった補助事業以外の補助事業に係る交付申請を含む。）の全部又は一部に対する本補助金の不交付</li>
                                <li><span>&#9316;</span>本事業の交付決定（不適切な行為があった補助事業以外の補助事業に係る交付決定を含む。）の全部又は一部の取り消し</li>
                                <li><span>&#9317;</span>交付した本補助金の全部又は一部の返還命令</li>
                            </ol>
                        </li>
                    </ol>
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第１０条 補助金の返還等</p>
                <p class="clause-explanation">
                    <ol class="custom-list font-sm">
                        <li><span>１．</span>本事務局は、交付決定を取り消され、又は交付規程第16条に定める取得財産の処分 に反した補助事業に対して、その補助金の全部若しくは一部について交付せず、その交付を停止し、又は交付した本補助金の全部若しくは一部の返還を命じることがあります。</li>
                        <li><span>２．</span>前項による返還命令を受けた窓リノベ事業者は、速やかに本補助金の全部又は一部を本事務局に返還しなければなりません。なお、本規定は、本事務局が、窓リノベ事業者から補助金の還元を受けた共同事業者が、当該補助金を返還することを妨げるものではありません。</li>
                        <li><span>３．</span>本事務局は、第１項の補助金の返還にあたっては、交付規程第14条に定める「加算金」 の支払いを求めることができ、その期限を指定するものとします。なお、当該期限までに返還されない補助金については、交付規程の第15条が定める「延滞金」 の支払いを求めることができます。</li>
                    </ol>
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第１１条 本規約の変更等</p>
                <p class="clause-explanation">
                    &emsp;本事務局が本規約を変更するときは、あらかじめ変更の7日前までに、本事業のホームページ及び住宅省エネポータルにより、本規約の変更をする旨、変更内容及び変更の効力発生時期を通知するものとします。
                </p>
            </div>

        </div>
        <div class="page-separater">&emsp;</div>
        <div class="page-partition">

            <div class="clause">
                <p class="clause-explanation">
                    &emsp;ただし、上記にかかわらず、当該変更が窓リノベ事業者一般の利益に適合する場合、又は緊急の必要がある場合その他やむを得ない事情がある場合には、周知期間を短縮し、又は変更の効力発生後速やかに上記の方法において周知することができるものとします。変更後の本規約については、本事務局が定めた効力発生時期より、効力を生じるものとします。
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第１２条  免責</p>
                <p class="clause-explanation">
                    <ol class="custom-list font-sm">
                        <li><span>１．</span>本事務局等は、本事業に関して、窓リノベ事業者（窓リノベ事業者になろうとする者を含む。以下本条において同じ。）に生じたあらゆる損失等について、一切の責任及び義務を負わないものとします。ただし、本事務局等の故意又は重過失によるものである場合には、本事務局等は、当該窓リノベ事業者に直接かつ現実に生じた損害に限り、責任を負うものとします。</li>
                        <li><span>２．</span>本事務局等は、本事業に関して、窓リノベ事業者と、第三者との間に生じた紛争やあらゆる損失等について、一切の責任及び義務を負わないものとします。</li>
                    </ol>
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第１３条   本事務局による個人情報の利用</p>
                <p class="clause-explanation">
                    &emsp;本事業において本事務局が取得した個人情報の利用、保存及び管理には、本事業のプライバシーポリシーが適用されます。窓リノベ事業者は、共同事業者が本事務局に提供する共同事業者の個人情報について、本事業のプライバシーポリシーに従って利用、保管及び管理等されることについて、共同事業者の同意を得るものとします。
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第１４条  窓リノベ事業者の秘密保持義務及び個人情報保護義務</p>
                <p class="clause-explanation">
                    <ol class="custom-list font-sm">
                        <li><span>１．</span>窓リノベ事業者（窓リノベ事業者になろうとする者を含む。以下本条において同じ。）は、本事業に関連して、本事務局等から開示される技術上又は営業上の情報（以下、「秘密情報」という。）を、第三者に漏洩、開示又は公表してはならないものとします。ただし、本事務局の書面による事前の同意を得た場合はこの限りではありません。</li>
                        <li><span>２．</span>窓リノベ事業者は、本事業上の義務を履行する目的に限り、秘密情報を複製、加工、及び利用することができます。</li>
                        <li><span>３．</span>窓リノベ事業者は、本事務局から指示を受けた場合、当該指示に従い速やかに、秘密情報（秘密情報を複製及び加工したものを含む。）を返却、廃棄又は消去するものとします。当該返却、廃棄、又は消去に要する費用は、窓リノベ事業者が負担するものとします。</li>
                        <li><span>４．</span>窓リノベ事業者は、秘密情報及び個人情報の安全な管理のために、組織的、人的、物理的及び技術的な安全措置を講じなければならないものとします。</li>
                        <li><span>５．</span>本事務局が要求する場合、窓リノベ事業者は、秘密情報及び個人情報の管理状態を本事務局に報告するものとします。また、本事務局は、窓リノベ事業者に対し、事前の書面による通知により、本事務局が窓リノベ事業者の業務の適正を確認するために必要と認める範囲内において、窓リノベ事業者の事業所その他秘密情報及び個人情報の管理場所又は使用場所に立入り、関連する書類等の提出を求める等秘密情報及び個人情報の管理等の情報セキュリティ監査を行うことができるものとします。</li>
                        <li><span>６．</span>本事務局及び窓リノベ事業者は、秘密情報又は個人情報の漏洩等の事故が発生し、又は発生したおそれのあることを知った場合、当該事故の発生原因の如何にかかわらず、直ちにその旨を相手方に報告し、本事務局と窓リノベ事業者が協議の上、適切な措置を講じるものとします。</li>
                        <li><span>７．</span>本事務局及び窓リノベ事業者は、前項の事故について、事故を引き起こした責任がいずれにあるかを協議の上、確定するものとします。</li>
                    </ol>
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第１５条  専属的合意管轄裁判所</p>
                <p class="clause-explanation">
                    &emsp;本事業に関して、本事務局と窓リノベ事業者又は窓リノベ事業者になろうとする者との間に生じた紛争については、東京簡易裁判所又は東京地方裁判所を第一審の専属的合意管轄裁判所とします。
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第１６条  雑則</p>
                <p class="clause-explanation">
                    &emsp;本規約に定めるもののほか、業務の実施に必要な事項については、マニュアル等に定めるものとします。
                </p>
            </div>

            <div class="revision-date">
                <p>制定日&emsp;令和5年1月17日</p>
            </div>

        </div>
        <div style="clear: both"></div>

    </div>

    <!-- 9ページ目 -->
    <div class='page font-sm'>
        <div class="page-header">（様式１別紙④）</div>
        <table style="width: 100%">
            <tr>
                <td class="mark1">別紙④</td>
                <td>
                    <div class="page-title">事業者登録規約（給湯省エネ2024事業）</div>
                </td>
                <td class="mark2">提出不要</td>
            </tr>
        </table>

        <p class="font-sm">
            &emsp;給湯省エネ2024事業（以下、「本事業」という。）は、⾼効率給湯器導入促進による家庭部⾨の省エネルギー 推進事業費補助⾦交付要綱（令和４年12月２日20221111財資第11号。以下、「交付要綱」という。）に基づき、給湯省エネ2024事業事務局（以下、「本事務局」という。）が登録し公表する高効率給湯器（以下、「対象製品」という。）の導入を行うリフォーム工事並びにリース利用（以下、「補助事業」という。）に対する補助金（以下、「本補助金」という。）の交付を行う事業です。 
        </p>

        <div class="page-partition">

            <div class="clause">
                <p class="clause-title">第１条  給湯省エネ事業者</p>
                <p class="clause-explanation">
                    <ol class="custom-list font-sm">
                        <li><span>１．</span>給湯省エネ事業者は、次条に定める共同事業者と補助事業を共同して行う事業者として本事務局に登録された者をいいます。ただし、当該登録により、本事務局及び国（以下、「本事務局等」という。）は、給湯省エネ事業者として登録された事業者に対して何らその優良性を認定するものではありません。</li>
                        <li><span>２．</span>給湯省エネ事業者としての登録を希望する者は、事業者登録規約（住宅省エネ2024キャンペーン）（以下、「本キャンペーンの登録規約」という。）に基づき住宅省エネ支援事業者（以下、「住宅省エネ支援事業者」という。）としての登録を申請する際に、又は住宅省エネ支援事業者としての登録を受けた後に、本事業への参加を申告することによって、登録を受けるものとします。</li>
                        <li><span>３．</span>本事業者登録規約（給湯省エネ2024事業）（以下、「本規約」という。）に基づき、給湯省エネ事業者として登録されるためには、以下①及び②の要件（以下、「参加要件」という。）が満たされていなければなりません。登録後に参加要件のいずれかが満たされなくなった場合には、当該登録事業者は、直ちに本事務局にその旨を通知しなければならないものとします。本事務局は、当該通知を受けた場合、又は参加要件のいずれかを満たさなくなったことが明らかな場合は、速やかにその登録を停止（本規約第９条第２項に規定）するものとします。
                            <ol class="custom-list font-sm">
                                <li><span>&#9312;</span>本キャンペーンの登録規約に基づき住宅省エネ支援事業者として登録を受け、かつ当該登録の要件を充足しており、当該登録を抹消されていない者であること。</li>
                                <li><span>&#9313;</span>過去３カ年度内に経済産業省資源エネルギー庁所管事業補助金（以下、「資源エネルギー庁補助金」という。）において、以下のいずれにも該当しない者であること。
                                    <ol class="custom-list font-sm">
                                        <li><span>(a)</span>交付決定の取り消しに相当する理由で補助金の返還を求められたことのある者   </li>
                                        <li><span>(b)</span>当該資源エネルギー庁補助金の規約その他これに類するものに反して、又は怠慢、虚偽の申告若しくはその他の不正な手段により、資源エネルギー庁補助金の交付を受け、又は受けようとするなどの行為（以下、「不適切な行為」という。）を行った者（団体を含む。本号において以下同じ。）。</li>
                                    </ol>
                                </li>
                            </ol>
                        </li>
                        <li><span>４．</span>前項②の規定にかかわらず、当該資源エネルギー庁補助金の事務事業者及び国が、以下のいずれかに該当すると判断し、本事業への参加について制限しない旨の通知を行った者を除く。
                            <ol class="custom-list font-sm">
                                <li><span>(ⅰ)</span>前項②(a)の補助金の返還が、補助事業の全部又は一部の取りやめに伴って求められたものであった場合</li>
                                <li><span>(ⅱ)</span>前項②(a)の補助金の返還が、第三者の重過失、その他自らの責に帰すべき事由によらずに求められたものであった場合</li>
                                <li><span>(ⅲ)</span>前項②(b)に該当する者が、意図せず又は本事業に関わる従業員及びその取引先等（以下、「従業員等」という。）が独自の判断で行った不適切な行為を自ら申告した場合</li>
                                <li><span>(ⅳ)</span>不適切な行為に情状酌量の余地があり、十分な再発防止措置が講じられた場合</li>
                            </ol>
                        </li>
                    </ol>
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第２条  共同事業者</p>
                <p class="clause-explanation">
                    &emsp;共同事業者とは、本事業の利用を希望する消費者等（以下、単に「消費者等」という。）のうち、給湯省エネ事業者と工事請負契約、不動産売買契約又はリース契約を締結し、共同して補助事業を行う住宅所有者等をいいます。
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第３条  給湯省エネ事業者の義務</p>
                <p class="clause-explanation">
                    <ol class="custom-list font-sm">
                        <li><span>&#9312;</span>⾼効率給湯器導入促進による家庭部⾨の省エネルギー 推進事業費補助⾦交付規程（以下、「交付規程」という。）、本事務局が作成するマニュアル及び規約（本規約を含む。）並びに本事務局等が行った告知・発表等（以下、「マニュアル等」という。）に定める事項を遵守すること</li>
                        <li><span>&#9313;</span>消費者等に対して、本事業とリフォーム工事による省エネ効果について正しい説明を行うこと</li>
                        <li><span>&#9314;</span>共同事業者から依頼を受けた本補助金の交付申請手続きを遅滞なく、また適正に実施すること。また、当該手続きの進捗に関する共同事業者からの問い合わせに誠実に対応すること </li>
                    </ol>
                </p>
            </div>
        </div>

        <div class="page-separater">&emsp;</div>
        <div class="page-partition">

            <div class="clause">
                <p class="clause-explanation">
                    <ol class="custom-list font-sm">
                        <li><span>&#9315;</span>本事務局が本事業のホームページやメール等を通じて行う連絡事項を確認すること</li>
                        <li><span>&#9316;</span>本事務局から交付された本補助金について、共同事業者との取り決めに基づき、速やかに還元すること</li>
                        <li><span>&#9317;</span>本事務局等が、本事業の適正かつ円滑な運営のために行う調査（補助対象となる住宅への現地確認や事業所への立ち入り検査を含む。）に応じること</li>
                        <li><span>&#9318;</span>事務局等が、本事業の効果検証のために行う事業（共同事業者へのアンケートを含む。）に協力すること</li>
                        <li><span>&#9319;</span>共同事業者に対して前2号の協力を依頼すること</li>
                        <li><span>&#9320;</span>破産手続開始、民事再生手続開始、会社更生手続開始、特別清算開始の申立てがなされ、又は自らこれらの申立て若しくは特別調停の申立をしたときは、直ちに本事務局に通知するものとし、本事務局の要請に従って、当該給湯省エネ事業者が交付申請を行い、又は交付決定を受けた本補助金の交付事務について、本事務局に必要な協力を行うこと</li>
                    </ol>
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第４条  交付申請の手続き</p>
                <p class="clause-explanation">
                    &emsp;本補助金の交付申請（交付申請の予約を含む。）にあたり、給湯省エネ事業者と共同事業者は交付規程に定める「共同事業実施規約」（以下、「共同事業実施規約」という。）を締結するとともに、共同事業者は給湯省エネ事業者に対して本補助金の交付申請を委託します。委託を請けた給湯省エネ事業者は、遅滞なく本事務局が提供する本補助金の交付申請のためのWebシステム（以下、「住宅省エネポータル」という。）により交付申請を提出しなければなりません。本事務局は、提出された交付申請書類に不備又は不足を発見した場合、住宅省エネポータルを通じた通知又は電話により確認を行うことがあります。給湯省エネ事業者は本事務局からの確認について、指定される期限までに回答しなければなりません。
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第５条 本補助金の還元方法</p>
                <p class="clause-explanation">
                    &emsp;給湯省エネ事業者が、前条の交付申請により本補助金の交付を受けたとき、給湯省エネ事業者は受領した当該補助金相当額について、直ちに以下の①又は②のいずれかの方法により共同事業者に還元しなければなりません。還元方法については、共同事業実施規約の締結時に双方で確認する必要があります。
                    <ol class="custom-list font-sm">
                        <li><span>&#9312;</span>契約に係る共同事業者の給湯省エネ事業者に対する債務に充当する方法</li>
                        <li><span>&#9313;</span>現金で支払う方法</li>
                    </ol>
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第６条 本事業の留意点</p>
                <p class="clause-explanation">
                    &emsp;給湯省エネ事業者は、本補助金の交付申請にあたり以下①～⑥の留意点について理解しておかなければなりません。
                    <ol class="custom-list font-sm">
                        <li><span>&#9312;</span>本事業の予算には限りがあり、令和６年12月末以前であっても、交付申請（交付申請の予約を含む。以下本条において同じ）が予算上限に達した段階で受付を終了すること。よって、可能な限り早い時期に本補助金の交付申請を提出することが望ましいこと</li>
                        <li><span>&#9313;</span>本補助金の交付額は、交付申請を行った額から減額されることがあること</li>
                        <li><span>&#9314;</span>補助金の還元方法が第５条①である場合、給湯省エネ事業者は本補助金の交付から還元までの期間について本補助金を保持しなければならないこと</li>
                        <li><span>&#9315;</span>交付規程第●に基づく本補助金の返還は、原則、給湯省エネ事業者が行わなければならないこと</li>
                        <li><span>&#9316;</span>本規約第８条③に該当する疑いがある場合、本事務局は当該他の補助金の所管先に対して、当該交付申請の情報を提供し、合同して調査及び確認を行うことがあること</li>
                        <li><span>&#9317;</span>本規約第９条に定める処分を受けた給湯省エネ事業者は、停止から ３カ年度内に実施する資源エネルギー庁補助金及び国が行う他の補助金事業 に対する参加や交付申請が制限される場合があること。</li>
                    </ol>
                </p>
            </div>

        </div>
        <div style="clear: both"></div>

    </div>

    <!-- 10ページ目 -->
    <div class='page font-sm'>
        <div class="page-header">（様式１別紙④）</div>
        <div class="page-partition">

            <div class="clause">
                <p class="clause-title">第７条 従業員等への周知</p>
                <p class="clause-explanation">
                    &emsp;従業員等に対して、給湯省エネ事業者の業務、義務、留意点、禁止事項等について、周知と教育を徹底しなければなりません。
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第８条  禁止事項</p>
                <p class="clause-explanation">
                    &emsp;給湯省エネ事業者（給湯省エネ事業者になろうとする者を含む。）及びその従業員等は、以下①～⑧に掲げる行為を行ってはなりません。
                    <ol class="custom-list font-sm">
                        <li><span>&#9312;</span>不正、虚偽により給湯省エネ事業者の登録を受け、又は登録を申請すること</li>
                        <li><span>&#9313;</span>自らの不正、虚偽により、又は共同事業者の不正、虚偽を知りながら本補助金の交付を受け、又は本補助金の交付申請（交付申請の予約を含む。以下本条において同じ。）をすること</li>
                        <li><span>&#9314;</span>同一の補助事業に対して、国庫補助を財源とする他の補助金と併用して交付申請を行い、重複して補助を受けること</li>
                        <li><span>&#9315;</span>消費者等に対して、本事業の制度及び本事務局等の名称、商標、又は称呼等を用いて、当該給湯省エネ事業者が取り扱う補助事業の優良性又は有利性を誤認させるおそれのある言動、表示及び広告をすること</li>
                        <li><span>&#9316;</span>本事務局等に対する債権を、第三者に譲渡し、若しくは移転し、又は担保に供すること</li>
                        <li><span>&#9317;</span>本事務局等に対する一切の権利及び義務並びに本規約に基づき締結される本事務局との間の契約上の地位について、本事務局の同意なしに第三者に対して譲渡し若しくは移転し、又は担保に供すること</li>
                        <li><span>&#9318;</span>本事務局等及び消費者等を誹謗中傷し、又は名誉若しくは信用を傷つける言動をすること</li>
                        <li><span>&#9319;</span>その他、本事務局等が本事業の趣旨に反すると判断する行為、及び本事務局等との信頼関係を損なう一切の行為</li>
                    </ol>
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第９条  不適切な行為に対する処分</p>
                <p class="clause-explanation">
                    <ol class="custom-list font-sm">
                        <li><span>１．</span>本事務局は、不適切な行為を伴う補助事業に対して、その交付申請（交付申請の予約を含む。本条において同じ。）を却下し、既に交付決定を行った場合にあっては、交付規程第●に基づき、その交付決定を取り消します。</li>
                        <li><span>２．</span>本事務局は、本事業において不適切な行為を行った給湯省エネ事業者について、その地位を停止することがあります。 </li>
                        <li><span>３．</span>本事務局は、事業者登録規約（住宅省エネ2024キャンペーン）第３条第２項に該当する住宅省エネ支援事業者からの本事業への参加申告を拒否又は却下し、又はその地位を停止することがあります。</li>
                        <li><span>４．</span>給湯省エネ事業者の地位の停止に伴い、当該給湯省エネ事業者に対して、以下①～⑥に定める処分の全部又は一部を科す ことができます。
                            <ol class="custom-list font-sm">
                                <li><span>&#9312;</span>給湯省エネ事業者としての公表の停止</li>
                                <li><span>&#9313;</span>不適切な行為が行われた事実、及び国及び本事務局による当該給湯省エネ事業者に対する処分の公表</li>
                                <li><span>&#9314;</span>他の構成事業の所管庁及び事務事業者に対する処分の通達</li>
                                <li><span>&#9315;</span>本事業の交付申請（不適切な行為があった補助事業以外の補助事業に係る交付申請を含む。）の全部又は一部に対する本補助金の不交付</li>
                                <li><span>&#9316;</span>本事業の交付決定（不適切な行為があった補助事業以外の補助事業に係る交付決定を含む。）の全部又は一部の取り消し</li>
                                <li><span>&#9317;</span>交付した本補助金の全部又は一部の返還命令</li>
                            </li>
                        </li>
                    </ol>
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第１０条　補助金の返還</p>
                <p class="clause-explanation">
                    <ol class="custom-list font-sm">
                        <li><span>１．</span>本事務局は、交付決定を取り消され、又は交付規程第●条に定める取得財産の処分 に反した補助事業に対して、その補助金の全部若しくは一部について交付せず、その交付を停止し、又は交付した本補助金の全部若しくは一部の返還を命じることがあります。</li>
                        <li><span>２．</span>前項による返還命令を受けた給湯省エネ事業者は、速やかに本補助金の全部又は一部を本事務局に返還しなければなりません。なお、本規定は、本事務局が、給湯省エネ事業者から補助金の還元を受けた共同事業者が、当該補助金を返還することを妨げるものではありません。</li>
                        <li><span>３．</span>本事務局は、第１項の補助金の返還にあたっては、交付規程第●条第●に定める「加算金」 の支払いを求めることができ、その期限を指定するものとします。なお、当該期限までに返還されない補助金については、交付規程の第●条が定める「延滞金」 の支払いを求めることができます。</li>
                    </ol>
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第１１条　本規約の変更等</p>
                <p class="clause-explanation">
                    &emsp;本事務局が本規約を変更するときは、あらかじめ変更の7日前までに、本事業のホームページ及び住宅省エネポータルに
                </p>
            </div>

        </div>
        <div class="page-separater">&emsp;</div>

        <div class="page-partition">

            <div class="clause">
                <p class="clause-explanation">
                    より、本規約の変更をする旨、変更内容及び変更の効力発生時期を通知するものとします。ただし、上記にかかわらず、当該変更が給湯省エネ事業者一般の利益に適合する場合、又は緊急の必要がある場合その他やむを得ない事情がある場合には、周知期間を短縮し、又は変更の効力発生後速やかに上記の方法において周知することができるものとします。変更後の本規約については、本事務局が定めた効力発生時期より、効力を生じるものとします。
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第１２条　免責</p>
                <p class="clause-explanation">
                    <ol class="custom-list font-sm">
                        <li><span>１．</span>本事務局等は、本事業に関して、給湯省エネ事業者（給湯省エネ事業者になろうとする者を含む。以下本条において同じ。）に生じたあらゆる損失等について、一切の責任及び義務を負わないものとします。ただし、本事務局等の故意又は重過失によるものである場合には、本事務局等は、当該給湯省エネ事業者に直接かつ現実に生じた損害に限り、責任を負うものとします。</li>
                        <li><span>２．</span>本事務局等は、本事業に関して、給湯省エネ事業者と、第三者との間に生じた紛争やあらゆる損失等について、一切の責任及び義務を負わないものとします。</li>
                    </ol>
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第１３条　本事務局による個人情報の利用</p>
                <p class="clause-explanation">
                    &emsp;本事業において本事務局が取得した個人情報の利用、保存及び管理には、本事業のプライバシーポリシーが適用されます。給湯省エネ事業者は、共同事業者が本事務局に提供する共同事業者の個人情報について、本事業のプライバシーポリシーに従って利用、保管及び管理等されることについて、共同事業者の同意を得るものとします。
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第１４条 給湯省エネ事業者の秘密保持義務及び個人情報保護義務</p>
                <p class="clause-explanation">
                    <ol class="custom-list font-sm">
                        <li><span>１．</span>給湯省エネ事業者（給湯省エネ事業者になろうとする者を含む。以下本条において同じ。）は、本事業に関連して、本事務局等から開示される技術上又は営業上の情報（以下、「秘密情報」という。）を、第三者に漏洩、開示又は公表してはならないものとします。ただし、本事務局の書面による事前の同意を得た場合はこの限りではありません。</li>
                        <li><span>２．</span>給湯省エネ事業者は、本事業上の義務を履行する目的に限り、秘密情報を複製、加工、及び利用することができます。</li>
                        <li><span>３．</span>給湯省エネ事業者は、本事務局から指示を受けた場合、当該指示に従い速やかに、秘密情報（秘密情報を複製及び加工したものを含む。）を返却、廃棄又は消去するものとします。当該返却、廃棄、又は消去に要する費用は、給湯省エネ事業者が負担するものとします。</li>
                        <li><span>４．</span>給湯省エネ事業者は、秘密情報及び個人情報の安全な管理のために、組織的、人的、物理的及び技術的な安全措置を講じなければならないものとします。</li>
                        <li><span>５．</span>本事務局が要求する場合、給湯省エネ事業者は、秘密情報及び個人情報の管理状態を本事務局に報告するものとします。また、本事務局は、給湯省エネ事業者に対し、事前の書面による通知により、本事務局が給湯省エネ事業者の業務の適正を確認するために必要と認める範囲内において、給湯省エネ事業者の事業所その他秘密情報及び個人情報の管理場所又は使用場所に立入り、関連する書類等の提出を求める等秘密情報及び個人情報の管理等の情報セキュリティ監査を行うことができるものとします。</li>
                        <li><span>６．</span>本事務局及び給湯省エネ事業者は、秘密情報又は個人情報の漏洩等の事故が発生し、又は発生したおそれのあることを知った場合、当該事故の発生原因の如何にかかわらず、直ちにその旨を相手方に報告し、本事務局と給湯省エネ事業者が協議の上、適切な措置を講じるものとします。</li>
                        <li><span>７．</span>本事務局及び給湯省エネ事業者は、前項の事故について、事故を引き起こした責任がいずれにあるかを協議の上、確定するものとします。</li>
                    </ol>
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第１５条　専属的合意管轄裁判所</p>
                <p class="clause-explanation">
                    &emsp;本事業に関して、本事務局と給湯省エネ事業者又は給湯省エネ事業者になろうとする者との間に生じた紛争については、東京簡易裁判所又は東京地方裁判所を第一審の専属的合意管轄裁判所とします。
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第１６条　雑則</p>
                <p class="clause-explanation">
                    &emsp;本規約に定めるもののほか、業務の実施に必要な事項については、マニュアル等に定めるものとします。
                </p>
            </div>

            <div class="revision-date">
                <p>制定日&emsp;令和5年1月17日</p>
            </div>

        </div>
        <div style="clear: both"></div>
    </div>


    <!-- 11ページ目 -->
    <div class='page font-sm'>
        <div class="page-header">（様式１別紙⑤）</div>
        <table style="width: 100%">
            <tr>
                <td class="mark1">別紙⑤</td>
                <td>
                    <div class="page-title">事業者登録規約（賃貸集合給湯省エネ2024事業）</div>
                </td>
                <td class="mark2">提出不要</td>
            </tr>
        </table>

        <p class="font-sm">
            &emsp;賃貸集合給湯省エネ2024事業（以下、「本事業」という。）は、既存賃貸集合住宅用小型省エネルギー型給湯器導入促進事業費補助金交付要綱（令和５年12月21日20231120財資第13号。以下、「交付要綱」という。）に基づき、賃貸集合給湯省エネ2024事業事務局（以下、「本事務局」という。）が登録し公表する高効率給湯器（以下、「対象製品」という。）の導入を行うリフォーム工事並びにリース利用（以下、「補助事業」という。）に対する補助金（以下、「本補助金」という。）の交付を行う事業です。 
        </p>

        <div class="page-partition">

            <div class="clause">
                <p class="clause-title">第１条  賃貸集合給湯省エネ事業者</p>
                <p class="clause-explanation">
                    <ol class="custom-list font-sm">
                        <li><span>１．</span>賃貸集合給湯省エネ事業者は、次条に定める共同事業者と補助事業を共同して行う事業者として本事務局に登録された者をいいます。ただし、当該登録により、本事務局及び国（以下、「本事務局等」という。）は、賃貸集合給湯省エネ事業者として登録された事業者に対して何らその優良性を認定するものではありません。</li>
                        <li><span>２．</span>賃貸集合給湯省エネ事業者としての登録を希望する者は、事業者登録規約（住宅省エネ2024キャンペーン）（以下、「本キャンペーンの登録規約」という。）に基づき住宅省エネ支援事業者（以下、「住宅省エネ支援事業者」という。）としての登録を申請する際に、又は住宅省エネ支援事業者としての登録を受けた後に、本事業への参加を申告することによって、登録を受けるものとします。</li>
                        <li><span>３．</span>本事業者登録規約（賃貸集合給湯省エネ2024事業）（以下、「本規約」という。）に基づき、賃貸集合給湯省エネ事業者として登録されるためには、以下①及び②の要件（以下、「参加要件」という。）が満たされていなければなりません。登録後に参加要件のいずれかが満たされなくなった場合には、当該登録事業者は、直ちに本事務局にその旨を通知しなければならないものとします。本事務局は、当該通知を受けた場合、又は参加要件のいずれかを満たさなくなったことが明らかな場合は、速やかにその登録を停止（本規約第９条第２項に規定）するものとします。</li>
                            <ol class="custom-list font-sm">
                                <li><span>&#9312;</span>本キャンペーンの登録規約に基づき住宅省エネ支援事業者として登録を受け、かつ当該登録の要件を充足しており、当該登録を抹消されていない者</li>
                                <li><span>&#9313;</span>過去３カ年度内に経済産業省資源エネルギー庁所管事業補助金（以下、「資源エネルギー庁補助金」という。）において、以下のいずれにも該当しない者であること。
                                    <ol class="custom-list font-sm">
                                        <li><span>(a)</span>交付決定の取り消しに相当する理由で補助金の返還を求められたことのある者</li>
                                        <li><span>(b)</span>当該資源エネルギー庁補助金の規約その他これに類するものに反して、又は怠慢、虚偽の申告若しくはその他の不正な手段により、資源エネルギー庁補助金の交付を受ける又は受けようとするなどの行為（以下、「不適切な行為」という。）を行った者（団体を含む。本号において以下同じ。）。</li>
                                    </ol>
                                </li>
                            </ol>
                        </li>
                        <li><span>４．</span>前項②の規定にかかわらず、当該資源エネルギー庁補助金の事務事業者及び国が以下のいずれかに該当するため、本事業への参加について制限しないことを決定し、その旨の通知を行った者を除く。
                            <ol class="custom-list font-sm">
                                <li><span>(ⅰ)</span>前項②(a)の補助金の返還が、補助事業の全部又は一部の取りやめに伴って求められたものであった場合</li>
                                <li><span>(ⅱ)</span>前項②(a)の補助金の返還が、第三者の重過失、その他自らの責に帰すべき事由によらずに求められたものであった場合</li>
                                <li><span>(ⅲ)</span>前項②(b)に該当する者が、意図せず又は本事業に関わる従業員及びその取引先等（以下、「従業員等」という。）が独自の判断で行った不適切な行為を自ら申告した場合</li>
                                <li><span>(ⅳ)</span>不適切な行為に情状酌量の余地があり、十分な再発防止措置が講じられた場合</li>
                            </ol>
                        </li>
                    </ol>
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第２条  共同事業者</p>
                <p class="clause-explanation">
                    &emsp;共同事業者とは、本事業の利用を希望する消費者等（以下、単に「消費者等」という。）のうち、賃貸集合給湯省エネ事業者と工事請負契約又はリース契約を締結し、共同して補助事業を行う住宅所有者等をいいます。
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第３条  賃貸集合給湯省エネ事業者の義務 </p>
                <p class="clause-explanation">
                    &emsp;賃貸集合給湯省エネ事業者は、以下①～⑨に掲げる事項全てについてその責任と義務を有します。
                    <ol class="custom-list font-sm">
                        <li><span>&#9312;</span>既存賃貸集合住宅用小型省エネルギー型給湯器導入促進事業費交付規程（以下、「交付規程」という。）、本事務局が作成するマニュアル及び規約（本規約を含む。）並びに本事務局等が行った告知・発表等（以下、「マニュアル等」という。）に定める事項を遵守すること</li>
                        <li><span>&#9313;</span>消費者等に対して、本事業とリフォーム工事による省エネ効果について正しい説明を行うこと</li>
                        <li><span>&#9314;</span>共同事業者から依頼を受けた本補助金の交付申請手続きを遅滞なく、また適正に実施すること。また、当該手続きの進捗に関する共同事業者からの問い合わせに誠実に対応すること </li>
                    </ol>
                </p>
            </div>
        </div>

        <div class="page-separater">&emsp;</div>
        <div class="page-partition">

            <div class="clause">
                <p class="clause-explanation">
                    <ol class="custom-list font-sm">
                        <li><span>&#9315;</span>本事務局が本事業のホームページやメール等を通じて行う連絡事項を確認すること</li>
                        <li><span>&#9316;</span>本事務局から交付された本補助金について、共同事業者との取り決めに基づき、速やかに還元すること</li>
                        <li><span>&#9317;</span>本事務局等が、本事業の適正かつ円滑な運営のために行う調査（補助対象となる住宅への現地確認や事業所への立ち入り検査を含む。）に応じること</li>
                        <li><span>&#9318;</span>事務局等が、本事業の効果検証のために行う事業（共同事業者へのアンケートを含む。）に協力すること</li>
                        <li><span>&#9319;</span>共同事業者に対して前2号の協力を依頼すること</li>
                        <li><span>&#9320;</span>破産手続開始、民事再生手続開始、会社更生手続開始、特別清算開始の申立てがなされ、又は自らこれらの申立て若しくは特定調停の申立てをしたときは、直ちに本事務局に通知するものとし、本事務局の要請に従い、当該賃貸集合給湯省エネ事業者が交付申請を行い、又は交付決定を受けた本補助金の交付事務について、本事務局に必要な協力を行うこと</li>
                    </ol>
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第４条  交付申請の手続き</p>
                <p class="clause-explanation">
                    &emsp;本補助金の交付申請（交付申請の予約を含む。）にあたり、賃貸集合給湯省エネ事業者と共同事業者は交付規程に定める「共同事業実施規約」（以下、「共同事業実施規約」という。）を締結するとともに、共同事業者は賃貸集合給湯省エネ事業者に対して本補助金の交付申請を委託します。委託を請けた賃貸集合給湯省エネ事業者は、遅滞なく本事務局が提供する本補助金の交付申請のためのWebシステム（以下、「住宅省エネポータル」という。）により交付申請を提出しなければなりません。本事務局は、提出された交付申請書類に不備又は不足を発見した場合、住宅省エネポータルを通じた通知又は電話により確認を行うことがあります。賃貸集合給湯省エネ事業者は本事務局からの確認について、指定される期限までに回答しなければなりません。
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第５条 本補助金の還元方法</p>
                <p class="clause-explanation">
                    &emsp;賃貸集合給湯省エネ事業者が、前条の交付申請により本補助金の交付を受けたとき、賃貸集合給湯省エネ事業者は受領した当該補助金相当額について、直ちに以下の①又は②のいずれかの方法により共同事業者に還元しなければなりません。還元方法については、共同事業実施規約の締結時に双方で確認する必要があります。
                    <ol class="custom-list font-sm">
                        <li><span>&#9312;</span>契約に係る共同事業者の賃貸集合給湯省エネ事業者に対する債務に充当する方法</li>
                        <li><span>&#9313;</span>現金で支払う方法</li>
                    </ol>
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第６条 本事業の留意点</p>
                <p class="clause-explanation">
                    &emsp;賃貸集合給湯省エネ事業者は、本補助金の交付申請にあたり以下①～⑥の留意点について理解しておかなければなりません。
                    <ol class="custom-list font-sm">
                        <li><span>&#9312;</span>本事業の予算には限りがあり、令和６年12月末以前であっても、交付申請（交付申請の予約を含む。以下本条において同じ）が予算上限に達した段階で受付を終了すること。よって、可能な限り早い時期に本補助金の交付申請を提出することが望ましいこと</li>
                        <li><span>&#9313;</span>本補助金の交付額は、交付申請を行った額から減額されることがあること</li>
                        <li><span>&#9314;</span>補助金の還元方法が第５条①である場合、賃貸集合給湯省エネ事業者は本補助金の交付から還元までの期間について本補助金を保持しなければならないこと</li>
                        <li><span>&#9315;</span>交付規程第●に基づく本補助金の返還は、原則、賃貸集合給湯省エネ事業者が行わなければならないこと</li>
                        <li><span>&#9316;</span>本規約第８条③に該当する疑いがある場合、本事務局は当該他の補助金の所管先に対して、当該交付申請の情報を提供し、合同して調査及び確認を行うことがあること</li>
                        <li><span>&#9317;</span>本規約第９条に定める処分を受けた賃貸集合給湯省エネ事業者は、停止から ３カ年度内に実施する資源エネルギー庁補助金及び国が行う他の補助金事業 に対する参加や交付申請が制限される場合があること。</li>
                    </ol>
                </p>
            </div>

        </div>
        <div style="clear: both"></div>

    </div>

    <!-- 12ページ目 -->
    <div class='page font-sm'>
        <div class="page-header">（様式１別紙⑤）</div>
        <div class="page-partition">

            <div class="clause">
                <p class="clause-title">第７条 従業員等への周知</p>
                <p class="clause-explanation">
                    &emsp;従業員等に対して、賃貸集合給湯省エネ事業者の業務、義務、留意点、禁止事項等について、周知と教育を徹底しなければなりません。
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第８条  禁止事項</p>
                <p class="clause-explanation">
                    &emsp;賃貸集合給湯省エネ事業者（賃貸集合給湯省エネ事業者になろうとする者を含む。）及びその従業員等は、以下①～⑧に掲げる行為を行ってはなりません。
                    <ol class="custom-list font-sm">
                        <li><span>&#9312;</span>不正、虚偽により賃貸集合給湯省エネ事業者の登録を受け、又は登録を申請すること</li>
                        <li><span>&#9313;</span>自らの不正、虚偽により、又は共同事業者の不正、虚偽を知りながら本補助金の交付を受け、又は本補助金の交付申請（交付申請の予約を含む。以下本条において同じ。）をすること</li>
                        <li><span>&#9314;</span>同一の補助事業に対して、国庫補助を財源とする他の補助金と併用して交付申請を行い、重複して補助を受けること</li>
                        <li><span>&#9315;</span>消費者等に対して、本事業の制度及び本事務局等の名称、商標、又は称呼等を用いて、当該賃貸集合給湯省エネ事業者が取り扱う補助事業の優良性または有利性を誤認させるおそれのある言動、表示及び広告をすること</li>
                        <li><span>&#9316;</span>本事務局等に対する債権を、第三者に譲渡し、若しくは移転し、又は担保に供すること</li>
                        <li><span>&#9317;</span>本事務局等に対する一切の権利及び義務並びに本規約に基づき締結される本事務局との間の契約上の地位について、本事務局の同意なしに第三者に対して譲渡し若しくは移転し、又は担保に供すること</li>
                        <li><span>&#9318;</span>本事務局等及び消費者等を誹謗中傷し、又は名誉若しくは信用を傷つける言動をすること</li>
                        <li><span>&#9319;</span>その他、本事務局等が本事業の趣旨に反すると判断する行為、及び本事務局等との信頼関係を損なう一切の行為</li>

                    </ol>
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第９条  不適切な行為に対する処分</p>
                <p class="clause-explanation">
                    <ol class="custom-list font-sm">
                        <li><span>１．</span>本事務局は、不適切な行為を伴う補助事業に対して、その交付申請（交付申請の予約を含む。本条において同じ。）を却下し、既に交付決定を行った場合にあっては、交付規程第●に基づき、その交付決定を取り消します。</li>
                        <li><span>２．</span>本事務局は、本事業において不適切な行為を行った賃貸集合給湯省エネ事業者について、その地位を停止することがあります。 </li>
                        <li><span>３．</span>本事務局は、事業者登録規約（住宅省エネ2024キャンペーン）第３条第２項に該当する住宅省エネ支援事業者からの本事業への参加申告を拒否又は却下し、又はその地位を停止することがあります。</li>
                        <li><span>４．</span>賃貸集合給湯省エネ事業者の地位の停止に伴い、当該賃貸集合給湯省エネ事業者に対して、以下①～⑥に定める処分の全部又は一部を科す ことができます。
                            <ol class="custom-list font-sm">
                                <li><span>&#9312;</span>賃貸集合給湯省エネ事業者としての公表の停止</li>
                                <li><span>&#9313;</span>不適切な行為が行われた事実、及び国及び本事務局による当該賃貸集合給湯省エネ事業者に対する処分の公表</li>
                                <li><span>&#9314;</span>他の構成事業の所管庁及び事務事業者に対する処分の通達</li>
                                <li><span>&#9315;</span>本事業の交付申請（不適切な行為があった補助事業以外の補助事業に係る交付申請を含む。）の全部又は一部に対する本補助金の不交付</li>
                                <li><span>&#9316;</span>本事業の交付決定（不適切な行為があった補助事業以外の補助事業に係る交付決定を含む。）の全部又は一部の取り消し</li>
                                <li><span>&#9317;</span>交付した本補助金の全部又は一部の返還命令</li>
                            </li>
                        </li>
                    </ol>
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第１０条　補助金の返還</p>
                <p class="clause-explanation">
                    <ol class="custom-list font-sm">
                        <li><span>１．</span>本事務局は、交付決定を取り消され、又は交付規程第●に定める取得財産の処分 に反した補助事業に対して、その補助金の全部若しくは一部について交付せず、その交付を停止し、又は交付した本補助金の全部若しくは一部の返還を命じることがあります。</li>
                        <li><span>２．</span>前項による返還命令を受けた賃貸集合給湯省エネ事業者は、速やかに本補助金の全部又は一部を本事務局に返還しなければなりません。なお、本規定は、本事務局が、賃貸集合給湯省エネ事業者から補助金の還元を受けた共同事業者が、当該補助金を返還することを妨げるものではありません。</li>
                        <li><span>３．</span>本事務局は、第１項の補助金の返還にあたっては、交付規程第●条第●に定める「加算金」 の支払いを求めることができ、その期限を指定するものとします。なお、当該期限までに返還されない補助金については、交付規程の第●条が定める「延滞金」 の支払いを求めることができます。</li>
                    </ol>
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第１１条　本規約の変更等</p>
                <p class="clause-explanation">
                    &emsp;本事務局が本規約を変更するときは、あらかじめ変更の7日前までに、本事業のホームページ及び住宅省エネポータルに
                </p>
            </div>

        </div>
        <div class="page-separater">&emsp;</div>

        <div class="page-partition">

            <div class="clause">
                <p class="clause-explanation">
                    より、本規約の変更をする旨、変更内容及び変更の効力発生時期を通知するものとします。ただし、上記にかかわらず、当該変更が賃貸集合給湯省エネ事業者一般の利益に適合する場合、又は緊急の必要がある場合その他やむを得ない事情がある場合には、周知期間を短縮し、又は変更の効力発生後速やかに上記の方法において周知することができるものとします。変更後の本規約については、本事務局が定めた効力発生時期より、効力を生じるものとします。
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第１２条　免責</p>
                <p class="clause-explanation">
                    <ol class="custom-list font-sm">
                        <li><span>１．</span>本事務局等は、本事業に関して、賃貸集合給湯省エネ事業者（賃貸集合給湯省エネ事業者になろうとする者を含む。以下本条において同じ。）に生じたあらゆる損失等について、一切の責任及び義務を負わないものとします。ただし、本事務局等の故意又は重過失によるものである場合には、本事務局等は、当該賃貸集合給湯省エネ事業者に直接かつ現実に生じた損害に限り、責任を負うものとします。</li>
                        <li><span>２．</span>本事務局等は、本事業に関して、賃貸集合給湯省エネ事業者と、第三者との間に生じた紛争やあらゆる損失等について、一切の責任及び義務を負わないものとします。</li>
                    </ol>
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第１３条　本事務局による個人情報の利用</p>
                <p class="clause-explanation">
                    &emsp;本事業において本事務局が取得した個人情報の利用、保存及び管理には、本事業のプライバシーポリシーが適用されます。賃貸集合給湯省エネ事業者は、共同事業者が本事務局に提供する共同事業者の個人情報について、本事業のプライバシーポリシーに従って利用、保管及び管理等されることについて、共同事業者の同意を得るものとします。
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第１４条 賃貸集合給湯省エネ事業者の秘密保持義務及び個人情報保護義務</p>
                <p class="clause-explanation">
                    <ol class="custom-list font-sm">
                        <li><span>１．</span>賃貸集合給湯省エネ事業者（賃貸集合給湯省エネ事業者になろうとする者を含む。以下本条において同じ。）は、本事業に関連して、本事務局等から開示される技術上又は営業上の情報（以下、「秘密情報」という。）を、第三者に漏洩、開示又は公表してはならないものとします。ただし、本事務局の書面による事前の同意を得た場合はこの限りではありません。</li>
                        <li><span>２．</span>賃貸集合給湯省エネ事業者は、本事業上の義務を履行する目的に限り、秘密情報を複製、加工、及び利用することができます。</li>
                        <li><span>３．</span>賃貸集合給湯省エネ事業者は、本事務局から指示を受けた場合、当該指示に従い速やかに、秘密情報（秘密情報を複製及び加工したものを含む。）を返却、廃棄又は消去するものとします。当該返却、廃棄、又は消去に要する費用は、賃貸集合給湯省エネ事業者が負担するものとします。</li>
                        <li><span>４．</span>賃貸集合給湯省エネ事業者は、秘密情報及び個人情報の安全な管理のために、組織的、人的、物理的及び技術的な安全措置を講じなければならないものとします。</li>
                        <li><span>５．</span>本事務局が要求する場合、賃貸集合給湯省エネ事業者は、秘密情報及び個人情報の管理状態を本事務局に報告するものとします。また、本事務局は、賃貸集合給湯省エネ事業者に対し、事前の書面による通知により、本事務局が賃貸集合給湯省エネ事業者の業務の適正を確認するために必要と認める範囲内において、賃貸集合給湯省エネ事業者の事業所その他秘密情報及び個人情報の管理場所又は使用場所に立入り、関連する書類等の提出を求める等秘密情報及び個人情報の管理等の情報セキュリティ監査を行うことができるものとします。</li>
                        <li><span>６．</span>本事務局及び賃貸集合給湯省エネ事業者は、秘密情報又は個人情報の漏洩等の事故が発生し、又は発生したおそれのあることを知った場合、当該事故の発生原因の如何にかかわらず、直ちにその旨を相手方に報告し、本事務局と賃貸集合給湯省エネ事業者が協議の上、適切な措置を講じるものとします。</li>
                        <li><span>７．</span>本事務局及び賃貸集合給湯省エネ事業者は、前項の事故について、事故を引き起こした責任がいずれにあるかを協議の上、確定するものとします。</li>
                    </ol>
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第１５条　専属的合意管轄裁判所</p>
                <p class="clause-explanation">
                    &emsp;本事業に関して、本事務局と賃貸集合給湯省エネ事業者又は賃貸集合給湯省エネ事業者になろうとする者との間に生じた紛争については、東京簡易裁判所又は東京地方裁判所を第一審の専属的合意管轄裁判所とします。
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第１６条　雑則</p>
                <p class="clause-explanation">
                    &emsp;本規約に定めるもののほか、業務の実施に必要な事項については、マニュアル等に定めるものとします。
                </p>
            </div>

            <div class="revision-date">
                <p>制定日&emsp;令和5年1月17日</p>
            </div>

        </div>
        <div style="clear: both"></div>
    </div>

</body>

</html>