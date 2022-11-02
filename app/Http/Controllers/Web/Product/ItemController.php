<?php

namespace App\Http\Controllers\Web\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Category;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /** Product List **/

    public function index(Request $request)
    {
        $categories = Category::all();

        $items = Product::with('images')->get();
        // // return $items;
        // if ($request->ajax()) {
    	// 	$view = view('data',compact('items'))->render();
        //     return response()->json(['html'=>$view]);
        // }
        return view('web.product.index',get_defined_vars());

        // $posts = Product::paginate(5);

    	// if ($request->ajax()) {
    	// 	$view = view('data',compact('posts'))->render();
        //     return response()->json(['html'=>$view]);
        // }

    	// return view('web.product.index',compact('posts'));
    }

    /** Product detail **/

    public function productDetail($slug)
    {
        $categories = Category::all();

        $product = Product::with('images')->where('slug',$slug)->first();
        // return $product;
        return view('web.product.product-detail',get_defined_vars());
    }



    /**  Display Item According to Categories  **/

    public function categoryList($id)
    {
        $categories = Category::all();

        $items = ProductCategory::with('product')->where('category_id',$id)->get();
        // return $items;
        return view('web.category.index',get_defined_vars());

    }
}
