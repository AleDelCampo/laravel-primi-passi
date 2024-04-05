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


        <p>Konpyūtāsaiensu ni oite harōwārudo! (Itaria-go de `harōwārudo!') Wa, kiso kyōiku de hinpan ni shiyō sa reru tanjun'na demonsutorēshon puroguramudeari, kekka to shite `harōwārudo!' To iu tango o shutsuryoku shimasu. Matawa, iwayuru hyōjun cha ​​ neru (hyōjun shutsuryoku) o riyō suru ta no bariantodesu [1 ]. Shitagatte, puroguramu wa kono kijutsu o gamen'ue ni hyōji suru koto igai nani mo okonaimasen. Dentō-teki ni, samazamana puroguramingu manyuarude wa, tokutei no puroguramingu gengo no yōgo-shū, kōbun, oyobi kihon-tekina semantikusu no saisho no rei to shite kore o in'yō suru koto ga yoku arimasu.</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>