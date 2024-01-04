
window.sendForm = function (formName, url) {
    // formにcsrf_tokenを追加
    let csrf = document.head.querySelector('meta[name="csrf-token"')
    $(formName).append('<input type="hidden" name="_token" autocomplete="off" value="'+csrf.content+'" />')
    // urlを指定
    $(formName).attr('action', url)
    // submit実行
    $(formName).submit()
}
