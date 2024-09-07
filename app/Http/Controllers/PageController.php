<?php

namespace App\Http\Controllers;

use Illuminate\Database\Query\IndexHint;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }
    
    public function about(){
            return '2241760061 <br/> Daffa Abiyu Aidil Amru';
        }
    public function dinamis($artikel = '0000'){
            return 'Artikel dengan id ' . $artikel;
        }
        
}
