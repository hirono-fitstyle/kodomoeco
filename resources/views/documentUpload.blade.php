<!doctype html>
<html data-theme="light" lang="{{ str_replace('_', '-', app()->getLocale()) }}" class='h-full'>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/common.js'])
</head>

<body>
    <script type="module">
        $(() => {
            console.log('ready')
            $('#uploadFileMove').on('click', () => {
                sendForm('form', "{{ url('./documentUpload/move') }}")
            })
            $('#uploadFileStay').on('click', () => {
                sendForm('form', "{{ url('./documentUpload/stay') }}")
            })
        })
    </script>

    <form name="form" method="POST" enctype="multipart/form-data">
        <div>
            <table>
                <tr>
                    <td rowspan="3">添付１</td>
                    <td>添付ファイル</td>
                    <td><select name="fileType1">
                            <option value="1">1_住宅省エネキャンペーン</option>
                            <option value="2">2_商業法人登記の写し</option>
                            <option value="3">3_印鑑証明書（法人は法人、個人事業主は個人のもの）</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>ファイル選択</td>
                    <td><input type="file" name="file1" /></td>
                </tr>
                <tr>
                    <td>備考（任意）</td>
                    <td><input type="text" name="remark1" /></td>
                </tr>
                <tr>
                    <td rowspan="3">添付２</td>
                    <td>添付ファイル</td>
                    <td><select name="fileType2">
                            <option value="1">1_住宅省エネキャンペーン</option>
                            <option value="2">2_商業法人登記の写し</option>
                            <option value="3">3_印鑑証明書（法人は法人、個人事業主は個人のもの）</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>ファイル選択</td>
                    <td><input type="file" name="file2" /></td>
                </tr>
                <tr>
                    <td>備考（任意）</td>
                    <td><input type="text" name="remark2" /></td>
                </tr>
                <tr>
                    <td rowspan="3">添付３</td>
                    <td>添付ファイル</td>
                    <td><select name="fileType3">
                            <option value="1">1_住宅省エネキャンペーン</option>
                            <option value="2">2_商業法人登記の写し</option>
                            <option value="3">3_印鑑証明書（法人は法人、個人事業主は個人のもの）</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>ファイル選択</td>
                    <td><input type="file" name="file3" /></td>
                </tr>
                <tr>
                    <td>備考（任意）</td>
                    <td><input type="text" name="remark3" /></td>
                </tr>
                <tr>
                    <td rowspan="3">添付４</td>
                    <td>添付ファイル</td>
                    <td><select name="fileType4">
                            <option value="1">1_住宅省エネキャンペーン</option>
                            <option value="2">2_商業法人登記の写し</option>
                            <option value="3">3_印鑑証明書（法人は法人、個人事業主は個人のもの）</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>ファイル選択</td>
                    <td><input type="file" name="file4" /></td>
                </tr>
                <tr>
                    <td>備考（任意）</td>
                    <td><input type="text" name="remark4" /></td>
                </tr>
                <tr>
                    <td rowspan="3">添付５</td>
                    <td>添付ファイル</td>
                    <td><select name="fileType5">
                            <option value="1">1_住宅省エネキャンペーン</option>
                            <option value="2">2_商業法人登記の写し</option>
                            <option value="3">3_印鑑証明書（法人は法人、個人事業主は個人のもの）</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>ファイル選択</td>
                    <td><input type="file" name="file5" /></td>
                </tr>
                <tr>
                    <td>備考（任意）</td>
                    <td><input type="text" name="remark5" /></td>
                </tr>
            </table>
        </div>
        <input type="button" id="uploadFileMove" value="アップロード（詳細に戻る）" />
        <input type="button" id="uploadFileStay" value="アップロード（留まる）" />
        <a href="{{ url('./documentUpload') }}">TOPに戻る</a>
    </form>
</body>

</html>