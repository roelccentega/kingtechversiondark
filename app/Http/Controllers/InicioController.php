<?php

namespace App\Http\Controllers;

use App\Mail\ContactanosForm;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index()
    {
    	return view('web.index');
    }
       public function postIndex(Request $request){
       //        dd($request->all());
        $request->validate([
            'name' => 'required',
//            'g-recaptcha-response' => 'required|captcha',

        ]);
        $emails = [ 'ccenteproga@gmail.com', 'webmaster@kingtech.pe', 'contacto@kingtech.pe'];
        $mail = new ContactanosForm($request->all());
        Mail::to($emails)->send($mail);


        return redirect('/')->with('notification','¡Enhorabuena! Tu mensaje ha sido enviado con éxito.');
//        return redirect('/contacto')->with('status', ' ¡Enhorabuena! Tu mensaje ha sido enviado con éxito.');
    }

    public function nosotros()
    {
    	return view('web.nosotros');
    }
    public function contacto()
    {
    	return view('web.contacto');
    }
     public function postContact(Request $request){
       //        dd($request->all());
        $request->validate([
            'name' => 'required',
//            'g-recaptcha-response' => 'required|captcha',

        ]);

        $message=[
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'content' => $request->content,
            'archivo' => $request->file('archivo'),

        ];

        $emails = [ 'ccenteproga@gmail.com', 'webmaster@kingtech.pe', 'contacto@kingtech.pe'];
        $mail = new ContactanosForm($request->all());
        Mail::to($emails)->send($mail);


        return redirect('/contacto')->with('notification','¡Enhorabuena! Tu mensaje ha sido enviado con éxito.');
//        return redirect('/contacto')->with('status', ' ¡Enhorabuena! Tu mensaje ha sido enviado con éxito.');
    }

   
}
