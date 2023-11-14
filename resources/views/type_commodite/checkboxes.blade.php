<fieldset>
    <legend>Commodités</legend>
    @foreach ($commodites as $commodite)
        <label>
            @if (isset($checked) && in_array($commodite->id, $checked))
                <input type="checkbox" name="commodites[]" value="{{ $commodite->id }}" {{ $commodite->checked }} checked>
            @else
                <input type="checkbox" name="commodites[]" value="{{ $commodite->id }}" {{ $commodite->checked }}>
            @endif
            <span>{{ $commodite->nom }}</span>
        </label>
    @endforeach
</fieldset>
