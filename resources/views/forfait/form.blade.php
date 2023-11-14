@if (count($errors))
    {{$errors}}
    <div class="errors">Il y a des erreurs dans le formulaire</div>
@endif
<div>
    <label for="nom">Nom du forfait</label>
    <span>
        <input required pattern="^[a-zA-Z\s\-\+\(\)]*$" type="text" name="nom" id="nom" value="{{$forfait->nom}}" minlength="3">
    </span>
    @if ($errors->has('nom'))
        <span class="error">{{$errors->first('nom')}}</span>
    @endif
</div>

<div>
    <label for="typeForfait">Type de forfait</label>
    <span>
        <input required pattern="^[a-zA-Z\s\-\+\(\)]*$" type="text" name="typeForfait" id="typeForfait" value="{{$forfait->typeForfait}}" minlength="3">
    </span>
    @if ($errors->has('typeForfait'))
        <span class="error">{{$errors->first('typeForfait')}}</span>
    @endif
</div>

<div>
    <label for="description">Description</label>
    <span>
        <textarea required pattern="^[a-zA-Z0-9\s\-\+\(\)]*$" name="description" id="description" cols="30" rows="10" minlength="10">{{$forfait->description}}</textarea>
    </span>
    @if ($errors->has('description'))
        <span class="error">{{$errors->first('description')}}</span>
    @endif
</div>

<div>
    <label for="prix">Prix</label>
    <span>
        <input required pattern="^([0-9\s\-\+\(\)]*)$" type="number" name="prix" id="prix" value="{{$forfait->prix}}" min="2">
    </span>
    @if ($errors->has('prix'))
        <span class="error">{{$errors->first('prix')}}</span>
    @endif
</div>

<div>
    <label for="date_debut">Date de début</label>
    <span>
        <input type="date" name="date_debut" id="date_debut" value="{{$forfait->date_debut}}">
    </span>
    @if ($errors->has('date_debut'))
        <span class="error">{{$errors->first('date_debut')}}</span>
    @endif
</div>

<div>
    <label for="date_fin">Date de fin</label>
    <span>
        <input type="date" name="date_fin" id="date_fin" value="{{$forfait->date_fin}}">
    </span>
    @if ($errors->has('date_fin'))
        <span class="error">{{$errors->first('date_fin')}}</span>
    @endif
</div>

