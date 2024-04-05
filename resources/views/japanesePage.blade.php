<!DOCTYPE html>
<html lang="it">
<html lang="it" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Japanese</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

    <nav class="navbar bg-body-tertiary">
        <form class="container">
          <button class="btn btn-outline-success me-2" type="button"><a class="text-decoration-none text-white" href="{{route('Home')}}">Home</a></button>
          <button class="btn btn-outline-success me-2" type="button"><a class="text-decoration-none text-white" href="{{route('English')}}">Japanese!!</a></button>
        </form>
    </nav>

    <div class="container p-4">
       
        <h1>{{ $harowarudo }}</h1>

        <p>{{ $setsumei }}</p>

        <div class="d-flex">
            <img src="https://5giornate.it/wp-content/uploads/2023/01/fioritura-dei-ciliegi-Giappone.jpg" alt="">
            <div>
                <img class="d-flex align-items-baseline" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/54/Naval_ensign_of_the_Empire_of_Japan.svg/338px-Naval_ensign_of_the_Empire_of_Japan.svg.png" alt="">
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>