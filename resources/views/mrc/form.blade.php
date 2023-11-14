@if(count($errors))
{{$errors}}
<div class="errors">Il y a des erreurs dans le formulaire</div>
@endif
<div>
    <label for="nom">Nom de la Mrc</label>
    <span>
        <input required pattern="^[a-zA-Z\s\-\+\(\)]*$" type="text" name="nom" id="nom" value="{{$mrc->nom}}" minlength="3">
    </span>
    @if($errors->has('nom'))
        <span class="error">{{$errors->first('nom')}}</span>
    @endif
</div>

<div>
    <label for="description">Description</label>
    <span>
        <textarea required pattern="^[a-zA-Z0-9\s\-\+\(\)]*$" name="description" id="description" cols="30" rows="10" minlength="10">{{$mrc->description}}</textarea>
    </span>
    @if($errors->has('description'))
        <span class="error">{{$errors->first('description')}}</span>
    @endif
</div>
