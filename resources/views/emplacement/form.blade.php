@if(count($errors))
{{$errors}}
<div class="errors">Il y a des erreurs dans le formulaire</div>
@endif
<div>
    <label for="nom">Nom de l'emplacement</label>
    <span>
        <input required pattern="^[a-zA-Z\s\-\+\(\)]*$" type="text" name="nom" id="nom" value="{{$emplacement->nom}}" minlength="3">
    </span>
    @if($errors->has('nom'))
        <span class="error">{{$errors->first('nom')}}</span>
    @endif
</div>
