<?php

namespace App\Http\Controllers;

use App\Mail\ContactoMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    //Método para visualizar un formulario de contacto
    public function index()
    {
        return view("mail.contactoform");
    }

    /**
     *Método para enviar un correo electrónico
     * */ 
    public function enviarCorreo(Request $formContacto)
    {
        Mail::to(config("mail.from.address"))->send(new ContactoMailable($formContacto->all()));

        return back()->with("success","Correo enviado correctamente!");
    }

}
