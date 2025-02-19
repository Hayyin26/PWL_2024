<?php

 namespace App\Http\Controllers;

 use Illuminate\Http\Request;

 class PageController extends Controller
 {
    public function welcome() {
        return 'Selamat Datang';
    }

    public function about(){
        return 'Ramadhani Bi Hayyin, 2341720226';
    }
    
    public function articles($id) {
        return "Halaman Dinamis dengan ID $id";
    }
 }