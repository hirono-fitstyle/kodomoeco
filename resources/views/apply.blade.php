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
            width: 50%;
            padding: 0px 5px;
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
            font-size: 0.85rem;
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
            font-size: 1.2rem;
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
            margin-bottom: 5px;
            padding: 0px 5px;
        }

        .clause-title {
            text-decoration: underline;
            margin-bottom: 3px;
            font-size: 0.85rem;
        }

        .clause-explanation {
            padding: 0px;
            margin: 0px;
            font-size: 0.85rem;
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
            font-size: 0.85rem;
        }

        ol.custom-list>li>span {
            position: absolute;
            left: 0;
            margin: 0;
            font-size: 0.85rem;
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
            font-size: 0.85rem;
        }

    </style>
</head>

<body>
    <!-- 1ページ目 -->
    <div class='page'>
        <div class="page-header">（様式１）</div>
        <p class='dear'>こどもエコすまい支援事業事務局　殿</p>
        <p class='dear'>先進的窓リノベ事業事務局　殿</p>
        <p class='dear'>給湯省エネ事業事務局　殿</p>
        <div class='apply-title'>
            住宅省エネ2023キャンペーン・住宅省エネ支援事業者登録申請書
        </div>
        <div class='explanation1'>
            <p>&emsp;以下の通り、「こどもエコすまい支援事業」、「先進的窓リノベ事業」及び「給湯省エネ事業」（以下、「構成事業」という。）が参加する「住宅省エネ2023キャンペーン」（以下、「本キャンペーン」という。）において、消費者等に代わり各構成事業の交付申請等の手続きを行う「住宅省エネ支援事業者」に登録を申請いたします。<br />
            &emsp;なお、登録申請にあたり、本キャンペーンの事業者登録規約（本様式別紙①）をよく理解の上、遵守します。また、各構成事業の交付申請の提出の際には、当該交付申請を提出する構成事業の事業者登録規約（本様式別紙②～④）を遵守することに同意いたします。</p>
        </div>
        <div class="info-wrap">
            <p>【事業者情報】</p>
            <table class='apply-info'>
                <tr>
                    <th style="width: 240px;">作&emsp;成&emsp;日（&emsp;出&emsp;力&emsp;日&emsp;）</th>
                    <td colspan="2">{{ $eradate['era'] }} {{ $eradate['year'] }} 年 {{ $eradate['month'] }} 月 {{ $eradate['day'] }} 日</td>
                </tr>
                <tr>
                    <th>事&emsp;業&emsp;者&emsp;名&emsp;・&emsp;商&emsp;号<br />（ 個 人 事 業 主 は 屋 号 ）</th>
                    <td>{{ $operatorName }}</td>
                    <td rowspan="3" style="width: 120px; text-align: center; vertical-align: middle;">
                        <div style="color: #888888">実印</div>
                        <div style="color: #888888; font-size: 0.65rem">(印鑑証明書の登録印)</div>
                    </td>
                </tr>
                <tr>
                    <th>代&emsp;&emsp;表&emsp;&emsp;者&emsp;&emsp;肩&emsp;&emsp;書<br />（ 個 人 事 業 主 は 不 要 ）</th>
                    @if ($operatorCategory == "1")
                        <td>{{ $operatorTitle }}</td>
                    @else
                        <td></td>
                    @endif
                </tr>
                <tr>
                    <th>代&emsp;&emsp;表&emsp;&emsp;者&emsp;&emsp;氏&emsp;&emsp;名<br />（ 個人事業主は本人氏名 ）</th>
                    <td>{{ $representativeLastName }} {{ $representativeFirstName }}</td>
                </tr>
                <tr>
                    <th>本&emsp; 店&emsp; の&emsp; 所&emsp; 在&emsp; 地<br />（ 個 人 事 業 主 は 住 所 ）</th>
                    @if ($operatorCategory == "1")
                        <td colspan="2">〒{{ $operatorZipCode }}<br />{{ $operatorPrefecture }} {{ $operatorCity }} {{ $operatorAddress }}</td>
                    @else 
                        <td colspan="2">〒{{ $operatorZipCode }}<br />{{ $operatorPrefecture }} {{ $operatorCity }} {{ $operatorAddressSolo }}{{ $operatorBuildingSolo }}{{ $operatorRoomNumberSolo }}</td>
                    @endif
                </tr>
                <tr>
                    <td colspan="3">
                        <div style="padding: 10px;">
                            <div class="font-lg" style="display: inline">☑</span>
                            <div style="display: inline">
                                <span>以下に該当しません（法人においては、役員等（実質的に経営に関与する者を含む））</span>
                                <p class="font-sm" style="margin: 10px;">
                                    暴力団（暴力団員による不当な行為の防止等に関する法律（平成３年法律第７７号）第２条第２号に規定する暴力団をいう。以下同じ。）又は暴力団員（同条第６号に規定する暴力団員をいう。以下同じ。）である者、不正の利益を図る目的若しくは第三者に損害を加える目的をもって暴力団若しくは暴力団員を利用している者、資金等の供給若しくは便宜の供与等により直接的あるいは積極的に暴力団の維持、運営に協力し、若しくは関与している者、又は暴力団若しくは暴力団員であることを知りながらこれと社会的に非難されるべき関係を有している者
                                </p>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="info-wrap">
            <p>【参加を予定する構成事業】 ※登録後も変更できます</p>
            <table class='apply-info'>
                <tr>
                    <td>
                        <span class='font-xl'>
                            @if ($publicProject1 == 1) ☑ @else □ @endif
                        </span>
                        <span>こどもエコすまい支援事業</span>
                        （
                        <span class="font-lg">
                            @if ($publicBuisiness1 == 1) ☑ @else □ @endif
                        </span>
                        <span class="font-sm">注文住宅の新築</span>
                        <span class="font-lg">
                            @if ($publicBuisiness2 == 1) ☑ @else □ @endif
                        </span>
                        <span class='font-sm'>新築分譲住宅の購入（宅地建物取引業者に限る）</span>
                        <span class="font-lg">
                            @if ($publicBuisiness3 == 1) ☑ @else □ @endif
                        </span>
                        <span class='font-sm'>リフォーム</span>
                        ）
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class='font-xl'>
                            @if ($publicProject3 == 1) ☑ @else □ @endif
                        </span>
                        <span>先進的窓リノベ事業</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class='font-xl'>
                            @if ($publicProject2 == 1) ☑ @else □ @endif
                        </span>
                        <span>先給湯省エネ事業</span>
                        （&emsp;
                        <span class="font-lg">
                            @if ($publicBuisiness5 == 1) ☑ @else □ @endif
                        </span>
                        <span class='font-sm'>エネルギー小売</span>
                        <span class="font-lg">
                            @if ($publicBuisiness4 == 1) ☑ @else □ @endif
                        </span>
                        <span class='font-sm'>リース事業者</span>
                        &emsp;）
                    </td>
                </tr>

            </table>
        </div>
        <div class="info-wrap">
            <p>【添付する書類】 ※該当する書類をすべて提出してください＊</p>
            <table class='apply-info'>
                <tr>
                    <td rowspan="2" style="width: 190px">
                        <span class="font-xl">
                            @if ($operatorCategory == "1") ☑ @else □ @endif
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
                            @if ($operatorCategory == "2") ☑ @else □ @endif
                        </span>
                        <span>個&emsp;人&emsp;事&emsp;業&emsp;主</span>
                    </td>
                    <td>
                        <div style="width: 160px; display: inline-block">個人の印鑑証明書</div>
                        <span class="font-sm">（住民登録がある自治体等で３ヶ月以内に発行されたもの）</span>
                    </td>
                </tr>
            </table>
            <p class="font-sm">＊こどもみらい住宅支援事業に事業者登録を行っている者は、こどもみらい住宅支援事業への事業者登録時に提出した書類に変更がある場合のみ、当該変更内容が確認できる書類を提出してください。<br />
                （例）法人又は個人事業主の実印（自治体への登録印）が変更になった場合、「印鑑証明書」を添付してください。</br />
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
                    <div class="page-title">事業者登録規約（住宅省エネ2023キャンペーン)</div>
                </td>
                <td class="mark2">提出不要</td>
            </tr>
        </table>
        <p class="font-sm">
        &emsp;「住宅省エネ2023キャンペーン」（以下、「本キャンペーン」という。）は、一体的に実施、運用される「こどもエコすまい支援事業」、「高効率給湯器導入促進による家庭部門の省エネルギー推進事業（以下、「給湯省エネ事業」という。）」、「住宅の断熱性能向上のための先進的設備導入促進事業」及び「断熱窓への改修促進等による家庭部門の省エネ・省CO2加速化支援事業」（以下、後2者の事業を総称して「先進的窓リノベ事業」といい、4つの事業を総称して「構成事業」という。）の総称です。
        </p>
        <div style="float: left; width: 50%">
            <div class="clause">
                <p class="clause-title">第１条　住宅省エネ支援事業者</p>
                <span class="clause-explanation">
                    <ol class="custom-list">
                        <li><span>１．</span>住宅省エネ支援事業者とは、本キャンペーンにおいて住宅省エネ2023キャンペーン・住宅省エネ支援事業者登録申請書を提出し、こどもエコすまい支援事業の事務局（以下、「本事務局」という。）に登録された者をいいます。ただし、当該登録により、本事務局及び国（以下、「本事務局等」という。）は住宅省エネ支援事業者として登録された事業者に対して何らその優良性を認定するものではありません。
                        </li>
                        <li><span>２．</span>本事業者登録規約（住宅省エネ2023キャンペーン）（以下、「本規約」という。）に基づき、住宅省エネ支援事業者として登録されるためには、以下①～③の要件（以下、「登録要件」という。）が満たされていなければなりません。登録後に登録要件のいずれかが満たされなくなった場合には、当該住宅省エネ支援事業者は、直ちに本事務局にその旨を通知しなければならないものとします。本事務局は、当該通知を受けた場合、又は登録要件のいずれかを満たさなくなったことが明らかな場合は、速やかにその登録を停止するものとします。
                            <ol class="custom-list">
                                <li><span>&#9312;</span>国内に法人登記された法人又は住民登録された個人事業主</li>
                                <li><span>&#9313;</span>インターネット環境を有し、本事務局が提供する本キャンペーンのWebシステム（以下、「住宅省エネポータル」という。）を利用できる者</li>
                                <li>
                                    <span>&#9314;</span>以下に該当しない者（法人においては、役員等（実質的に経営に関与する者を含む））
                                    <ol class="custom-list">
                                        <li><span>・</span>暴力団（暴力団員による不当な行為の防止等に関する法律（平成3年法律第77号）第2条第2号に規定する暴力団をいう。以下同じ。）又は暴力団員（同条第6号に規定する暴力団員をいう。以下同じ。）である者、不正の利益を図る目的若しくは第三者に損害を加える目的をもって暴力団若しくは暴力団員を利用している者、資金等の供給若しくは便宜の供与等により直接的あるいは積極的に暴力団の維持、運営に協力し、若しくは関与している者、又は暴力団若しくは暴力団員であることを知りながらこれと社会的に非難されるべき関係を有している者</li>
                                    </ol>
                                </li>
                            </ol>
                        </li>
                    </ol>
                </span>
            </div>
            <div class="clause">
                <p class="clause-title">第２条　構成事業への参加と停止</p>
                <p class="clause-explanation">
                    &emsp;住宅省エネ支援事業者は、補助金の交付申請を希望する構成事業に対して参加を申告することができます。本事務局は、当該住宅省エネ支援事業者が以下の参加要件を満たす場合、各構成事業の登録事業者として登録します。ただし、登録後であっても、各構成事業の事務事業者（以下、「担当事務局」という。）が当該参加要件を満たさないと判断した場合、参加申告を無効とし、当該構成事業における登録の停止を行うことがあります。
                    <ol class="custom-list" style="padding: 10px">
                        <li><span>&#9312;</span>前条第2項に基づき、住宅省エネ支援事業者の登録が停止されていないこと</li>
                        <li><span>&#9313;</span>各対象事業にあっては、以下の要件を充足すること</li>
                        <li>
                            <ol class="custom-list">
                                <li><span>(ⅰ)</span>&emsp;こどもエコすまい支援事業の参加にあたっては、当該事業の事業者登録規約第1条第3項に規定する参加要件</li>
                                <li><span>(ⅱ)</span>&emsp;先進的窓リノベ事業の参加にあたっては、当該事業の事業者登録規約第1条第3項に規定する参加要件</li>
                                <li><span>(ⅲ)</span>&emsp;給湯省エネ事業の参加にあたっては、当該事業の事業者登録規約第1条第3項に規定する参加要件</li>
                            </ol>
                        </li>
                    </ol>
                </p>
            </div>
            <div class="clause">
                <p class="clause-title">第３条　情報公開と問い合わせ</p>
                <p class="clause-explanation">
                    &emsp;住宅省エネ支援事業者が希望した場合、本事務局が作成する本キャンペーンのホームページ上で当該住宅省エネ支援事業者に関する情報が、登録事業者として公開されます。ただし、情報の公開にあたっては、住宅省エネ支援事業者は、構成事業の申請を検討する者（以下、「消費者等」という。）からの問い合わせに対応する義務を負い、消費者等からの問い合わせに適切に対応できる体制を整備しなければなりません。本事務局は、住宅省エネ支援事業者による問い合わせ対応若しくは体制の整備が不十分であると判断した場合、公開内容が不適切であると判断した場合、本規約第1条に定める登録要件を満たさないと判断した場合、又は担当事務局が第2条に定める構成事業への参加を停止した場合、住宅省エネ支援事業者へ事前の通告なしに当該住宅省エネ支援事業者に関する情報の全部又は一部の公開を停止することがあります。
                </p>
            </div>
            <div class="clause">
                <p class="clause-title">第４条&emsp;従業員等への周知</p>
                <p class="clause-explanation">
                    &emsp;住宅省エネ支援事業者は、本キャンペーンに関わる従業員及びその取引先等（以下、「従業員等」という。）に対して、禁止事項等、本規約が定める事項について、周知と教育を徹底しなければなりません。
                </p>
            </div>
        </div>
        <div style="float: left; width: 50%">
            <div class="clause">
                <p class="clause-title">第５条&emsp;禁止事項</p>
                <p class="clause-explanation">
                    &emsp;住宅省エネ支援事業者（住宅省エネ支援事業者になろうとする者を含む。以下本条において同じ。）及びその従業員等は、以下①～⑦に掲げる行為を行ってはなりません。
                    <ol class="custom-list">
                        <li><span>&#9312;</span>不正、虚偽により住宅省エネ支援事業者の登録を受け、又は登録を申請すること</li>
                        <li><span>&#9313;</span>構成事業において、担当事務局が作成するマニュアル及び規約並びに担当事務局及び国が行う告知・発表等に定める事項において禁止されている行為をすること
                        </li>
                        <li><span>&#9314;</span>消費者等に対して、本キャンペーン及び構成事業、並びに本事務局等及び担当事務局の名称、商標、又は称呼等を用い
                            て、当該住宅省エネ支援事業者が取り扱う商品及び事業の優良性を誤認させるおそれのある言動、表示及び広告をすること</li>
                        <li><span>&#9315;</span>本事務局等に対する債権を、第三者に譲渡し、若しくは移転し、又は担保に供すること</li>
                        <li><span>&#9316;</span>本事務局等に対する一切の権利及び義務並びに本規約に基づき締結される本事務局との間の契約上の地位について、本事務局の同意なしに第三者に対して譲渡し、若しくは移転し、又は担保に供すること
                        </li>
                        <li><span>&#9317;</span>本事務局等及び消費者等を誹謗中傷し、又は名誉若しくは信用を傷つける言動をすること</li>
                        <li><span>&#9318;</span>その他、本事務局等が本キャンペーン及び構成事業の趣旨に反すると判断する行為、及び本事務局等との信頼関係を損なう一切の行為</li>
                    </ol>
                </p>
            </div>
            <div class="clause">
                <p class="clause-title">第６条&emsp;登録の抹消</p>
                <p class="clause-explanation">
                    &emsp;本事務局は、住宅省エネ支援事業者又はその従業員等が本規約に反する行為を行い、又は行おうとしたと本事務局が判断した場合、住宅省エネ支援事業者としての登録を抹消することがあります。
                </p>
            </div>
            <div class="clause">
                <p class="clause-title">第７条&emsp;本規約の変更等</p>
                <p class="clause-explanation">
                    &emsp;本事務局が本規約を変更するときは、あらかじめ変更の7日前までに、本キャンペーンのホームページ及び住宅省エネポータルにより、本規約の変更をする旨、変更内容及び変更の効力発生時期を通知するものとします。ただし、上記に関わらず、当該変更が住宅省エネ支援事業者一般の利益に適合する場合、又は緊急の必要がある場合その他やむを得ない事情がある場合には、周知期間を短縮し、又は変更の効力発生後速やかに上記の方法において周知することができるものとします。変更後の本規約について
                    は、本事務局が定めた効力発生時期より、効力を生じるものとします。</p>
            </div>
            <div class="clause">
                <p class="clause-title">第８条&emsp;免責</p>
                <p class="clause-explanation">
                    <ol class="custom-list">
                        <li>本事務局等及び担当事務局は、本キャンペーンに関して、住宅省エネ支援事業者（住宅省エネ支援事業者になろうとする者を含む。以下本条において同じ。）に生じたあらゆる損失等につい
                            て、一切の責任及び義務を負わないものとします。ただし、本事務局等又は担当事務局の故意又は重過失によるものである場合には、当該事務局等又は担当事務局は、当該住宅省エネ支援事業者に直接かつ現実に生じた損害に限り、責任を負うものとします。
                        </li>
                        <li>本事務局等及び担当事務局は、本キャンペーンに関して、住宅省エネ支援事業者と、第三者との間に生じた紛争やあらゆる損失等について、一切の責任及び義務を負わないものとします。</li>
                    </ol>
                </p>
            </div>
            <div class="clause">
                <p class="clause-title">第９条&emsp;本事務局による個人情報の利用</p>
                <p class="clause-explanation">
                    &emsp;本キャンペーンにおいて本事務局が取得した個人情報の利用、保存及び管理には、本キャンペーンのプライバシーポリシーが適用されます。
                </p>
            </div>
            <div class="clause">
                <p class="clause-title">第１０条&emsp;住宅省エネ支援事業者の秘密保持義務</p>
                <p class="clause-explanation">
                <ol class="custom-list">
                    <li><span>１．</span>住宅省エネ支援事業者（住宅省エネ支援事業者になろうとする者を含む。以下本条において同じ。）は、本キャンペーンに関連して、本事務局等又は担当事務局から開示される技術上又は営業上の情報（以下、「秘密情報」という。）を、第三者に漏洩、開示又は公表してはならないものとします。ただし、本事務局の書面による事前の同意を得た場合はこの限りではありません。
                    </li>
                    <li><span>２．</span>住宅省エネ支援事業者は、本キャンペーン上の義務を履行する目的に限り、秘密情報を複製、加工、及び利用することができます。</li>
                </ol>
                </p>
            </div>
        </div>
        <div style="clear: both"></div>
    </div>

    <!-- 3ページ目 -->
    <div class='page font-sm'>
        <div class="page-header">（様式１別紙①）</div>
        <div style="float: left; width: 50%">
            <div class="clause">
                <p class="clause-explanation">
                    <ol class="custom-list">
                        <li><span>３．</span>住宅省エネ支援事業者は、本事務局から指示を受けた場合、当該指示に従い速やかに、秘密情報（秘密情報を複製及び加工したものを含む。）を返却、廃棄又は消去するものとします。当該返却、廃棄、又は消去に要する費用は、住宅省エネ支援事業者が負担するものとします。
                        </li>
                        <li><span>４．</span>本事務局及び住宅省エネ支援事業者は、秘密情報又は個人情報の漏洩等の事故が発生し、又は発生したおそれのあることを知った場合、当該事故の発生原因の如何に関わらず、直ちにその旨を相手方に報告し、本事務局と住宅省エネ支援事業者が協議の上、適切な措置を講じるものとします。
                        </li>
                        <li><span>５．</span>本事務局及び住宅省エネ支援事業者は、前項の事故について、事故を引き起こした責任がいずれにあるかを協議の上、確定するものとします。</li>
                    </ol>
                </p>
            </div>
            <div class="clause">
                <p class="clause-title">第１１条&emsp;専属的合意管轄裁判所</p>
                <p class="clause-explanation">
                    &emsp;本キャンペーンに関して、本事務局と住宅省エネ支援事業者又は住宅省エネ支援事業者になろうとする者との間に生じた紛争については、東京簡易裁判所又は東京地方裁判所を第一審の専属的合意管轄裁判所とする。
                </p>
            </div>
            <div class="clause">
                <p class="clause-title">第１２条&emsp;雑則</p>
                <p class="clause-explanation">
                    &emsp;本規約に定めるもののほか、業務の実施に必要な事項については、マニュアル等に定めるものとする。
                </p>
            </div>
            <div class="clause">
                <p class="clause-title">第１３条&emsp;住宅省エネ2024キャンペーンへの参加申告</p>
                <p class="clause-explanation">
                    <ol class="custom-list">
                        <li><span>１．</span>本事務局等は、本キャンペーンの住宅省エネ支援事業者が令和５年度補正予算に基づき創設される次に掲げる事業（以下、「住宅省エネ2024キャンペーン」という。）にも参加することを希望するであろうと想定し、</li>
                    </ol>
                </p>
            </div>
        </div>
        <div style="float: left; width: 50%">
            <div class="clause">
                <p class="clause-explanation">
                <ol class="custom-list">
                    <li>本キャンペーンにおける住宅省エネ支援事業者と同様の責任と役割を担う事業者（以下、「住宅省エネ支援事業者(2024)」という。）として登録する手続きを円滑に行えるようにするため、次項以下に定めるところに従い、本キャンペーンの住宅省エネ支援事業者が住宅省エネ2024キャンペーンに参加することを希望し、その旨の申告（以下、「参加申告」という。）を国に対して行ったものとみなすものとします。</li>
                    <li>
                        <ol class="custom-list" style="padding: 10px">
                            <li><span>&#9312;</span>質の高い住宅ストック形成に関する省エネ住宅への支援（仮称）（国土交通省）</li>
                            <li><span>&#9313;</span>断熱窓への改修促進等による住宅の省エネ・省CO2加速化支援事業（環境省）</li>
                            <li><span>&#9314;</span>高効率給湯器導入促進による家庭部門の省エネルギー推進事業費補助金（経済産業省）</li>
                            <li><span>&#9315;</span>既存賃貸集合住宅の省エネ化支援事業（経済産業省）</li>
                        </ol>
                    </li>
                    <li style="margin: 20px 0px;">住宅省エネ2024キャンペーンには、①の事業並びに①と一体的な運用が検討される②、③及び④の事業が含まれます。</li>
                    <li><span>２．</span>住宅省エネ2024キャンペーンに参加を希望しない住宅省エネ支援事業者は、本事務局等が別途定める期限までに、本キャンペーンの住宅省エネポータルから参加申告を取り下げることができます。
                    </li>
                    <li><span>３．</span>本事務局等は、参加申告を行った住宅省エネ支援事業者が、登録時に提出した情報（提出後の変更を含む）及び振込口座の情報について、住宅省エネ2024キャンペーンの管轄官庁に提供します。なお、当該情報の提供が行われた場合でも、住宅省エネ
                        2024キャンペーンのいずれかまたは全部の事業に交付申請を行う際には、当該事業の事務事業者が定める方法により、住宅省エネ支援事業者(2024)としての登録を完了しなければなりません。</li>
                </ol>
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
                    <div class="page-title">事業者登録規約（こどもエコすまい支援事業）</div>
                </td>
                <td class="mark2">提出不要</td>
            </tr>
        </table>
        <p class="font-sm">&emsp;こどもエコすまい支援事業（以下、「本事業」という。）は、こどもエコすまい支援事業補助金交付要綱（令和4年12月2日国住生第250号。以下、「交付要綱」という。）に定める要件に合致する注文住宅の新築、新築分譲住宅の購入（以下、併せて「新築住宅の建築・購入」という。）及びリフォーム（以下、「リフォーム」という。また新築住宅の建築・購入と合わせて「補助事業」という。）に対する補助金（以下、「本補助金」という。）の交付を行う事業です。
        </p>
        <div style="float: left; width: 50%">
            <div class="clause">
                <p class="clause-title">第１条　こどもエコすまい支援事業者</p>
                <ol class="custom-list font-sm">
                    <li><span>１．</span>こどもエコすまい支援事業者は、新築住宅の建築事業者及び販売事業者（宅地建物取引業者に限る。）並びにリフォームの工事施工者で、次条に定める共同事業者と補助事業を共同して行う事業者としてこどもエコすまい支援事業事務局（以下、「本事務局」という。）に登録された者をいいます。ただし、当該登録により、本事務局及び国（以下、「本事務局等」という。）は、こどもエコすまい支援事業者として登録された事業者に対して何らその優良性を認定するものではありません。
                    </li>
                    <li><span>２．</span>こどもエコすまい支援事業者としての登録を希望する者は、事業者登録規約（住宅省エネ2023キャンペーン）に基づき住宅省エネ支援事業者（以下、「住宅省エネ支援事業者」という。）としての登録を申請する際に、又は住宅省エネ支援事業者としての登録を受けた後に、本事業への参加を申告することによって、登録を受けるものとします。
                    </li>
                    <li><span>３．</span>本事業者登録規約（こどもエコすまい支援事業）（以下、「本規約」という。）に基づき、こどもエコすまい支援事業者として登録されるためには、以下①及び②の要件（以下、「参加要件」という。）が満たされていなければなりません。登録後に参加要件のいずれかが満たされなくなった場合には、当該登録事業者
                        は、直ちに本事務局にその旨を通知しなければならないものとします。本事務局は、当該通知を受けた場合、又は参加要件のいずれかを満たさなくなったことが明らかな場合は、速やかにその登録を停止（本規約第10条第2項に規定）するものとします。
                        <ol class="custom-list font-sm">
                            <li><span>&#9312;</span>事業者登録規約（住宅省エネ2023キャンペーン）に基づき住宅省エネ支援事業者として登録を受け、かつ当該登録の要件を充足しており、当該登録を停止されていない者
                            </li>
                            <li><span>&#9313;</span>以下に該当しない者
                                <ol class="custom-list">
                                    <li><span>・</span>過去3カ年度内に国土交通省住宅局所管事業補助金（以下、「住宅局補助金」という。）において、交付決定の取り消しに相当する理由で補助金の返還を求められたことのある者、又は当該住宅局補助金の規約その他これに類するものに反して若しくは虚偽の申告により、申請するなどの不正な行為を行った者（団体を含む）</li>
                               </ol>
                            </li>
                        </ol>
                    </li>
                </ol>
            </div>
            <div class="clause">
                <p class="clause-title">第２条 共同事業者</p>
                <p class="clause-explanation">
                    &emsp;共同事業者とは、本事業の利用を希望する消費者等（以下、単に「消費者等」という。）のうち、こどもエコすまい支援事業者と工事請負契約又は不動産売買契約を締結し、共同して補助事業を行う住宅所有者等をいいます。なお、当該契約の当事者のみで本事業の世帯に関する要件を満たすことができない場合、当該要件を満たすために必要な同居する配偶者等を含みます。
                </p>
            </div>
            <div class="clause">
                <p class="clause-title">第３条 こどもエコすまい支援事業者の責任</p>
                <p class="clause-explanation">
                    &emsp;こどもエコすまい支援事業者は、以下①～⑥に掲げる事項全てについてその責任を有します。
                </p>
                <ol class="custom-list font-sm">
                    <li><span>&#9312;</span>こどもエコすまい支援事業補助金交付規程（以下、「交付規程」という。）、本事務局が作成するマニュアル及び規約（本規約を含む。）並びに本事務局等が行った告知・発表等（以下、「マニュアル等」という。）に定める事項の遵守
                    </li>
                    <li><span>&#9313;</span>本事務局が本事業のホームページやメール等を通じて行う連絡事項の確認</li>
                    <li><span>&#9314;</span>消費者等に対して本事業の内容についての正しい説明を行うこと</li>
                    <li><span>&#9315;</span>共同事業者から依頼を受けた本補助金の交付申請手続きを遅滞なく、また適正に実施すること</li>
                    <li><span>&#9316;</span>本事務局から交付される本補助金の共同事業者への還元</li>
                    <li><span>&#9317;</span>本事業の適正かつ円滑な運営のために本事務局及び国が行う調査及び活動への協力</li>
                </ol>
            </div>
            <div class="clause">
                <p class="clause-title">第４条 交付申請の手続き</p>
                <p class="clause-explanation">
                    &emsp;本補助金の交付申請（交付申請の予約を含む。）にあたり、こどもエコすまい支援事業者と共同事業者は交付規程に定める「共同事業実施規約」（以下、「共同事業実施規約」という。）を締結するとともに、共同事業者はこどもエコすまい支援事業者に対して本補助金の交付申請を委託します。委託を請けたこどもエコすまい支援事業者は、遅滞なく本事務局が提供する本補助金の交付申請のためのWebシステム（以下、「住宅省エネポータル」という。）により交付申請を提出しなければなりません。</p>
            </div>
        </div>
        <div style="float: left; width: 50%">
            <div class="clause">
                <p class="clause-title">第５条 本補助金の還元方法</p>
                <p class="clause-explanation">
                    &emsp;こどもエコすまい支援事業者が、前条の交付申請により本補助金の交付を受けたとき、こどもエコすまい支援事業者は受領した当該補助金相当額について、直ちに以下の①②いずれかの方法 により共同事業者に還元しなければなりません。還元方法については、共同事業実施規約の締結時に双方で確認する必要があります。ただし、②については補助金が交付された時点において、契約に係る代金が精算済みであり、共同事業者のこどもエコすまい支援事業者に対する債務に充当できないことが見込まれる場合に限ります。
                    <ol class="custom-list font-sm">
                        <li><span>&#9312;</span>契約に係る共同事業者のこどもエコすまい支援事業者に対する債務（最終支払いに限る。）に充当する方法</li>
                        <li><span>&#9313;</span>現金で支払う方法</li>
                    </ol>
                </p>
            </div>
            <div class="clause">
                <p class="clause-title">第６条 完了報告の提出</p>
                <p class="clause-explanation">
                    &emsp;補助事業が新築住宅の建築・購入に該当する場合、本補助金の交付後であっても、こどもエコすまい支援事業者は本補助金の対象である新築住宅を引渡し及び共同事業者の入居が完了したことを、本事務局が定める方法により、本事務局が定める期限までに本事務局に対して報告（以下、「完了報告」という。）を行わなければなりません。本事務局が定める期限までに完了報告の提出がない場合、又は提出された完了報告により補助事業の要件を満たさないことが確認された場合、本事務局は交付規程第15の規定に基づき当該補助事業の交付決定を取り消すことがあります。
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第７条 本事業の留意点</p>
                <p class="clause-explanation">
                    &emsp;こどもエコすまい支援事業者は、本補助金の交付申請にあたり以下①～⑤の留意点について理解しておかなければなりません。
                    <ol class="custom-list font-sm">
                        <li><span>&#9312;</span>本事業の予算には限りがあり、令和5年12月末以前であっても、交付申請（予約を含む。以下本条において同じ）が予算上限に達した段階で受付を終了すること。よって、可能な限り早い時期に本補助金の交付申請を提出することが望ましいこと</li>
                        <li><span>&#9313;</span>本補助金の交付額は、交付申請を行った額から減額されることがあること</li>
                        <li><span>&#9314;</span>補助金の還元方法が第5条①である場合、こどもエコすまい支援事業者は本補助金の交付から還元までの期間について本補助金を保持しなければならないこと</li>
                        <li><span>&#9315;</span>共同事業者の協力が得られず完了報告の提出ができない等の場合であっても、交付規程第15に基づく本補助金の返還はこどもエコすまい支援事業者が行わなければならないこと</li>
                        <li><span>&#9316;</span>本規約第9条の①～⑧に反する疑いがある場合、本事務局等が行う調査及び確認（現地確認を含む。）に応じなければならないこと。また、同条③に該当する疑いがある場合、本事務局は当該他の補助金の所管先に対して、当該交付申請の情報を提供し、合同して調査及び確認を行うことがあること</li>
                    </ol>
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第８条 従業員等への周知</p>
                <p class="clause-explanation">
                    &emsp;こどもエコすまい支援事業者は、本事業に関わる従業員及びその取引先等（以下、「従業員等」という。）に対して、こども エコすまい支援事業者の業務、責任、留意点、禁止事項等について、周知と教育を徹底しなければなりません。
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第９条  禁止事項</p>
                <p class="clause-explanation">
                    &emsp;こどもエコすまい支援事業者（こどもエコすまい支援事業者になろうとする者を含む。）及びその従業員等は、以下①～⑧に掲げる行為を行ってはなりません。
                    <ol class="custom-list font-sm">
                        <li><span>&#9312;</span>不正、虚偽によりこどもエコすまい支援事業者の登録を受け、又は登録を申請すること</li>
                        <li><span>&#9313;</span>自らの不正、虚偽により、又は共同事業者の不正、虚偽を知りながら本補助金の交付を受け、又は本補助金の交付申請（交付申請の予約を含む。以下本条において同じ。）をすること</li>
                        <li><span>&#9314;</span>同一の補助事業に対して、国庫補助を財源とする他の補助金と併用して交付申請を行い、重複して補助をうけること</li>
                        <li><span>&#9315;</span>消費者等に対して、本事業の制度及び本事務局等の名称、商標、又は称呼等を用いて、当該こどもエコすまい支援事業者が取り扱う補助事業の優良性を誤認させるおそれのある言動、表示及び広告をすること</li>
                        <li><span>&#9316;</span>本事務局等に対する債権を、第三者に譲渡し、若しくは移転し、又は担保に供すること</li>
                    </ol>
                </p>
            </div>

        </div>

    </div>

    <!-- 5ページ目 -->
    <div class='page font-sm'>
        <div class="page-header">（様式１別紙②）</div>
        <div style="float: left; width: 50%">
            <div class="clause">
                <p class="clause-explanation">
                    <ol class="custom-list font-sm">
                        <li><span>&#9317;</span>本事務局等に対する一切の権利及び義務並びに本規約に基づき締結される本事務局との間の契約上の地位について、本事務局の同意なしに第三者に対して譲渡し若しくは移転し、又は担保に供すること</li>
                        <li><span>&#9318;</span>本事務局等及び消費者等を誹謗中傷し、又は名誉若しくは信用を傷つける言動をすること</li>
                        <li><span>&#9319;</span>その他、本事務局等が本事業の趣旨に反すると判断する行為、及び本事務局等との信頼関係を損なう一切の行為</li>
                    </ol>
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第１０条  登録の停止</p>
                <p class="clause-explanation">
                    <ol class="custom-list font-sm">
                        <li><span>１．</span>本事務局は、こどもエコすまい支援事業者又はその従業員等が本規約を含むマニュアル等に規定した事項に反する行為を行い、又は行おうとしたと本事務局が判断した場合、こどもエコすまい支援事業者としての登録を停止することがあります。</li>
                        <li><span>２．</span>こどもエコすまい支援事業者の登録停止を受けたこどもエコすまい支援事業者は、本規約第4条に基づく交付申請を行うことはできません。</li>
                    </ol>
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第１１条  補助金の返還</p>
                <p class="clause-explanation">
                    <ol class="custom-list font-sm">
                        <li><span>１．</span>本事務局は、こどもエコすまい支援事業者が前条に基づきこどもエコすまい支援事業者としての登録を停止された場合、又は本補助金の交付決定が交付規程第15の規定に基づき取り消された場合、補助事業の全部若しくは一部について補助金を交付せず、その交付を停止し、又は交付した本補助金の全部若しくは一部の返還を命じることがあります。</li>
                        <li><span>２．</span>こどもエコすまい支援事業者は、前項による返還命令を受けた場合、速やかに本補助金の全部又は一部を本事務局に返還しなければなりません。</li>
                        <li><span>３．</span>本事務局は、こどもエコすまい支援事業者に対して、第1項の返還命令の際に、本補助金受領の日から返還までの日数に応じ、返還命令の対象となる本補助金の額（その一部を返還した場合におけるその後の期間については、既返還額を控除した額）につき、年10.95％の割合で計算した加算金の支払い及び返還手続きに要する手数料の支払いを求めることができます。</li>
                    </ol>
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第１２条 本規約の変更等</p>
                <p class="clause-explanation">
                    &emsp;本事務局が本規約を変更するときは、あらかじめ変更の7日前までに、本事業のホームページ及び住宅省エネポータルにより、本規約の変更をする旨、変更内容及び変更の効力発生時期を通知するものとします。ただし、上記に関わらず、当該変更がこどもエコすまい支援事業者一般の利益に適合する場合、又は緊急の必要がある場合その他やむを得ない事情がある場合には、周知期間を短縮し、又は変更の効力発生後速やかに上記の方法において周知することができるものとします。変更後の本規約については、本事務局が定めた効力発生時期より、効力を生じるものとします。
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第１３条  免責</p>
                <p class="clause-explanation">
                    <ol class="custom-list font-sm">
                        <li><span>１．</span>本事務局等は、本事業に関して、こどもエコすまい支援事業者（こどもエコすまい支援事業者になろうとする者を含む。以下本条において同じ。）に生じたあらゆる損失等について、一切の責任及び義務を負わないものとします。ただし、本事務局等の故意又は重過失によるものである場合には、本事務局等は、当該こどもエコすまい支援事業者に直接かつ現実に生じた損害に限り、責任を負うものとします。</li>
                        <li><span>２．</span>本事務局等は、本事業に関して、こどもエコすまい支援事業者と、第三者との間に生じた紛争やあらゆる損失等について、一切の責任及び義務を負わないものとします。</li>
                    </ol>
                </p>
            </div>
        </div>
        <div style="float: left; width: 50%">

            <div class="clause">
                <p class="clause-title">第１４条   本事務局による個人情報の利用</p>
                <p class="clause-explanation">
                    &emsp;本事業において本事務局が取得した個人情報の利用、保存及び管理には、本事業のプライバシーポリシーが適用されます。こどもエコすまい支援事業者は、共同事業者が本事務局に提供する共同事業者の個人情報について、本事業のプライバシーポリシーに従って利用、保管及び管理等されることについて、共同事業者の同意を得るものとします。
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第１５条  こどもエコすまい支援事業者の秘密保持義務及び個人情報保護義務</p>
                <p class="clause-explanation">
                    <ol class="custom-list font-sm">
                        <li><span>１．</span>こどもエコすまい支援事業者（こどもエコすまい支援事業者になろうとする者を含む。以下本条において同じ。）は、本事業に関連して、本事務局等から開示される技術上又は営業上の情報（以下、「秘密情報」という。）を、第三者に漏洩、開示又は公表してはならないものとします。ただし、本事務局の書面による事前の同意を得た場合はこの限りではありません。</li>
                        <li><span>２．</span>こどもエコすまい支援事業者は、本事業上の義務を履行する目的に限り、秘密情報を複製、加工、及び利用することができます。</li>
                        <li><span>３．</span>こどもエコすまい支援事業者は、本事務局から指示を受けた場合、当該指示に従い速やかに、秘密情報（秘密情報を複製及び加工したものを含む。）を返却、廃棄又は消去するものとします。当該返却、廃棄、又は消去に要する費用は、こどもエコすまい支援事業者が負担するものとします。</li>
                        <li><span>４．</span>こどもエコすまい支援事業者は、秘密情報及び個人情報の安全な管理のために、組織的、人的、物理的及び技術的な安全措置を講じなければならないものとします。</li>
                        <li><span>５．</span>本事務局が要求する場合、こどもエコすまい支援事業者は、秘密情報及び個人情報の管理状態を本事務局に報告するものとします。また、本事務局は、こどもエコすまい支援事業者に対し、事前の書面による通知により、本事務局がこどもエコすまい支援事業者の業務の適正を確認するために必要と認める範囲内において、こどもエコすまい支援事業者の事業所その他秘密情報及び個人情報の管理場所又は使用場所に立入り、関連する書類等の提出を求める等秘密情報及び個人情報の管理等の情報セキュリティ監査を行うことができるものとします。</li>
                        <li><span>６．</span>本事務局及びこどもエコすまい支援事業者は、秘密情報又は個人情報の漏洩等の事故が発生し、又は発生したおそれのあることを知った場合、当該事故の発生原因の如何に関わらず、直ちにその旨を相手方に報告し、本事務局とこどもエコすまい支援事業者が協議の上、適切な措置を講じるものとします。</li>
                        <li><span>７．</span>本事務局及びこどもエコすまい支援事業者は、前項の事故について、事故を引き起こした責任がいずれにあるかを協議の上、確定するものとします。</li>
                    </ol>
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第１６条  専属的合意管轄裁判所</p>
                <p class="clause-explanation">
                    &emsp;本事業に関して、本事務局とこどもエコすまい支援事業者又はこどもエコすまい支援事業者になろうとする者との間に生じた紛争については、東京簡易裁判所又は東京地方裁判所を第一審の専属的合意管轄裁判所とする。
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第１７条　雑則</p>
                <p class="clause-explanation">
                    &emsp;本規約に定めるもののほか、業務の実施に必要な事項については、マニュアル等に定めるものとする。
                </p>
            </div>

            <div class="revision-date">
                <p>制定日&emsp;令和5年1月17日</p>
            </div>

        </div>
        <div style="clear: both"></div>

    </div>

    <!-- 6ページ目 -->
    <div class='page font-sm'>
        <div class="page-header">（様式１別紙③）</div>
        <table style="width: 100%">
            <tr>
                <td class="mark1">別紙③</td>
                <td>
                    <div class="page-title">事業者登録規約（先進的窓リノベ事業）</div>
                </td>
                <td class="mark2">提出不要</td>
            </tr>
        </table>

        <p class="font-sm">
            先進的窓リノベ事業（以下、「本事業」という。）は、「住宅の断熱性能向上のための先進的設備導入促進事業補助金交付要綱」（令和4年12月6日20221114財製第2号）及び「脱炭素化産業成長促進対策費補助金（断熱窓への改修促進等による家庭部門の省エネ・省 CO2加速化支援事業）交付要綱」（令和4年12月2日環地温発第2212024号）（以下併せて、「交付要綱」という。）に基づき、先進的窓リノベ事業事務局（以下、「本事務局」という。）が登録し公表する窓又は窓ガラス（以下、「対象製品」という。）の導入を行うリフォーム工事（以下、「補助事業」という。）に対して、補助金（以下、「本補助金」という。）の交付を行う事業です。            
        </p>

        <div style="float: left; width: 50%">

            <div class="clause">
                <p class="clause-title">第１条  窓リノベ事業者</p>
                <p class="clause-explanation">
                    <ol class="custom-list font-sm">
                        <li><span>１．</span>窓リノベ事業者とは、次条に定める共同事業者と補助事業に係る工事請負契約を締結する工事施工事業者で本事務局に登録をされた者をいいます。ただし、当該登録により、本事務局及び国（以下、「本事務局等」という。）は窓リノベ事業者として登録された事業者に対して何らその優良性を認定するものではありません。</li>
                        <li><span>２．</span>窓リノベ事業者としての登録を希望する者は、事業者登録規約（住宅省エネ2023キャンペーン）に基づき住宅省エネ支援事業者（以下、「住宅省エネ支援事業者」という。）としての登録を申請する際に、又は住宅省エネ支援事業者としての登録を受けた後に、本事業への参加を申告することによって、登録を受けるものとします。</li>
                        <li><span>３．</span>
                            事業者登録規約（先進的窓リノベ事業）（以下、「本規約」という。）に基づき、窓リノベ事業者として登録されるためには、以下①及び②の要件（以下、「参加要件」という。）が満たされていなければなりません。登録後に参加要件のいずれかが満たされなくなった場合には、当該登録事業者は、直ちに本事務局にその旨を通知しなければならないものとします。通知を受けた場合、又は参加要件のいずれかを満たさなくなったことが明らかな場合は、本事務局は、速やかにその登録を停止（本規約第9条第2項に規定）するものとします。
                            <ol class="custom-list font-sm">
                                <li><span>&#9312;</span>事業者登録規約（住宅省エネ2023キャンペーン）に基づき住宅省エネ支援事業者として登録を受け、かつ当該登録の要件を充足しており、当該登録を停止されていない者</li>
                                <li><span>&#9313;</span>以下に該当しない者
                                    <ul>
                                        <li>
                                            過去3カ年度内に経済産業省製造産業局又は環境省地球環境局所管事業補助金（以下、「所管補助金」という。）において、交付決定の取り消しに相当する理由で補助金の返還を求められたことのある者、又は当該所管補助金の規約その他これに類するものに反して若しくは虚偽の申告により、申請するなどの不正な行為を行った者（団体を含む）
                                        </li>
                                    </ul>
                                </li>
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
                <p class="clause-title">第３条  窓リノベ事業者の責任</p>
                <p class="clause-explanation">
                    &emsp;窓リノベ事業者は、以下①～⑦に掲げる事項全てについてその責任を有します。                
                    <ol class="custom-list font-sm">
                        <li><span>&#9312;</span>住宅の断熱性能向上のための先進的設備導入促進事業費補助金交付規程、脱炭素化産業成長促進対策費補助金（断熱窓への改修促進等による家庭部門の省エネ・省CO2加速化支援事業）交付規程（以下、「交付規程」という。）、本事務局が作成するマニュアル及び規約（本規約を含む。）並びに本事務局等が行った告知・発表等（以下、「マニュアル等」という。）に定める事項の遵守</li>
                        <li><span>&#9313;</span>本事務局が本事業のホームページやメールの送信を通じて行う連絡事項の確認</li>
                        <li><span>&#9314;</span>消費者等に対して本事業の内容についての正しい説明を行うこと</li>
                        <li><span>&#9315;</span>共同事業者から依頼を受けた本補助金の交付申請手続きを遅滞なくまた適正に実施すること</li>
                        <li><span>&#9316;</span>住宅のリフォーム等による省エネルギー効果について消費者等に対して情報提供をすること</li>
                        <li><span>&#9317;</span>本事務局から交付される本補助金の共同事業者への還元</li>
                        <li><span>&#9318;</span>本事業の適正かつ円滑な運営のために本事務局及び国が行う調査及び活動への協力</li>
                    </ol>
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第４条  交付申請の手続き</p>
                <p class="clause-explanation">
                    &emsp;本補助金の交付申請（交付申請の予約を含む。）にあたり、窓リノベ事業者と共同事業者は本事務局が定める所定の「共同事業実施規約」（以下、「共同事業実施規約」という。）を締結するとともに、共同事業者は窓リノベ事業者に対して本補助金の交付申請を委託します。委託を請けた窓リノベ事業者は、遅滞なく本事務局が提供する本補助金の交付申請のための Webシステム（以下、「住宅省エネポータル」という。）により交付申請を提出しなければなりません。本事務局は、提出された交付申請書類に不備又は不足を発見した場合、住宅省エネポータルを通じた通知又は電話により確認を行うことがあります。窓リノベ事業者は本事務局からの確認について、指定される期限までに回答しなければなりません。
                </p>
            </div>
        </div>

        <div style="float: left; width: 50%">

            <div class="clause">
                <p class="clause-title">第５条 本補助金の還元方法</p>
                <p class="clause-explanation">
                    &emsp;窓リノベ事業者が、前条の交付申請により本補助金の交付を受けたとき、窓リノベ事業者は受領した当該補助金相当額について、直ちに以下の①②いずれかの方法により共同事業者に還元しなければなりません。還元方法については、共同事業実施規約の締結時に双方で確認する必要があります。ただし、②については補助金が交付された時点において、契約に係る代金が精算済みであり、共同事業者の窓リノベ事業者に対する債務に充当できないことが見込まれる場合に限ります。
                    <ol class="custom-list font-sm">
                        <li><span>&#9312;</span>契約に係る共同事業者の窓リノベ事業者に対する債務（最終支払いに限る。）に充当する方法</li>
                        <li><span>&#9313;</span>現金で支払う方法</li>
                    </ol>
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第６条 本事業の留意点</p>
                <p class="clause-explanation">
                    &emsp;窓リノベ事業者は、本補助金の交付申請にあたり以下①～④の留意点について理解しておかなければなりません。
                    <ol class="custom-list font-sm">
                        <li><span>&#9312;</span>本事業の予算には限りがあり、令和5年12月末以前であっても、交付申請（予約を含む。以下本条において同じ）が予算上限に達した段階で受付を終了すること。よって、可能な限り早い時期に本補助金の交付申請を提出することが望ましいこと</li>
                        <li><span>&#9313;</span>同一の対象製品についてこどもエコすまい支援事業補助金交付要綱（令和4年12月2日国住生第250号。）に基づき実施されるこどもエコすまい支援事業（以下、「こどもエコすまい支援事業」という。）と重複して補助金の交付を受け、又は受けようとした場合、その事由によらず本事業において当該補助対象製品に対する補助を受けられないこと</li>
                        <li><span>&#9314;</span>本補助金の交付額は、交付申請を行った額から減額されることがあること</li>
                        <li><span>&#9315;</span>本規約第8条の①～⑨に反する疑いがある場合、本事務局等が行う調査及び確認（現地確認を含む。）に応じなければならないこと。また、同条④に該当する疑いがある場合、本事務局は当該他の補助金の所管先に対して、当該交付申請の情報を提供し、合同して調査及び確認を行うことがあること</li>
                    </ol>
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第７条 従業員等への周知</p>
                <p class="clause-explanation">
                    &emsp;窓リノベ事業者は、本事業に関わる従業員及びその取引先等（以下、「従業員等」という。）に対して、窓リノベ事業者の業務、責任、留意点、禁止事項等について、周知と教育を徹底しなければなりません。
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第８条  禁止事項</p>
                <p class="clause-explanation">
                    &emsp;窓リノベ事業者（窓リノベ事業者になろうとする者を含む。以下本条において同じ。）及びその従業員等は、以下①～⑨に掲げる行為を行ってはなりません。
                    <ol class="custom-list font-sm">
                        <li><span>&#9312;</span>不正、虚偽により窓リノベ事業者の登録を受け、又は登録を申請すること</li>
                        <li><span>&#9313;</span>自らの不正、虚偽により、又は共同事業者の不正、虚偽を知りながら本補助金の交付を受け、又は本補助金の交付申請（交付申請の予約を含む。以下本条において同じ。）をすること</li>
                        <li><span>&#9314;</span>窓リノベ事業者の登録申請書の提出前に着工した補助事業について交付申請をすること</li>
                        <li><span>&#9315;</span>同一の補助事業に対して、こどもエコすまい支援事業を含む国庫補助を財源とする他の補助金を併用して交付申請を行い、重複して補助を受けること</li>
                        <li><span>&#9316;</span>消費者等に対して、本事業の制度及び本事務局等の名称、商標、又は称呼等を用いて、当該窓リノベ事業者が取り扱う補助事業の優良性を誤認させるおそれのある言動、表示及び広告をすること</li>
                        <li><span>&#9317;</span>本事務局等に対する債権を、第三者に譲渡し、若しくは移転し、又は担保に供すること</li>
                        <li><span>&#9318;</span>本事務局等に対する一切の権利及び義務並びに本規約に基づき締結される本事務局との間の契約上の地位について、本事務局の同意なしに第三者に対して譲渡し、若しくは移転し、又は担保に供すること</li>
                        <li><span>&#9319;</span>本事務局等及び消費者等を誹謗中傷し、又は名誉若しくは信用を傷つける言動をすること</li>
                        <li><span>&#9320;</span>その他、本事務局等が本事業の趣旨に反すると判断する行為、及び本事務局等との信頼関係を損なう一切の行為</li>
                    </ol>
                </p>
            </div>
        </div>
        <div style="clear: both"></div>

    </div>

    <!-- 7ページ目 -->
    <div class='page font-sm'>
        <div class="page-header">（様式１別紙③）</div>
        <div style="float: left; width: 50%">
            <div class="clause">
                <p class="clause-title">第９条  登録の停止</p>
                <p class="clause-explanation">
                    <ol class="custom-list font-sm">
                        <li><span>１．</span>本事務局は、窓リノベ事業者又はその従業員等が本規約を含むマニュアル等に規定した事項に反する行為を行い、又は行おうとしたと本事務局が判断した場合、窓リノベ事業者としての登録を停止することがあります。</li>
                        <li><span>２．</span>窓リノベ事業者の登録停止を受けた窓リノベ事業者は、本規約第4条に基づく交付申請を行うことはできません。</li>
                    </ol>
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第１０条 補助金の返還</p>
                <p class="clause-explanation">
                    <ol class="custom-list font-sm">
                        <li><span>１．</span>本事務局は、窓リノベ事業者が前条に基づき窓リノベ事業者としての登録を停止した場合、又は本補助金の交付決定が取り消された場合、補助事業の全部若しくは一部について補助金を交付せず、その交付を停止し、又は交付した本補助金の全部若しくは一部の返還を命じることがあります。</li>
                        <li><span>２．</span>窓リノベ事業者は、前項による返還命令を受けた場合、速やかに本補助金の全部又は一部を本事務局に返還しなければなりません。</li>
                        <li><span>３．</span>本事務局は、窓リノベ事業者に対して、第1項の返還命令の際に、本補助金受領の日から返還までの日数に応じ、返還命令の対象となる本補助金の額（その一部を返還した場合におけるその後の期間については、既返還額を控除した額）につき、年 10.95％の割合で計算した加算金の支払い及び返還手続きに要する手数料の支払いを求めることができます。</li>
                    </ol>
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第１１条 本規約の変更等</p>
                <p class="clause-explanation">
                    &emsp;本事務局が本規約を変更するときは、あらかじめ変更の7日前までに、本事業のホームページ及び住宅省エネポータルにより、本規約の変更をする旨、変更内容及び変更の効力発生時期を通知するものとします。ただし、上記に関わらず、当該変更が窓リノベ事業者一般の利益に適合する場合、又は緊急の必要がある場合その他やむを得ない事情がある場合には、周知期間を短縮し、又は変更の効力発生後速やかに上記の方法において周知することができるものとします。変更後の本規約については、本事務局が定めた効力発生時期より、効力を生じるものとします。                    
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
                    &emsp;本事業において本事務局が取得した個人情報の利用、保存及び管理には、本事業のプライバシーポリシーが適用されます。窓リノベ事業者は、共同事業者が本事務局に提供する共同事業者の個人情報について、本事業のプライバシーポリシーに従って利用、保管及び管理等されることについて、共同事業者の同意を取得するものとします。                
                </p>
            </div>

        </div>
        <div style="float: left; width: 50%">

            <div class="clause">
                <p class="clause-title">第１４条  窓リノベ事業者の秘密保持義務及び個人情報保護義務</p>
                <p class="clause-explanation">
                    <ol class="custom-list font-sm">
                        <li><span>１．</span>窓リノベ事業者（窓リノベ事業者になろうとする者を含む。以下本条において同じ。）は、本事業に関連して、本事務局等から開示される技術上又は営業上の情報（以下、「秘密情報」という。）を、第三者に漏洩、開示又は公表してはならないものとします。ただし、本事務局の書面による事前の同意を得た場合はこの限りではありません。</li>
                        <li><span>２．</span>窓リノベ事業者は、本事業上の義務を履行する目的に限り、秘密情報を複製、加工、及び利用することができます。</li>
                        <li><span>３．</span>窓リノベ事業者は、本事務局から指示を受けた場合、当該指示に従い速やかに、秘密情報（秘密情報を複製及び加工したものを含む。）を返却、廃棄又は消去するものとします。当該返却、廃棄、又は消去に要する費用は、窓リノベ事業者が負担するものとします。</li>
                        <li><span>４．</span>窓リノベ事業者は、秘密情報及び個人情報の安全な管理のために、組織的、人的、物理的及び技術的な安全措置を講じなければならないものとします。</li>
                        <li><span>５．</span>本事務局が要求する場合、窓リノベ事業者は、秘密情報及び個人情報の管理状態を本事務局に報告するものとします。また、本事務局は、窓リノベ事業者に対し、事前の書面による通知により、本事務局が窓リノベ事業者の業務の適正を確認するために必要と認める範囲内において、窓リノベ事業者の事業所その他秘密情報及び個人情報の管理場所又は使用場所に立入り、関連する書類等の提出を求める等秘密情報及び個人情報の管理等の情報セキュリティ監査を行うことができるものとします。</li>
                        <li><span>６．</span>本事務局及び窓リノベ事業者は、秘密情報又は個人情報の漏洩等の事故が発生し、又は発生したおそれのあることを知った場合、当該事故の発生原因の如何に関わらず、直ちにその旨を相手方に報告し、本事務局と窓リノベ事業者が協議の上、適切な措置を講じるものとします。</li>
                        <li><span>７．</span>本事務局及び窓リノベ事業者は、前項の事故について、事故を引き起こした責任がいずれにあるかを協議の上、確定するものとします。</li>
                    </ol>
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第１５条  専属的合意管轄裁判所</p>
                <p class="clause-explanation">
                    &emsp;本事業に関して、本事務局と窓リノベ事業者又は窓リノベ事業者になろうとする者との間に生じた紛争については、東京簡易裁判所又は東京地方裁判所を第一審の専属的合意管轄裁判所とする。
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第１６条  雑則</p>
                <p class="clause-explanation">
                    &emsp;規約に定めるもののほか、業務の実施に必要な事項については、マニュアル等に定めるものとする。
                </p>
            </div>

            <div class="revision-date">
                <p>制定日&emsp;令和5年1月17日</p>
            </div>

        </div>
        <div style="clear: both"></div>

    </div>

    <!-- 8ページ目 -->
    <div class='page font-sm'>
        <div class="page-header">（様式１別紙④）</div>
        <table style="width: 100%">
            <tr>
                <td class="mark1">別紙④</td>
                <td>
                    <div class="page-title">事業者登録規約（給湯省エネ事業）</div>
                </td>
                <td class="mark2">提出不要</td>
            </tr>
        </table>

        <p class="font-sm">
            &emsp;給湯省エネ事業（以下、「本事業」という。）は、高効率給湯器導入促進による家庭部門の省エネルギー推進事業費補助金交付要綱（令和4年12月2日20221111財資第11号。）（以下「交付要綱」という。）に基づき、給湯省エネ事業事務局（以下、「本事務局」という。）が登録し公表する高効率給湯器（以下、「対象機器」という。）の導入を行う新築住宅の建築及び購入、リフォーム工事並びにリース利用（以下、「補助事業」という。）に対して、補助金（以下、「本補助金」という。）の交付を行う事業です。
        </p>

        <div style="float: left; width: 50%">

            <div class="clause">
                <p class="clause-title">第１条  給湯省エネ事業者</p>
                <p class="clause-explanation">
                    <ol class="custom-list font-sm">
                        <li><span>１．</span>給湯省エネ事業者とは、次条に定める補助対象者と補助事業に係る工事請負契約、不動産売買契約、リース契約及びエネルギー売買契約を締結する者で、本事務局に登録をされた者をいいます。ただし、本事務局及び国（以下、「本事務局等」という。）は給湯省エネ事業者として登録された事業者に対して何らその優良性を認定するものではありません。</li>
                        <li><span>２．</span>給湯省エネ事業者としての登録を希望する者は、事業者登録規約（住宅省エネ2023キャンペーン）に基づき住宅省エネ支援事業者（以下、「住宅省エネ支援事業者」という。）としての登録を申請する際に、又は住宅省エネ支援事業者としての登録を受けた後に、本事業への参加を申告することによって、登録を受けるものとします。</li>
                        <li><span>３．</span>本事業者登録規約（給湯省エネ事業）（以下、「本規約」という）に基づき、給湯省エネ事業者として登録されるためには、以下①の要件（以下、「参加要件」という。）が満たされていなければなりません。登録後に参加要件のいずれかが満たされなくなった場合には、当該登録事業者は、直ちに本事務局にその旨を通知しなければならないものとします。通知を受けた場合、又はその他参加要件のいずれかを満たさなくなったことが明らかな場合は、本事務局は、速やかにその登録を停止（本規約第8条第2項に規定）するものとします。① 事業者登録規約（住宅省エネ2023キャンペーン）に基づき住宅省エネ支援事業者として登録を受け、かつ当該登録の要件を充足しており、当該登録を停止されていない者</li>
                    </ol>
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第２条  補助対象者</p>
                <p class="clause-explanation">
                    &emsp;補助対象者とは、本事業の利用を希望する消費者等（以下、単に「消費者等」という。）のうち、給湯省エネ事業者と工事請負契約、不動産売買契約、リース契約（賃貸借契約）又はエネルギー販売契約を締結し、対象機器の導入を行う住宅所有者等をいいます。 
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第３条  給湯省エネ事業者の責任</p>
                <p class="clause-explanation">
                    <ol class="custom-list font-sm">
                        <li><span>&#9312;</span>高効率給湯器導入促進による家庭部門の省エネルギー推進事業費補助金交付規程（以下。「交付規程」という。）、本事務局が作成するマニュアル及び規約（本規約を含む。）並びに本事務局等が行った告知・発表等（以下、「マニュアル等」という。）に定める事項の遵守</li>
                        <li><span>&#9313;</span>本事務局が本事業のホームページやメールの送信を通じて行う連絡事項の確認</li>
                        <li><span>&#9314;</span>消費者等に対して、本事務局が定めるマニュアル等及び「交付申請同意事項」の内容について説明を行うこと</li>
                        <li><span>&#9315;</span>補助対象者から受託した本補助金の交付申請手続きを遅滞なくまた適正に実施すること</li>
                        <li><span>&#9316;</span>住宅のリフォーム等による省エネルギー効果について消費者等に対する情報提供すること</li>
                        <li><span>&#9317;</span>補助事業の経理等に係る書類を保管する補助対象者に、当該保管に必要な書類の返却及び引継ぎを行うこと</li>
                        <li><span>&#9318;</span>補助対象者が不正、虚偽により本補助金の交付申請を行う、又は行おうとしていることを知ったときは、直ちに本事務局に報告を行うこと</li>
                        <li><span>&#9319;</span>本事業の適正かつ円滑な運営のために本事務局及び国が行う調査及び活動への協力</li>
                    </ol>
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第４条  交付申請の手続き</p>
                <p class="clause-explanation">
                    &emsp;補助対象者は、本事務局が定める所定の「給湯省エネ事業 交付申請等委任状」（以下、「委任状」という。）より、給湯省エネ事業者に本補助金の交付申請手続きを委任します。委任を受けた給湯省エネ事業者は、遅滞なく本事務局が提供する本補助金の交付申請のためのWebシステム（以下、「住宅省エネポータル」という。）により交付申請を提出しなければなりません。本事務局は、提出された交付申請書類に不備又は不足を発見した場合、住宅省エネポータルを通じた通知又は電話により確認を行うことがあります。給湯省エネ事業者は本事務局からの確認について、指定される期限までに回答しなければなりません。
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第５条 本事業の留意点</p>
                <p class="clause-explanation">
                    &emsp;給湯省エネ事業者は、本補助金の交付申請にあたり以下①～④の留意点について理解しておかなければなりません。
                </p>
            </div>

        </div>

        <div style="float: left; width: 50%">

            <div class="clause">
                <p class="clause-explanation">
                    <ol class="custom-list font-sm">
                        <li><span>&#9312;</span>本事業の予算には限りがあり、令和5年12月末以前であっても、交付申請が予算上限に達した段階で受付を終了すること。よって、可能な限り早い時期に本補助金の交付申請を提出することが望ましいこと</li>
                        <li><span>&#9313;</span>同一の補助事業について、こどもエコすまい支援事業補助金交付要綱（令和4年12月2日国住生第250号。）に基づき実施されるこどもエコすまい支援事業（以下、「こどもエコすまい支援事業」という。）と重複して補助金の交付を受け た、又は受けようとした場合、その事由によらず本事業において当該補助事業に対する補助を受けられないこと</li>
                        <li><span>&#9314;</span>本補助金の交付額は、交付申請を行った額から減額されることがあること</li>
                        <li><span>&#9315;</span>本規約第７条の①～⑨に反する疑いがある場合、本事務局等が行う調査及び確認（現地確認を含む）に応じなければならないこと。また、同条④に該当する疑いがある場合、本事務局は当該他の補助金の所管先に対して、当該交付申請の情報を提供し、合同して調査及び確認を行うことがあること</li>
                    </ol>
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第６条 従業員等への周知</p>
                <p class="clause-explanation">
                    &emsp;給湯省エネ事業者は、本事業に関わる従業員及びその取引先等（以下、「従業員等」という。）に対して、給湯省エネ事業者の業務、責任、留意点、禁止事項等について、周知と教育を徹底しなければなりません。
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第７条  禁止事項</p>
                <p class="clause-explanation">
                    &emsp;給湯省エネ事業者（給湯省エネ事業者になろうとする者を含む。以下本条において同じ。）及びその従業員等は、以下①～⑨に掲げる行為を行ってはなりません。
                    <ol class="custom-list font-sm">
                        <li><span>&#9312;</span>不正、虚偽により給湯省エネ事業者の登録を受け、又は登録を申請すること</li>
                        <li><span>&#9313;</span>不正、虚偽により本補助金の交付申請の手続きをすること</li>
                        <li><span>&#9314;</span>給湯省エネ事業者の登録申請日以前に着工した補助事業について交付申請をすること</li>
                        <li><span>&#9315;</span>本補助金の補助対象機器に対して、こどもエコすまい支援事業を含む国庫補助を財源とする他の補助金を併用して、交付申請をすること</li>
                        <li><span>&#9316;</span>消費者等に対して、本事業の制度及び本事務局等の名称、商標、又は称呼等を用いて、当該給湯省エネ事業者が取り扱う補助事業の優良性を誤認させるおそれのある言動、表示及び広告をすること</li>
                        <li><span>&#9317;</span>本事務局等に対する債権を、第三者に譲渡し、若しくは移転し、又は担保に供すること</li>
                        <li><span>&#9318;</span>本事務局等に対する一切の権利及び義務並びに本規約に基づき締結される本事務局との間の契約上の地位について、本事務局の同意なしに第三者に対して譲渡し、若しくは移転し、又は担保に供すること</li>
                        <li><span>&#9319;</span>本事務局等及び消費者等を誹謗中傷し、又は名誉若しくは信用を傷つける言動をすること</li>
                        <li><span>&#9320;</span>その他、本事務局等が本事業の趣旨に反すると判断する行為、及び本事務局等との信頼関係を損なう一切の行為</li>
                    </ol>
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第８条  登録の停止</p>
                <p class="clause-explanation">
                    <ol class="custom-list font-sm">
                        <li><span>１．</span>本事務局は、給湯省エネ事業者又はその従業員等が本規約を含むマニュアル等に規定した事項に反する行為を行い、又は行おうとしたと本事務局が判断した場合、給湯省エネ事業者としての登録を停止することがあります。</li>
                        <li><span>２．</span>給湯省エネ事業者の登録停止を受けた給湯省エネ事業者は、本規約第4条に基づく交付申請を代行することはできません。また、すでに申請済みであっても、補助事業の全部若しくは一部に対して補助金を交付せず、その交付を停止し、又は交付した本補助金の全部若しくは一部の返還を消費者等に対して命じることがあります。</li>
                    </ol>
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第９条 本規約の変更等</p>
                <p class="clause-explanation">
                    &emsp;本事務局が本規約を変更するときは、あらかじめ変更の7日前までに、本事業のホームページ及び住宅省エネポータルにより、本規約の変更をする旨、変更内容及び変更の効力発生時期を通知するものとします。ただし、上記に関わらず、当該変更が給湯省エネ事業者一般の利益に適合する場合、又は緊急の必要がある場合その他やむを得ない事情がある場合には、周知期間を短縮し、又は変更の効力発生後速やかに上記の方法において周知することができるものとします。変更後の本規約については、本事務局が定めた効力発生時期より、効力を生じるものとします。
                </p>
            </div>

        </div>
        <div style="clear: both"></div>

    </div>

    <!-- 9ページ目 -->
    <div class='page font-sm'>
        <div class="page-header">（様式１別紙④）</div>
        <div class="page-partition">
            <div class="clause">
                <p class="clause-title">第１０条  免責</p>
                <p class="clause-explanation">
                    <ol class="custom-list font-sm">
                        <li><span>１．</span>本事務局等は、本事業に関して、給湯省エネ事業者（給湯省エネ事業者になろうとする者を含む。以下本条において同じ。）に生じたあらゆる損失等について、一切の責任及び義務を負わないものとします。ただし、本事務局等の故意又は重過失によるものである場合には、本事務局等は、当該給湯省エネ事業者に直接かつ現実に生じた損害に限り、責任を負うものとします。</li>
                        <li><span>２．</span>本事務局等は、本事業に関して、給湯省エネ事業者と、第三者との間に生じた紛争やあらゆる損失等について、一切の責任及び義務を負わないものとします。</li>
                    </ol>
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第１１条   本事務局による個人情報の利用</p>
                <p class="clause-explanation">
                    &emsp;本事業において本事務局が取得した個人情報の利用、保存及び管理には、本事業のプライバシーポリシーが適用されます。給湯省エネ事業者は、補助対象者が本事務局に提供する補助対象者の個人情報について、本事業のプライバシーポリシーに従って利用、保管及び管理等されることについて、補助対象者の同意を取得するものとします。                
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第１２条 給湯省エネ事業者の秘密保持義務及び個人情報保護義務</p>
                <p class="clause-explanation">
                    <ol class="custom-list font-sm">
                        <li><span>１．</span>給湯省エネ事業者（給湯省エネ事業者になろうとする者を含む。以下本条において同じ。）は、本事業に関連して、本事務局等から開示される技術上又は営業上の情報（以下、「秘密情報」という。）を、第三者に漏洩、開示又は公表してはならないものとします。ただし、本事務局の書面による事前の同意を得た場合はこの限りではありません。</li>
                        <li><span>２．</span>給湯省エネ事業者は、本事業上の義務を履行する目的に限り、秘密情報を複製、加工、及び利用することができます。</li>
                        <li><span>３．</span>給湯省エネ事業者は、本事務局から指示を受けた場合、当該指示に従い速やかに、秘密情報（秘密情報を複製及び加工したものを含む。）を返却、廃棄又は消去するものとします。当該返却、廃棄、又は消去に要する費用は、給湯省エネ事業者が負担するものとします。</li>
                    </ol>
                </p>
            </div>

        </div>
        <div class="page-partition">
            <div class="clause">
                <p class="clause-explanation">
                    <ol class="custom-list font-sm">
                        <li><span>４．</span>給湯省エネ事業者は、秘密情報及び個人情報の安全な管理のために、組織的、人的、物理的及び技術的な安全措置を講じなければならないものとします。</li>
                        <li><span>５．</span>本事務局が要求する場合、給湯省エネ事業者は、秘密情報及び個人情報の管理状態を本事務局に報告するものとします。また、本事務局は、給湯省エネ事業者に対し、事前の書面による通知により、本事務局が給湯省エネ事業者の業務の適正を確認するために必要と認める範囲内において、給湯省エネ事業者の事業所その他秘密情報及び個人情報の管理場所又は使用場所に立入り、関連する書類等の提出を求める等秘密情報及び個人情報の管理等の情報セキュリティ監査を行うことができるものとします。</li>
                        <li><span>６．</span>本事務局及び給湯省エネ事業者は、秘密情報又は個人情報の漏洩等の事故が発生し、又は発生したおそれのあることを知った場合、当該事故の発生原因の如何に関わらず、直ちにその旨を相手方に報告し、本事務局と給湯省エネ事業者が協議の上、適切な措置を講じるものとします。</li>
                        <li><span>７．</span>本事務局及び給湯省エネ事業者は、前項の事故について、事故を引き起こした責任がいずれにあるかを協議の上、確定するものとします。</li>
                    </ol>
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第１３条  専属的合意管轄裁判所</p>
                <p class="clause-explanation">
                    &emsp;本事業に関して、本事務局と給湯省エネ事業者又は給湯省エネ事業者になろうとする者との間に生じた紛争については、東京簡易裁判所又は東京地方裁判所を第一審の専属的合意管轄裁判所とする。
                </p>
            </div>

            <div class="clause">
                <p class="clause-title">第１４条  雑則</p>
                <p class="clause-explanation">
                    &emsp;本規約に定めるもののほか、業務の実施に必要な事項については、マニュアル等に定めるものとする。
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