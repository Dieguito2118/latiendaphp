<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('paises' , function(){
    $paises = [
        "Estados Unidos"    =>[
            "Cap" => "Washington",
            "Mon" => "Dolar",
            "Pob" => 692,
            "Ciu" => [
                "New York",
                "Miami",
                "Orlando",
            ]
        ],

        "Canada"            =>[
            "Cap" => "Ottawa",
            "Mon" => "Dolar Canadiense",
            "Pob" => 994,
            "Ciu" => [
                "Toronto",
                "Vancouver",
                "Calgary",
        ],
    ]
    ];

    return view('paises')
        ->with('paises' , $paises);
});
