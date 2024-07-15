<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel template</title>
    @vite('resources/js/app.js')
</head>

<body>
    <header class="bg-info mb-5">
        <div class="container text-center bg-info p-3">
            <H1><em>biglietti per i treni</em></H1>
        </div>
    </header>

    <main>
        <div class="container text-center">
            <div class="row row-gap-3">
                @foreach($treni as $treno)
                <div class="col-4">
                    <div class="card">
                        <div class="card-body height">
                            <h3 class="card-title pb-3 link-secondary">{{$treno['azienda']}}</h3>
                            <hr>
                            <p><strong class="link-danger">STAZIONE DI PARTENZA:</strong> {{$treno['stazione_di_partenza']}}</p>
                            <p><strong class="link-danger">ORARIO DI PARTENZA:</strong> {{$treno['orario_di_partenza']}}</p>
                            <p><strong class="link-danger">STAZIONE DI ARRIVO:</strong> {{$treno['stazione_di_arrivo']}}</p>
                            <p><strong class="link-danger">ORARIO DI ARRIVO:</strong> {{$treno['orario_di_arrivo']}}</p>
                            <p><strong class="link-danger">CODICE TRENO:</strong> {{$treno['codice_treno']}}</p>
                            <p><strong class="link-danger">NUMERO CARROZZE:</strong> {{$treno['numero_carrozze']}}</p>
                            @if ($treno['in_orario'] === 1)
                            <p><strong class="link-success">IN ORARIO</strong></p>
                            @elseif ($treno['cancellato'] === 1)
                            <p><strong class="link-danger">CANCELLATO</strong> </p>
                            @endif

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </main>

</body>

</html>