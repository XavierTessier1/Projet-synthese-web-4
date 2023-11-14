@if (count($errors))
{{$errors}}
<div class="errors">Il y a des erreurs dans le formulaire</div>
@endif
<div>
    <label for="nom">Nom de l'événement</label>
    <span>
        <input required pattern="^[a-zA-Z0-9\s\-\+\(\)]*$" type="text" name="nom" id="nom" value="{{$evenement->nom}}" minlength="3">
    </span>
    @if ($errors->has('nom'))
        <span class="error">{{$errors->first('nom')}}</span>
    @endif
</div>

<div>
    <label for="ville">Ville</label>
    <span>
        <input required pattern="^[a-zA-Z\s\-\+\(\)]*$" type="text" name="ville" id="ville" value="{{$evenement->ville}}" minlength="3">
    </span>
    @if ($errors->has('ville'))
        <span class="error">{{$errors->first('ville')}}</span>
    @endif
</div>

<div>
    <label for="description">Description</label>
    <span>
        <textarea required pattern="^[a-zA-Z0-9\s\-\+\(\)]*$" name="description" id="description" cols="30" rows="10" minlength="10">{{$evenement->description}}</textarea>
    </span>
    @if ($errors->has('description'))
        <span class="error">{{$errors->first('description')}}</span>
    @endif
</div>

<div>
    <label for="prix">Prix de l'évenement</label>
    <span>
        <input required pattern="^([0-9\s\-\+\(\)]*)$" type="text" name="prix" id="prix" value="{{$evenement->prix}}" minlength="1">
    </span>
    @if ($errors->has('prix'))
        <span class="error">{{$errors->first('prix')}}</span>
    @endif
</div>

<div>
    <label for="date_debut">Date de début</label>
    <span>
        <input type="date" name="date_debut" id="date_debut" value="{{$evenement->date_debut}}">
    </span>
    @if ($errors->has('date_debut'))
        <span class="error">{{$errors->first('date_debut')}}</span>
    @endif
</div>

<div>
    <label for="date_fin">Date de fin</label>
    <span>
        <input type="date" name="date_fin" id="date_fin" value="{{$evenement->date_fin}}">
    </span>
    @if ($errors->has('date_fin'))
        <span class="error">{{$errors->first('date_fin')}}</span>
    @endif
</div>

