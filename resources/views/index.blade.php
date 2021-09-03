<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel-primi-passi</title>
</head>
<body>
<!-- Ciao ragazzi, oggi iniziamo a muovere i primi passi con questo fantastico framework che è Laravel!
Per prima cosa, creiamo un nuovo progetto Laravel 7, utilizzando questo comando: composer create-project --prefer-dist laravel/laravel:^7.0 laravel-primi-passi
Al termine dell'installazione, entriamo nella cartella del progetto cd laravel-primi-passi e avviamo l'artisan serve
con uno di questi due comandi: php artisan serve oppure php -S localhost:8000 -t public
A questo punto, iniziamo a prendere confidenza con le rotte e le views:
cancelliamo la view welcome.blade.php e creiamo una nostra homepage.
Facciamo quindi sì che la rotta / visualizzi home.blade.php Inizialmente stampiamo un Hello World,
poi passiamo dei dati alla view in modo da visualizzarli dinamicamente con Blade.
Bonus: Creiamo più di una pagina e visualizziamo un header menu con i link di tutte le pagine, utilizzando la funzione route() -->

    <header>
        <h1>Hello World</h1>
        <nav>
            <ul>
                <li><a href=" {{route('home')}}">Home</a></li>
                <li><a href="{{route('chi')}}">Chi Siamo</a></li>
                <li><a href="{{route('servizio')}}">I nostri Servizi</a></li>
            </ul>
        </nav>  
    </header>
    
    <hr>
    <hr>
    <hr>
    <!-- corpo pagina -->
    <main>
    </main>

</body>
</html>

<!-- css -->
<style>
    *{
        margin: 0;
        padding:0;
        box-sizing: border-box;
    }
    header {
        height: 150px;
        background-color: darkred;
        padding: 2% 5%;
        display:flex;
        justify-content: space-between;
    }
    li {
        list-style: none;
    }
    a {
        color: orange;
    }
    main {
        height:600px;
        background-color: green;
        padding: 100px 200px;
    }
</style>