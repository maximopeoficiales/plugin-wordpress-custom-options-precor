<?php

namespace JWOBDN;

class WsStockController
{
    public function __construct()
    {
    }

    public static function getStockPrecor()
    {
        register_rest_route('ws_precor/v1', '/getStock', array(
            'methods' => 'GET',
            'callback' => function () {
                try {
                    $ws = getServiceWsStosk();
                    $response = $ws->ZsdpefEcom01(
                        array(
                            "IdMat" =>  array("_" => 432139),
                            "IdSoc" => array("_" => "MA01"),
                        )
                    );
                    return ($response);
                } catch (\Throwable $th) {
                    return $th;
                }
            },
        ));
    }
}
