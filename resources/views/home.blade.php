<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pacchetti vacanza</title>
</head>
<body>

    <h1>Tutti i pacchetti vacanza:</h1>

    <ul>
        @foreach ($vacations as $vacation)
            <li>
                <div>
                    Luogo: {{$vacation->luogo}}
                </div>
                <div>
                    Durata: {{$vacation->durata}}
                </div>
                <div>
                    Numero di persone: {{$vacation->numero_persone}}
                </div>
                <div>
                    Alloggio: {{$vacation->alloggio}}
                </div>
                <div>
                    Prezzo: {{$vacation->prezzo}} €
                </div>
                <p>
                    Descrizione: {{$vacation->descrizione}}
                </p>
            </li>
        @endforeach
    </ul>
    
</body>
</html>