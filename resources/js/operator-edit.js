document.addEventListener("DOMContentLoaded", function () {
    // 1. 建設業許可番号ありなしボタンでの活性非活性操作
    var constructionFlag1 = document.getElementById("construction_flag1");
    var constructionFlag2 = document.getElementById("construction_flag2");
    var constructionCategory = document.getElementById("construction_category");
    var constructionCategory2 = document.getElementById("construction_category2");
    var constructionPreNumber = document.getElementById("construction_pre_number");
    var constructionNumber = document.getElementById("construction_number");

    constructionFlagDisabled(); // 初期値がチェックなしの場合には非活性にする
    constructionFlag1.addEventListener("click", function () { // あり
        var isChecked = constructionFlag1.checked;
        if (isChecked) {
            constructionCategory.removeAttribute("disabled");
            constructionCategory2.removeAttribute("disabled");
            constructionPreNumber.removeAttribute("disabled");
            constructionNumber.removeAttribute("disabled");
            constructionPreNumber.style.color = "black";
            constructionNumber.style.color = "black";
        }
    });
    constructionFlag2.addEventListener("click", function () { // なし
        constructionFlagDisabled();
    });
    function constructionFlagDisabled() {
        var isChecked = constructionFlag2.checked;
        if (isChecked) {
            constructionCategory.setAttribute("disabled", true);
            constructionCategory2.setAttribute("disabled", true);
            constructionPreNumber.setAttribute("disabled", true);
            constructionNumber.setAttribute("disabled", true);
            constructionPreNumber.style.color = "rgb(170, 170, 170)";
            constructionNumber.style.color = "rgb(170, 170, 170)";
        }
    }
    // 1. 建設業許可番号ありなしボタンでの活性非活性操作

    // 2. 子育てエコホーム支援事業のチェック有無での活性非活性操作
    var publicProject1 = document.getElementById("public_project1");
    var publicBuisiness1 = document.getElementById("public_buisiness1");
    var publicBuisiness2 = document.getElementById("public_buisiness1");
    var realEstateCategory = document.getElementById("real_estate_category");
    var realEstatePreNumber = document.getElementById("real_estate_pre_number");
    var realEstateNumber = document.getElementById("real_estate_number");
    var publicBuisiness3 = document.getElementById("public_buisiness3");

    var reformFlag1 = document.getElementById("reform_flag1");
    var reformFlag2 = document.getElementById("reform_flag2");

    var reformAssociation = document.getElementById("reform_association");
    var reformAssociationUrl = document.getElementById("reform_association_url");

    publicProject1.addEventListener("click", function () {
        var publicProject1isChecked = publicProject1.checked;
        if (publicProject1isChecked) { // チェックあり
            publicBuisiness1.removeAttribute("disabled");
            publicBuisiness2.removeAttribute("disabled");
            publicBuisiness3.removeAttribute("disabled");
        }
        if (!publicProject1isChecked) { // チェックなし
            publicBuisiness1.setAttribute("disabled", true);
            publicBuisiness2.setAttribute("disabled", true);
            publicBuisiness1.checked = false;
            publicBuisiness2.checked = false;
            realEstateCategory.setAttribute("disabled", true);
            realEstatePreNumber.setAttribute("disabled", true);
            realEstateNumber.setAttribute("disabled", true);
            realEstatePreNumber.style.color = "rgb(170, 170, 170)";
            realEstateNumber.style.color = "rgb(170, 170, 170)";
            publicBuisiness3.setAttribute("disabled", true);
            publicBuisiness3.checked = false;
            reformFlag1.setAttribute("disabled", true);
            reformFlag2.setAttribute("disabled", true);
            reformAssociation.setAttribute("disabled", true);
            reformAssociationUrl.setAttribute("disabled", true);
            reformAssociationUrl.style.color = "rgb(170, 170, 170)";
        }
    });
    // 2. 子育てエコホーム支援事業のチェック有無での活性非活性操作

    // 3. 参加する事業＞新築分譲住宅の購入チェック有無での活性非活性操作
    var publicBuisiness2 = document.getElementById("public_buisiness2");
    var realEstateCategory = document.getElementById("real_estate_category");
    var realEstatePreNumber = document.getElementById("real_estate_pre_number");
    var realEstateNumber = document.getElementById("real_estate_number");

    realEstateDisabled(); // 初期値がチェックなしの場合には非活性にする

    publicBuisiness2.addEventListener("click", function () {
        var publicBuisiness2isChecked = publicBuisiness2.checked;
        if (publicBuisiness2isChecked) { // チェックあり
            realEstateCategory.removeAttribute("disabled");
            realEstatePreNumber.removeAttribute("disabled");
            realEstateNumber.removeAttribute("disabled");
            realEstatePreNumber.style.color = "black";
            realEstateNumber.style.color = "black";
        }
        realEstateDisabled(); // チェックなし

    });
    function realEstateDisabled() {
        var publicBuisiness2isChecked = publicBuisiness2.checked;
        if (!publicBuisiness2isChecked) {
            realEstateCategory.setAttribute("disabled", true);
            realEstatePreNumber.setAttribute("disabled", true);
            realEstateNumber.setAttribute("disabled", true);
            realEstatePreNumber.style.color = "rgb(170, 170, 170)";
            realEstateNumber.style.color = "rgb(170, 170, 170)";
        }
    }
    // 3. 参加する事業＞新築分譲住宅の購入チェック有無での活性非活性操作

    // 4. 参加する事業＞リフォーム工事チェック有無での活性非活性操作
    var publicBuisiness3 = document.getElementById("public_buisiness3");
    var reformFlag1 = document.getElementById("reform_flag1");
    var reformFlag2 = document.getElementById("reform_flag2");
    var reformAssociation = document.getElementById("reform_association");
    var reformAssociationUrl = document.getElementById("reform_association_url");

    var publicBuisiness3isChecked = publicBuisiness3.checked;
    if (!publicBuisiness3isChecked) { // チェックなし
        reformFlag1.setAttribute("disabled", true);
        reformFlag2.setAttribute("disabled", true);
        reformAssociation.setAttribute("disabled", true);
        reformAssociationUrl.setAttribute("disabled", true);
        reformAssociationUrl.style.color = "rgb(170, 170, 170)";
    }

    publicBuisiness3.addEventListener("click", function () {
        var publicBuisiness3isChecked = publicBuisiness3.checked;
        if (publicBuisiness3isChecked) { // チェックあり
            reformFlag1.removeAttribute("disabled");
            reformFlag2.removeAttribute("disabled");
            // 住宅リフォーム事業者団体登録チェックありだったらdisable解除
            var isChecked = reformFlag1.checked;
            if (isChecked) {
                reformAssociation.removeAttribute("disabled");
                reformAssociationUrl.removeAttribute("disabled");
                reformAssociationUrl.style.color = "black";
            }
        }
        if (!publicBuisiness3isChecked) { // チェックなし
            reformFlag1.setAttribute("disabled", true);
            reformFlag2.setAttribute("disabled", true);
            //reformFlag2.checked = true;
            reformAssociation.setAttribute("disabled", true);
            reformAssociationUrl.setAttribute("disabled", true);
            reformAssociationUrl.style.color = "rgb(170, 170, 170)";
        }
    });
    // 4. 参加する事業＞リフォーム工事チェック有無での活性非活性操作


    // 5. 参加する事業＞住宅リフォーム事業者団体登録ありなしボタンでの活性非活性操作
    var reformFlag1 = document.getElementById("reform_flag1");
    var reformFlag2 = document.getElementById("reform_flag2");
    var reformAssociation = document.getElementById("reform_association");
    var reformAssociationUrl = document.getElementById("reform_association_url");

    reformDisabled(); // 初期値がなしの場合には非活性にする
    reformFlag1.addEventListener("click", function () { // あり
        var isChecked = reformFlag1.checked;
        if (isChecked) {
            reformAssociation.removeAttribute("disabled");
            reformAssociationUrl.removeAttribute("disabled");
            reformAssociationUrl.style.color = "black";
        }
    });
    reformFlag2.addEventListener("click", function () { // なし
            reformDisabled();
    });
    function reformDisabled() {
        var isChecked = reformFlag2.checked;
        if (isChecked) {
            reformAssociation.setAttribute("disabled", true);
            reformAssociationUrl.setAttribute("disabled", true);
            reformAssociationUrl.style.color = "rgb(170, 170, 170)";
        }
    }
    // 5. 参加する事業＞住宅リフォーム事業者団体登録ありなしボタンでの活性非活性操作

    // 6. 参加する事業＞給湯省エネ2024事業のチェック有無での活性非活性操作
    var publicProject2 = document.getElementById("public_project2");
    var publicBuisiness5 = document.getElementById("public_buisiness5");
    var publicBuisiness4 = document.getElementById("public_buisiness4");

    // 初期値がチェックなしの場合には非活性にする
    publicProject2Disabled();
    publicProject2.addEventListener("click", function () {
        var publicProject2isChecked = publicProject2.checked;
        if (publicProject2isChecked) { // チェックあり
            publicBuisiness5.removeAttribute("disabled");
            publicBuisiness4.removeAttribute("disabled");
        }
        publicProject2Disabled();
    });
    function publicProject2Disabled() {
        var publicProject2isChecked = publicProject2.checked;
        if (!publicProject2isChecked) { // チェックなし
            publicBuisiness5.setAttribute("disabled", true);
            publicBuisiness4.setAttribute("disabled", true);
            publicBuisiness5.checked = false;
            publicBuisiness4.checked = false;
        }
    }
    // 6. 参加する事業＞給湯省エネ2024事業のチェック有無での活性非活性操作

    // 7. 事業者種別（法人/個人事業主）ラジオボタンでの表示フォーム切り替え
    let business1 = document.getElementById("business1");
    let subForm1 = document.getElementById("sub-form1");
    let subForm2 = document.getElementById("sub-form2");

    let corp_number = document.getElementById("corp_number");
    let operator_name = document.getElementById("operator_name");
    let operator_zipcode = document.getElementById("operator_zipcode");
    let operator_prefecture = document.getElementById("operator_prefecture");
    let operator_city = document.getElementById("operator_city");
    let operator_address = document.getElementById("operator_address");
    let operator_title = document.getElementById("operator_title");
    let representative_last_name = document.getElementById("representative_last_name");
    let representative_first_name = document.getElementById("representative_first_name");

    let indiv_representative_last_name = document.getElementById("indiv_representative_last_name");
    let indiv_representative_first_name = document.getElementById("indiv_representative_first_name");
    let indiv_operator_name = document.getElementById("indiv_operator_name");
    let indiv_operator_zipcode = document.getElementById("indiv_operator_zipcode");
    let indiv_operator_prefecture = document.getElementById("indiv_operator_prefecture");
    let indiv_operator_city = document.getElementById("indiv_operator_city");
    let indiv_operator_address_solo = document.getElementById("indiv_operator_address_solo");
    let indiv_operator_building_solo = document.getElementById("indiv_operator_building_solo");
    let indiv_operator_room_number_solo = document.getElementById("indiv_operator_room_number_solo");



    if (business1.checked) {
        subForm1.style.display = "";
        subForm2.style.display = "none";
        subForm2Disabled();
    } else {
        subForm1.style.display = "none";
        subForm2.style.display = ""
        subForm1Disabled();
    }

    business1.addEventListener("click", function () {
        subForm1.style.display = "";
        subForm2.style.display = "none";
        subForm1Abled();
        subForm2Disabled();

    });
    business2.addEventListener("click", function () {
        subForm1.style.display = "none";
        subForm2.style.display = ""
        subForm1Disabled();
        subForm2Abled()
    });
    function subForm1Abled() {
        corp_number.removeAttribute("disabled");
        operator_name.removeAttribute("disabled");
        operator_zipcode.removeAttribute("disabled");
        operator_prefecture.removeAttribute("disabled");
        operator_city.removeAttribute("disabled");
        operator_address.removeAttribute("disabled");
        operator_title.removeAttribute("disabled");
        representative_last_name.removeAttribute("disabled");
        representative_first_name.removeAttribute("disabled");
    }
    function subForm2Abled() {
        indiv_representative_last_name.removeAttribute("disabled");
        indiv_representative_first_name.removeAttribute("disabled");
        indiv_operator_name.removeAttribute("disabled");
        indiv_operator_zipcode.removeAttribute("disabled");
        indiv_operator_prefecture.removeAttribute("disabled");
        indiv_operator_city.removeAttribute("disabled");
        indiv_operator_address_solo.removeAttribute("disabled");
        indiv_operator_building_solo.removeAttribute("disabled");
        indiv_operator_room_number_solo.removeAttribute("disabled");
    }
    function subForm1Disabled() {
        corp_number.setAttribute("disabled", true);
        operator_name.setAttribute("disabled", true);
        operator_zipcode.setAttribute("disabled", true);
        operator_prefecture.setAttribute("disabled", true);
        operator_city.setAttribute("disabled", true);
        operator_address.setAttribute("disabled", true);
        operator_title.setAttribute("disabled", true);
        representative_last_name.setAttribute("disabled", true);
        representative_first_name.setAttribute("disabled", true);
    }
    function subForm2Disabled() {
        indiv_representative_last_name.setAttribute("disabled", true);
        indiv_representative_first_name.setAttribute("disabled", true);
        indiv_operator_name.setAttribute("disabled", true);
        indiv_operator_zipcode.setAttribute("disabled", true);
        indiv_operator_prefecture.setAttribute("disabled", true);
        indiv_operator_city.setAttribute("disabled", true);
        indiv_operator_address_solo.setAttribute("disabled", true);
        indiv_operator_building_solo.setAttribute("disabled", true);
        indiv_operator_room_number_solo.setAttribute("disabled", true);
    }
    // 7. 事業者種別（法人/個人事業主）ラジオボタンでの表示フォーム切り替え

});

