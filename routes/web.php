<?php

use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view("welcome");
});

Route::get("/about", function () {
    return view("nav.about"); // link to views/nav/about.blade.php
});

Route::get("/contact", function () {
    return view("nav.contact");
});
