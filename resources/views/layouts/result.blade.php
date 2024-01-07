<div class="error-wrap">
    @if (count($errors) >= 1)
        <p>エラーが発生しました。</p>
        <ul>
            @foreach ($errors as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
</div>