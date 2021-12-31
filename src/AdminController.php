<?php

namespace JWOBDN;

class AdminController
{

    public function __construct()
    {
    }
    public static function index()
    {
        try {
            echo view('adminPage', []);
        } catch (\Throwable $th) {
            echo $th;
        }
    }

    public static function saveOptions()
    {
        update_option('precor_validez_oferta', $_POST['precor_validez_oferta']);
    }
}
