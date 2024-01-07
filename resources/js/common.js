
window.sendForm = function (formName, url) {
    // formにcsrf_tokenを追加
    let csrf = document.head.querySelector('meta[name="csrf-token"')
    $(formName).append('<input type="hidden" name="_token" autocomplete="off" value="'+csrf.content+'" />')
    // urlを指定
    $(formName).attr('action', url)
    // submit実行
    $(formName).submit()
}

window.CONFIRM_BACK_DETAIL = "詳細画面へ戻ります。よろしいですか？\n※入力した内容は保存されません。"
window.CONFIRM_TOP_DETAIL = "トップ画面へ戻ります。よろしいですか？"

window.confirmBackForm = function (url, messageId) {
    if (messageId) {
        if (window.confirm(messageId)) {
            location.href = url
        }
    } else {
        location.href = url
    }
}

window.confirmSubmitForm = function (form, messageId) {
    if (messageId) {
        if (window.confirm(messageId)) {
            document.getElementById(form).submit();
        }
    } else {
        document.getElementById(form).submit();
    }
}