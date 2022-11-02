<?php

namespace App\Http\Controllers\Web\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**  Add to Cart Function  **/

    public function AddCart(Request $request)
    {
        return $request->all();
    }
}
