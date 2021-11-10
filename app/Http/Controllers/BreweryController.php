<?php

namespace App\Http\Controllers;

use App\Models\Beer;
use App\Models\Brewery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Storage;

class BreweryController extends Controller
{   
    public function __construct(){
      View::share('beers', Beer::all());
    }


    public function index(){

       $cervecerias = Brewery::all();
        return view('breweries.index', compact('cervecerias'));
    }
    public function create(){
        if(!$user = Auth::user()){
            return redirect()->route("login")->withMessage('No estás autentificado');
        }
        return view('breweries.create');
    }

 
           // Store datas
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'=>'required',
            'description'=>'required',
            'capacity'=>'required',
            'img'=>'required|image'
           
        ]);
        // guardar la cerveceria
        // $cerveceria = new Brewery();
        // $cerveceria->name = $validatedData['name'];
        // $cerveceria->description = $validatedData['description'];
        // $cerveceria->capacity = $validatedData['capacity'];

        // $cerveceria->save();
    
        $path = $validatedData['img']->store('public/breweries');
        $validatedData['img'] = $path;

        if(!$user = Auth::user()){
            return redirect()->route("login")->withMessage('No estás autentificado');
        }
        // mass assignement
        #$cerveceria = Brewery::create($validatedData);

        $cerveceria = $user->breweries()->create($validatedData);

        //asociar las cervezas seleccionadas a la cerveceria que acabamos de crear
        //attach 

        $cerveceria->beers()->attach($request->beers);
        return redirect()->route("breweries.index");
    }


    public function show($id)
    {
    if(!$user = Auth::user()){
            return redirect()->route("login")->withMessage('No estás autentificado');
    }
      $cerveceria = Brewery::findOrFail($id);
      return view('breweries.show', compact('cerveceria'));
    }

   //crUd
    public function edit($id)
    {   
        //si no estoy logueado
        if(!$user = Auth::user()){
            return redirect()->route("login")->withMessage('No estás autentificado');
        }
      $cerveceria = Brewery::findOrFail($id);

      if($user->id != $cerveceria->user_id){
        return back()->withMessage('No eres el dueño de esta cerveceria '. $cerveceria->name);
    }
      return view('breweries.edit', compact('cerveceria'));
    }

   
    public function update(Request $request, $id)
    {
        $cerveceria = Brewery::findOrFail($id);

        $validatedData = $request->validate([
            'name'=>'required',
            'description'=>'required',
            'capacity'=>'required',
            'img'=>'image'
           
        ]);
        if(isset($validatedData['img'])){
        $path = $validatedData['img']->store('public/breweries');
        $validatedData['img'] = $path;
        //borrar la imagen
        Storage::delete($cerveceria->img);
         }

        $cerveceria->update($validatedData);

        $cerveceria->beers()->sync($request->beers);

        return redirect()->route('breweries.show', ['id'=>$id])->withMessage("Artículo actualizado");
    }

   
    public function destroy($id)
    {    if(!$user = Auth::user()){
        return redirect()->route("login")->withMessage('No estás autentificado');
}
        $cerveceria = Brewery::findOrFail($id);

        if($user->id != $cerveceria->user_id){
            return back()->withMessage('No eres el dueño de esta cerveceria '. $cerveceria->name);
        }
        $cerveceria->delete();
        return redirect()->route('breweries.index');
    }
  
}
