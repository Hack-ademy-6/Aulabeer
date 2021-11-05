<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $persons = [
            [
                "name"=>"Nico",
                "lastname"=>"Milella",
                "age"=>32,
                "img"=>"/img/chefs/chefs-1.jpg"
            ],
            [
                "name"=>"Nahuel",
                "lastname"=>"Barbieri",
                "age"=>25,
                "img"=>"/img/chefs/chefs-3.jpg"
            ],
            [
                "name"=>"Nico",
                "lastname"=>"Gasparro",
                "age"=>29,
                "img"=>"/img/chefs/chefs-3.jpg"
            ],
            [
                "name"=>"Gracia",
                "lastname"=>"Ruiz",
                "age"=>34,
                "img"=>"/img/chefs/chefs-2.jpg"
            ],

        ];
        
        
        $title = "Este es nuestro equipo";
        #dd(compact("persons", "title"));
        #return view ('aboutUs',["team"=>$persons, "t"=>$title]);
        return view ('aboutUs',compact("persons", "title"));
    }
    }

