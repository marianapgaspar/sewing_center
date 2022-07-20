<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductFormRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{   
    /**
     * index
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $search = $request->search;
        $products = new Product();
        $products = $products->table($search);
        // dd($products);
        return view('site.product.list', ['products'=>$products]);
    }    
    /**
     * add
     *
     * @param  mixed $request
     * @return \Illuminate\Http\Response
     */
    public function add(ProductFormRequest $request)
    {
        $product = Product::create($request->all());
        return redirect()->route('site.products.form')->with(['success'=>'Insert with success']);
    }

    public function update(ProductFormRequest $request)
    {
        $product = Product::find($request->id);
        $input = $request->all();
        $product->update($input);
        return redirect()->route('site.products.form.update', ['product_id'=>$product->id])->with(['success'=>'Updated with success']);
    }
    
    public function form()
    {
        $categories = Category::all();
        return view('site.product.form', ['categories' => $categories]);
    }    
 
    /**
     * formUpdate
     *
     * @param  mixed $product_id
     * @return void
     */
    public function formUpdate(int $product_id)
    {
        $product = Product::find($product_id);
        $categories = Category::all();
        return view('site.product.formUpdate', ['product' => $product, 'categories'=>$categories]);
    }

    public function delete(int $id)
    {
        $product = Product::find($id);
        $product->delete();
        return response()->json(['status'=> 'Product deleted']);
    }
}
