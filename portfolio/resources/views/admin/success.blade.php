<div class="row">
    @if (count($messages) > 0)
        <div class="alert alert-info">
            <ul>
                @foreach ($messages->all() as $message)
                    <li><strong>{{ $message }}</strong></li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
