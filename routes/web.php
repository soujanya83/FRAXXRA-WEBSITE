<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index-2');
});

Route::get('index-2', function () {
    return view('index-2');
});

Route::get('index', function () {
    return view('index');
});

Route::get('services', function () {
    return view('services');
})->name('services_page');

Route::get('/', function () {
    return view('index-2');
})->name('home_page');

Route::get('about', function () {
    return view('about');
})->name('about_page');

Route::get('contact', function () {
    return view('contact');
})->name('contact_page');

Route::get('Uxuidesigning', function () {
    return view('Uxuidesigning');
})->name('uxuidesigning_page');


Route::get('Webdevelopment', function () {
    return view('Webdevelopment');
})->name('webdevelopment_page');


Route::get('Mobiledevelopment', function () {
    return view('Mobiledevelopment');
})->name('mobiledevelopment_page');


Route::get('Digitalmarketing', function () {
    return view('Digitalmarketing');
})->name('digitalmarketing_page');




Route::get('Branding', function () {
    return view('Branding');
})->name('branding_page');


Route::get('Security_services', function () {
    return view('Security_services');
})->name('security_services_page');

Route::get('Cloud_services', function () {
    return view('Cloud_services');
})->name('Cloud_services_page');
