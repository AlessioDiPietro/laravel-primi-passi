<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAravel- SERVIZI</title>
</head>
<body>
    <header>
        <h1>Area Servizi:</h1>

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
        <p>{{ $parag }}</p>
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