<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Product\StoreRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductImage;
use App\Models\ProductMeta;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Product::all();

        if(request()->ajax()){
            /**Getting Activities Plan Data */
            $product = Product::orderBy('id', 'DESC')->get();
            /**Getting Response Ready For Databales */
            $data = [];
            foreach($product as $key => $item){
                $data[] = [
                    'Row_Index_ID' => ++$key,
                    'id' => $item->id,
                    'name' => $item->prod_title,
                    'sku' => $item->prod_sku,
                    'size' => $item->prod_sizes,
                    'color' => $item->prod_color,
                    'qty' => $item->prod_qty,
                    'status_html' => $item->status == 'Rejected' ? '<button class="badge badge-danger product-status" data-id="'.$item->id.'" >Pending</button>' : '<button class="badge badge-success product-status" data-id="'.$item->id.'">Approved</button>',
                    'status' => $item->status,
                    'publish_html' => $item->publish == 'No' ? '<button class="badge badge-danger product-publish-status" data-id="'.$item->id.'" >No</button>' : '<button class="badge badge-success product-publish-status" data-id="'.$item->id.'">Yes</button>',
                    'publish' => $item->publish,
                ];
            }
            return response()->json(['data' => $data]);
        }
        return view('admin.products.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create',get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        // return $request->all();
        $data = $request->all();
        $product = Product::create($data);
        //  storing categories against Product
        $product->categories()->attach(explode(',', $data['category_id']));
        /**  Storing Images against Product ID **/
        if($request->TotalImages > 0)
        {
           for ($x = 0; $x < $request->TotalImages; $x++)
           {
               if ($request->hasFile('images'.$x))
                {
                    $file = $request->file('images'.$x);
                    $path = $file->store('public/product');
                    
                    $insert[$x]['thumbnail'] = $path;
                    $insert[$x]['product_id'] = $product->id;
                }
           }
            ProductImage::insert($insert);
        }
        /** Storing Product Meta against product id **/
        $meta = new ProductMeta();
        $meta->product_id = $product->id;
        $meta->meta_title = isset($data['meta_title']) ?  $data['meta_title'] : [];
        $meta->meta_tags =  isset($data['meta_tags']) ?  $data['meta_tags'] : [];
        $meta->meta_description = isset($data['meta_description']) ?  $data['meta_description'] : [];
        $meta->save();
        return response()->json(['success'   => true, 'message'   => 'Product Has been Created Successfully!', 'response' => [] ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();

        $product = Product::where('id',$id)->first();
        return view('admin.products.edit',get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return response()->json(['success'   => true, 'message'   => 'Product Deleted Successfully!', 'response' => [] ]);
    }

    public function statusPublish(Request $request)
    {

        $bookPublish = Product::where("id",$request->id)->first();
        if($bookPublish->publish == 'No'){
            $bookPublish->publish = 'Yes';
        }
        else{
            $bookPublish->publish = 'No';
        }
        // return $bookPublish;
        $bookPublish->update();
        return response()->json(['success'   => true, 'message'   => 'Product Publish Status Changed Successfully!', 'response' => [] ]);

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function statusUpdate(Request $request)
    {

        $bookStatus = Product::where("id",$request->id)->first();
        if($bookStatus->status == 'Rejected'){
            $bookStatus->status = 'Approved';
        }
        else{
            $bookStatus->status = 'Rejected';
        }
        // return $bookStatus;
        $bookStatus->update();
        return response()->json(['success'   => true, 'message'   => 'Product Status Changed Successfully!', 'response' => [] ]);

    }
}
