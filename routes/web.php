<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    $ciaomondo = "CiaoMondo!!";
    return view('home', compact("ciaomondo"));
    

})->name('Home');


Route::get("/englishPage", function() {

    $helloworld = "HelloWorld!!";
    return view('englishPage', compact("helloworld"));

})->name('English');


Route::get("/japanesePage", function() {

    $harowarudo = "HaroWarudo!!";
    return view('japanesePage', compact("harowarudo"));

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