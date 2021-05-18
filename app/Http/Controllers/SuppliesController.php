<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuppliesController extends Controller
{
    


    public function get_ApiSupplies(Request $request)
    {
        $pharmacy_id = $request->only('pharmacy_id');//or name change

        $supply = \App\Supply::all()->where ('pharmacy_id', '=', $pharmacy_id['pharmacy_id']);

        $product = array();
        for($a=0; $a<count($supply); $a++){
            array_push($product, \App\Product::all()->where ('id', '=', $supply->pluck('product_id')[$a]));
        }

        $product_name = array();
        for($a=0; $a<count($product); $a++){
            array_push($product_name, $product[$a]->pluck('nameofproduct'));
        }


        return response()->json([
            'supplyProductsName' => $product_name,
        ], 200);
    }
}
