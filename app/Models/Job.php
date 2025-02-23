<?php

namespace App\Models;

use Illuminate\Support\Arr;



class Job 
{

        public static function all():array
        {
            return [
                [
                'id' => 1,
                'title' => 'director',
                'salary'=> '$10000'
                ],
                [
                    'id' => 2,
                    'title' => 'programmer',
                    'salary'=> '$20000'
                ],
                 [
                    'id' => 3,
                    'title' => 'teacher',
                    'salary'=> '$15000'
                 ]
                 ];
        }

        public static function find(int $id):array
        {
            return  Arr::first(static::all(), fn($job) => $job['$id'] = $id );
        }
    }

