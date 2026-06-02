<?php

namespace App\Models;
use Illuminate\Support\Arr;

class Job{ 
    public static function all():array{
         return [ 
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
    }

    public static function find(int $id):array{
         $job =  Arr :: first(static::All(),fn($job) => $job['id'] == $id);

         if(! $job){
            abort(404);
         }
         
         return $job;
    }
}