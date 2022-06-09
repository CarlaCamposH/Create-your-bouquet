<?php

namespace App\Http\Controllers;


class AdminController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function orders(Request $request)
    {
        if( $request->cmd == 'getbouquetP' ) {
            //Muestra un popup con las especificaciones del ramo personalizado
            $order = Order::find($request->id);
            $orderArr = json_decode($order->getBouquetPAttribute());
            //$orderArr = $order->getBouquetPAttribute();

            file_put_contents( storage_path().'/logs/carla.log', "\n". __FILE__ .":". __LINE__ ."\n".var_export($orderArr, true)."\n", FILE_APPEND );

            $ret = "<div class='row'>";
              // foreach( $orderArr as $item ) {
                $ret .= "<p>".$orderArr."</p>";
            //}
            
            $ret .= "</div>";
            return $ret;
        }

    }
}