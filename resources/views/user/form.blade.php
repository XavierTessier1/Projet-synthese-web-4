@if(count($errors))
{{$errors}}
<div class="errors">Il y a des erreurs dans le formulaire</div>
@endif
<div>
    <label for="name">Nom de l'utilisateur</label>
    <span>
        <input required pattern="^[a-zA-Z0-9_-]+$" type="text" name="name" id="name" value="{{$user->name}}" maxlength="50">
    </span>
</div>

<div>
    <label for="email">Courriel de l'utilisateur</label>
    <span>
        <input required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" type="text" name="email" id="email" value="{{$user->email}}">
    </span>
</div>

<div>
    <label for="password">Mot de passe</label>
    <span>
        <input required pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" type="text" name="password" id="password" value="{{$user->password}}">
    </span>
</div>
