<?php

namespace App\Controllers;

class pages extends BaseController
{
    public function index()
    {
        echo view('leyout/header');
        echo view('pages/home');
        echo view('leyout/footer');
    }


    public function hoby()
    {  
        echo view('leyout/header') ;
        echo view('pages/hoby');
        echo view('leyout/footer');  
    }
    public function riwayat_pendidikan()
    {
       echo view('leyout/header'); 
       echo view('pages/riwayat_pendidikan');
       echo view('leyout/footer'); 
    }
}
