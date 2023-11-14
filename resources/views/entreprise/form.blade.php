@if(count($errors))
{{$errors}}
<div class="errors">Il y a des erreurs dans le formulaire</div>
@endif
<div>
    <label for="nom">Nom de l'entreprise</label>
    <span>
        <input required pattern="^[a-zA-Z\s\-\+\(\)]*$" type="text" name="nom" id="nom" value="{{old('nom', $entreprise->nom)}}" minlength="3">
    </span>
    @if($errors->has('nom'))
        <span class="error">{{$errors->first('nom')}}</span>
    @endif
</div>

<div>
    <label for="ville">Ville</label>
    <span>
        <input required pattern="^[a-zA-Z\s\-\+\(\)]*$" type="text" name="ville" id="ville" value="{{$entreprise->ville}}" minlength="3">
    </span>
    @if($errors->has('ville'))
        <span class="error">{{$errors->first('ville')}}</span>
    @endif
</div>

<div>
    <label for="code_postal">Code postal</label>
    <span>
        <input required pattern="^[A-Za-z]\d[A-Za-z][ -]?\d[A-Za-z]\d$" type="text" name="code_postal" id="code_postal" value="{{$entreprise->code_postal}}">
    </span>
    @if($errors->has('code_postal'))
        <span class="error">{{$errors->first('code_postal')}}</span>
    @endif
</div>

<div>
    <label for="adresse_complete">Adresse complète</label>
    <span>
        <input required pattern="^[a-zA-Z0-9\s\-\+\(\)]*$" type="text" name="adresse_complete" id="adresse_complete" value="{{$entreprise->adresse_complete}}" minlength="10">
    </span>
    @if($errors->has('adresse_complete'))
        <span class="error">{{$errors->first('adresse_complete')}}</span>
    @endif
</div>

<div>
    <label for="telephone">Numéro de téléphone</label>
    <span>
        <input required pattern="^([0-9\s\-\+\(\)]*)$" type="text" name="telephone" id="telephone" value="{{$entreprise->telephone}}" minlength="12">
    </span>
    @if($errors->has('telephone'))
        <span>{{$errors->first('telephone')}}</span>
    @endif
</div>

<div>
    <label for="logo">Logo de l'entreprise</label>
    <span>
        <input type="file" name="logo" id="logo" value="{{$entreprise->logo}}">
    </span>
    @if($errors->has('logo'))
        <span>{{$errors->first('logo')}}</span>
    @endif
</div>

<div>
    <label for="courriel">Courriel de l'entreprise</label>
    <span>
        <input required pattern="email" type="email" name="courriel" id="courriel" value="{{$entreprise->courriel}}">
    </span>
    @if($errors->has('courriel'))
        <span>{{$errors->first('courriel')}}</span>
    @endif
</div>

<div>
    <label for="description">Description de l'entreprise</label>
    <span>
        <textarea required pattern="^[a-zA-Z0-9\s\-\+\(\)]*$" name="description" id="description" cols="30" rows="10" minlength="10">{{$entreprise->description}}</textarea>
    </span>
    @if($errors->has('description'))
        <span class="error">{{$errors->first('description')}}</span>
    @endif
</div>

<div>
    <label for="site_web">Url du site web de l'entreprise</label>
    <span>
        <input required pattern="url" type="text" name="site_web" id="site_web" value="{{$entreprise->site_web}}">
    </span>
    @if($errors->has('site_web'))
        <span class="error">{{$errors->first('site_web')}}</span>
    @endif
</div>

@include('type_commodite.checkboxes', ['checked' => $entreprise->commodites->pluck('id')->toArray()])
@include('type_entreprise.checkboxes', ['checked' => $entreprise->types->pluck('id')->toArray()])
