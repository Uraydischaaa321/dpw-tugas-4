<?php

namespace App\Http\Controllers;

class HomeController extends Controller{

	function showhome(){
        return view('frontview.home');
    }

    function showabout(){
        return view('frontview.about');
    }

    function showcustumers(){
        return view('frontview.custumers');
    }

    function showvegetabels(){
        return view('frontview.vegetabels');
    }

    function showcontact(){
        return view('frontview.contact');
    }

    function showlogin(){
        return view('login');
    }

    function showregistrasi(){
        return view('registrasi');
    }

    function showberanda(){
        return view('backview.beranda');
    }

    function showkategori(){
        return view('backview.kategori');
    }

    function showproduk(){
        return view('backview.produk');
    }

    function showuser(){
        return view('backview.user');
    }

}