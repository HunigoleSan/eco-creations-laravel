<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function home(){
        return view('index');
    }
    
    public function about(){
        return view('pages.about');
    }
    
    public function contact(){
        return view('pages.contact');
    }

    public function sendContact(Request $request){
        $data = $request->validate([
            'nombre' => 'required',
            'apellidos' => 'required',
            'correo' => 'required|email',
            'asunto' => 'required',
            'razon_social' => 'nullable', // cambiado a guion bajo
            'ruc' => 'nullable',
        ]);

        Mail::send('emails.contact', $data, function($message) use ($data) {
            $message->to('dc644373@gmail.com')->subject('Nuevo mensaje de contacto'. $data['asunto']);
        });

        return back()->with('success', 'Mensaje enviado correctamente');
    }
}
