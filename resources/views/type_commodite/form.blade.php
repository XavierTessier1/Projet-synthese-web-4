@if(count($errors))
{{$errors}}
<div class="errors">Il y a des erreurs dans le formulaire</div>
@endif
<div>
    <label for="categorie">Catégorie</label>
    <span>
        <input required pattern="^[a-zA-Z\s\-\+\(\)]*$" type="text" name="categorie" id="categorie" value="{{$typeCommodite->categorie}}" minlength="3">
    </span>
    @if($errors->has('categorie'))
        <span class="error">{{$errors->first('categorie')}}</span>
    @endif
</div>

<div>
    <label for="nom">Nom</label>
    <span>
        <input required pattern="^[a-zA-Z\s\-\+\(\)]*$" type="text" name="nom" id="nom" value="{{$typeCommodite->nom}}" minlength="3">
    </span>
    @if($errors->has('nom'))
        <span class="error">{{$errors->first('nom')}}</span>
    @endif
</div>


