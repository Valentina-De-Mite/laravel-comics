<?php

use Illuminate\Support\Facades\Route;


Route::get('/comics', function () {

   

    $comics_collection=collect(config('comics_list.comics_list'));
    $data= [
        'comics_list'=>$comics_collection
    
    ];

    return view('comics', $data);




})->name('comics');


Route::get('/', function () {

    




    return view('welcome');




})->name('welcome');