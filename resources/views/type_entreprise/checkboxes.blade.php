<fieldset>
    <legend>Types d'entreprise</legend>
    @foreach ($types as $type)
        <label>
            @if (isset($checked) && in_array($type->id, $checked))
                <input type="checkbox" name="types[]" value="{{ $type->id }}" {{ $type->checked }} checked>
            @else
                <input type="checkbox" name="types[]" value="{{ $type->id }}" {{ $type->checked }}>
            @endif
            <span>{{ $type->nom }}</span>
        </label>
    @endforeach
</fieldset>
