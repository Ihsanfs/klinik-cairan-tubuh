<?php

namespace App\Http\Controllers;

use App\Mail\KirimEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class KirimemailController extends Controller
{
    public function index(){

        Mail::to('sasakpantai@gmail.com')->send(new KirimEmail('im developer'));

        return '<h1>success terkirim</h1>';
    }
}
