@if(count($errors))
    <div class="grid-container">
        <div class="callout alert">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
    </div>
@endif