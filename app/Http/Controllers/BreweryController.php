<?php

namespace App\Http\Controllers;

use App\Models\Brewery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BreweryController extends Controller
{
    public function index(){

       $cervecerias = Brewery::all();
        return view('breweries.index', compact('cervecerias'));
    }
    public function create(){
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
        // mass assignement
        $cerveceria = Brewery::create($validatedData);
        
        return redirect()->route("breweries.index")->withMessage('Cerveceria creada con éxito');
    }


    public function show($id)
    {
      $cerveceria = Brewery::findOrFail($id);
      return view('breweries.show', compact('cerveceria'));
    }

   //crUd
    public function edit($id)
    {
      $cerveceria = Brewery::findOrFail($id);
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

        return redirect()->route('breweries.show', ['id'=>$id])->withMessage("Artículo actualizado");
    }

   
    public function destroy($id)
    {
        $cerveceria = Brewery::findOrFail($id);
        $cerveceria->delete();
        return redirect()->route('breweries.index');
    }
  
}
