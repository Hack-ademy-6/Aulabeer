<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactReceived;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    
    public function index()
    {
        // recuperar los contactos del db
        $contacts = DB::table("contacts")->get();
        // select * from contacts;

        return view("contacts",compact('contacts'));
    }
    public function storeContact(Request $request){
        $validatedData = $request->validate([
            'name' => ['required', 'min:2', 'max:20'],
            'email' => ['required','email:rfc,dns'],
            'message' => ['required', 'min:10', 'max:255'],
        ]);

    #guardar los datos del contacto
    DB::table('contacts')->insert($requestValidated);
    //enviar correo de confirmación
       /* Mail::to($validatedData['email'])->send(new ContactReceived($validatedData)); */
       return redirect()->route("welcome")->with("message", "Hola $request->name hemos recibido tu mensaje, pronto te contestaremos");
    }

}
