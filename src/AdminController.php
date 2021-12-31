<?php

namespace JWOBDN;

class AdminController
{

    public function __construct()
    {
    }
    public static function index()
    {
        echo view('adminPage', ['name' => 'John Doe']);
    }

    public static function saveOptions()
    {
        update_option('precor_validez_oferta', $_POST['precor_validez_oferta']);
    }
}
