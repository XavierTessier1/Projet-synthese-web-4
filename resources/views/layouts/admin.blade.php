<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administration</title>
</head>
<body>
    <div class="interface">
        <header>
            <h1>Administration du site</h1>
        </header>
        <nav>
            <ul>
                <li>
                    <a href="/">Accueil</a>
                </li>
                <li>
                    <a href="{{route('entreprise.index')}}">Entreprises</a>
                </li>
                <li>
                    <a href="{{route('emplacement.index')}}">Emplacements</a>
                </li>
                <li>
                    <a href="{{route('mrc.index')}}">Mrcs</a>
                </li>
                <li>
                    <a href="{{route('evenement.index')}}">Évenements</a>
                </li>
                <li>
                    <a href="{{route('hebergement.index')}}">Hébergements</a>
                </li>
                <li>
                    <a href="{{route('forfait.index')}}">Forfaits</a>
                </li>
                <li>
                    <a href="{{route('user.index')}}">Usagers</a>
                </li>
                <li>
                    <a href="{{route('type_commodite.index')}}">Commodités</a>
                </li>
                <li>
                    <a href="{{route('type_entreprise.index')}}">Type d'entreprise</a>
                </li>
            </ul>
        </nav>
        <div class="app">
            @yield('contenu')
        </div>
        <footer>
            <p>Partie admin faite par Xavier Tessier</p>
        </footer>
    </div>
</body>
</html>
