<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
   return view('jobs', [
    'jobs' =>[ [
        'id' => 1,
        'title' => 'Co-Fundadora & CTO de AppForo',
        'salary' => 'Estoy de gratis :('
    ] , 
     [
        'id' =>  2,
        'title' => 'Desarrolladora de Everlasting',
        'salary' => 'Estoy de gratis tambien :('
        ] 
    ]
    ]);
});

Route :: get('/jobs/{id}', function ($id) {
       $jobs = [ 
    [
        'id' => 1,
        'title' => 'Co-Fundadora & CTO de AppForo',
        'salary' => 'Estoy de gratis :('
    ] , 
     [
        'id' =>  2,
        'title' => 'Desarrolladora de Everlasting',
        'salary' => 'Estoy de gratis tambien :('
        ] 
    ];
   $job = Arr :: first($jobs,fn($job) => $job['id'] == $id);
    return view('job', ['job' => $job]);
});

Route :: get('/contact', function () {
    return view('contact');
});
