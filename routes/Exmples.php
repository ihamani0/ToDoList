<?php

use Illuminate\Support\Facades\Route;

use App\Service\Test;

Route::get('/service' , function (Test $service) {
    dd($service->getAll());
});
