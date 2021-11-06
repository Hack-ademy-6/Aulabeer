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
                "img"=>"/img/nicom.jpg"
            ],
            [
                "name"=>"Nahuel",
                "lastname"=>"Barbieri",
                "age"=>25,
                "img"=>"/img/nahu.jpg"
            ],
            [
                "name"=>"Nico",
                "lastname"=>"Gasparro",
                "age"=>29,
                "img"=>"/img/nicog.jpg"
            ],
            [
                "name"=>"Gracia",
                "lastname"=>"Ruiz",
                "age"=>34,
                "img"=>"/img/gracia.jpg"
            ],

        ];
        
        
        $title = "Este es nuestro equipo";
        #dd(compact("persons", "title"));
        #return view ('aboutUs',["team"=>$persons, "t"=>$title]);
        return view ('aboutUs',compact("persons", "title"));
    }
    }

