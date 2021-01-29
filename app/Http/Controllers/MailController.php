<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\EmailDemo;
use Symfony\Component\HttpFoundation\Response;


class MailController extends Controller {
    
    public function sendEmail() {
        
   
        // $mailData = [
        //     'title' => 'Bienvenue chez ECP Vaccin',
        //     'body' => 'Je vous confirme votre inscription'
        // ];
  
        
   
        // return response()->json([
        //     'message' => 'Email has been sent.'
        // ], Response::HTTP_OK);
    }

}