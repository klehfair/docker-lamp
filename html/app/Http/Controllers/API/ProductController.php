<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

use App\Models\Product;

class ProductController extends Controller
{

    public function index(Request $request){
        $name       = $request['name'] ?? '';
        $category   = $request['category'] ?? '';
        $min_price  = $request['min_price'] ?? '';
        $max_price  = $request['max_price'] ?? '';

        //validation
        $condition = [
            'min_price' => 'numeric',
            'max_price' => 'numeric',
        ];
        $validator = Validator::make($request->all(), $condition);
        if ($validator->fails()) {

            $return = [
                'status' => 0,
                'msg'    => 'Max & min price must be decimal number.',
            ];

            return response()->json($return);
        }        
        //end of validation

        $products = Product::select(['name','category','price'])->orderBy('category', 'asc')->orderBy('name', 'asc');

        // if name is not empty
        if($name != '')
            $products = $products->where('name', 'LIKE', '%'.$name.'%');

        // if category is not empty
        if($category != '')
            $products = $products->where('category', $category);

        // if min_price is not empty
        if($min_price != '')
            $products = $products->where('price', '>=', $min_price);

        // if max_price is not empty
        if($max_price != '')
            $products = $products->where('price', '<=', $max_price);

        $products = $products->paginate(10);

        $return = [
            'status'    => 1,
            'msg'       => 'success',
            'data'      => $products
        ];

        return response()->json($return);
    }
}
