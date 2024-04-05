<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    $ciaomondo = "CiaoMondo!!";
    $descrizione = "In informatica Hello world! (in italiano Ciao mondo!) è un semplice programma dimostrativo, frequentemente utilizzato nella didattica di base, che produce come risultato - output - la scritta Hello world! o altre varianti, sfruttando i cosiddetti canali standard (standard output)[1]. Il programma non fa altro dunque che far comparire a schermo questa scritta e, per tradizione, diversi manuali di programmazione lo citano spesso per mostrarlo come primo esempio di lessico, sintassi e semantica basilare di un certo linguaggio di programmazione.";
    return view('home', compact("ciaomondo", "descrizione"));
    
})->name('Home');


Route::get("/englishPage", function() {

    $helloworld = "HelloWorld!!";
    $description = "In computer science Hello world! (in English Hello world!) is a simple demonstration program, frequently used in basic teaching, which produces as a result - output - the words Hello world! or other variants, exploiting the so-called standard channels (standard output)[1]. The program therefore does nothing other than make this writing appear on the screen and, traditionally, various programming manuals often cite it to show it as the first example of the lexicon, syntax and basic semantics of a certain programming language.";
    return view('englishPage', compact("helloworld", "description"));

})->name('English');


Route::get("/japanesePage", function() {

    $harowarudo = "HaroWarudo!!";
    $setsumei = "Konpyūtāsaiensu ni oite harōwārudo! ( in Japanese `harōwārudo!') Wa, kiso kyōiku de hinpan ni shiyō sa reru tanjun'na demonsutorēshon puroguramudeari, kekka to shite `harōwārudo!' To iu tango o shutsuryoku shimasu. Matawa, iwayuru hyōjun cha ​​ neru (hyōjun shutsuryoku) o riyō suru ta no bariantodesu [1 ]. Shitagatte, puroguramu wa kono kijutsu o gamen'ue ni hyōji suru koto igai nani mo okonaimasen. Dentō-teki ni, samazamana puroguramingu manyuarude wa, tokutei no puroguramingu gengo no yōgo-shū, kōbun, oyobi kihon-tekina semantikusu no saisho no rei to shite kore o in'yō suru koto ga yoku arimasu.";
    return view('japanesePage', compact("harowarudo", "setsumei"));

})->name('Japanese');



$messages = [
    'en' => 'HelloWorld!!',
    'it' => 'CiaoMondo!!',
    'jp' => 'ハローワールド！！',
    'fr' => 'BonjourLeMonde!!',
    'es' => '¡HolaMundo!!',
    'de' => 'HalloWelt!!',
    'ru' => 'Приветмир!!',
    'ar' => 'مرحبابالعالم!!',
    'zh' => '你好世界！！',
    'hi' => 'नमस्तेदुनिया!!',
    'pt' => 'OláMundo!!',
    'ko' => '안녕하세요세계여!!',
];

$colors = [
    'en' => 'primary',
    'it' => 'secondary',
    'jp' => 'success',
    'fr' => 'danger',
    'es' => 'info',
    'de' => 'warning',
    'ru' => 'primary',
    'ar' => 'secondary',
    'zh' => 'success',
    'hi' => 'danger',
    'pt' => 'warning',
    'ko' => 'info'
];

Route::get("/everyWord", function() use ($messages, $colors) {
    return view('everyWord', ['messages' => $messages, 'colors' => $colors]);
})->name('AllLanguages');