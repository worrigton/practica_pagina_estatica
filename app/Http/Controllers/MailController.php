<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Mail\DemoMail;

class MailController extends Controller
{
    //
    public function mail_demo(Request $request){
        $data = json_decode($request->data, false);

        $obj = new \stdClass();
        $obj->company      =   $data->company      ;
        $obj->contact_name =   $data->contact_name ;
        $obj->job          =   $data->job          ;
        $obj->email        =   $data->email        ;
        $obj->telephone    =   $data->telephone    ;
        $obj->message      =   $data->message      ;
        
        Mail::to('mdanatg@gmail.com')->send(new DemoMail($obj));
        /*Mail::send('emails/email_contact', $data, function($msj){
            $msj->subject('Correo de contacto');
            $msj->to('mdanatg@gmail.com');
        });*/
        return response()->json(array('message' => 'Email enviado' ));

    }
    public function mail_contact(Request $request){

        $data = json_decode($request->data, false);

        $obj = new \stdClass();
        $obj->name      = $data->name;
        $obj->email     = $data->email;
        $obj->message   = $data->message;
        $obj->subject   = $data->subject;
        
        Mail::to('mdanatg@gmail.com')->send(new ContactMail($obj));
    	/*Mail::send('emails/email_contact', $data, function($msj){
    		$msj->subject('Correo de contacto');
    		$msj->to('mdanatg@gmail.com');
    	});*/
    	return response()->json(array('message' => 'Email enviado' ));
    }
}
