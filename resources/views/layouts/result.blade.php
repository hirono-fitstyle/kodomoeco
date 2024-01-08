<div class="error-wrap">
    @if (count($errors) >= 1)
        <p>エラーが発生しました。</p>
        <ul>
            @foreach ($errors as $error)
                <li>{{ $error }}</li>
            @endforeach
            @if (is_object($errors) and $errors->any())
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            @endif
        </ul>
    @endif
</div>