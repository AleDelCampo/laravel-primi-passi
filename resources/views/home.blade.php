<!DOCTYPE html>
<html lang="it" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
    <nav class="navbar bg-body-tertiary">
        <form class="container">
          <button class="btn btn-outline-success me-2" type="button"><a class="text-decoration-none text-white" href="{{route('English')}}">English!!</a></button>
          <button class="btn btn-outline-success me-2" type="button"><a class="text-decoration-none text-white" href="{{route('AllLanguages')}}">Tutte Le Lingue!!</a></button>
          <button class="btn btn-outline-success me-2" type="button"><a class="text-decoration-none text-white" href="{{route('Japanese')}}">Japanese!!</a></button>
        </form>
    </nav>  

    <div class="container p-4">
        <h1>{{ $ciaomondo }}</h1>

        <p>In informatica Hello world! (in italiano "Ciao mondo!") è un semplice programma dimostrativo, frequentemente utilizzato nella didattica di base, che produce come risultato - output - la scritta "Hello world!" o altre varianti, sfruttando i cosiddetti canali standard (standard output)[1]. Il programma non fa altro dunque che far comparire a schermo questa scritta e, per tradizione, diversi manuali di programmazione lo citano spesso per mostrarlo come primo esempio di lessico, sintassi e semantica basilare di un certo linguaggio di programmazione.</p>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>