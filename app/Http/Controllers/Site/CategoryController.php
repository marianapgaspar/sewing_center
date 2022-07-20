<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryFormRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site.category.index', [
            'categories' => Category::all()
        ]);
    }

        
    /**
     * show
     *
     * @param  mixed $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $category = Category::whereSlug($slug)->first();
        return view('site.category.show', ['category' => $category->load('categories')]);
    }
    
    /**
     * index
     *
     * @return \Illuminate\Http\Response
     */
    public function list(Request $request)
    {
        
        $categories = Category::paginate(10);
        return view('site.category.list', ['categories'=>$categories]);
    }    
    /**
     * add
     *
     * @param  mixed $request
     * @return \Illuminate\Http\Response
     */
    public function add(CategoryFormRequest $request)
    {
        $requestAll = $request->all();
        $fileName = time().$request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('categories',$fileName, 'public');
        $requestAll['image'] = '/storage/'.$path;
        Category::create($requestAll);
        // $category->update(['image'=>$path])
        return redirect()->route('site.categories.form')->with(['success'=>'Insert with success']);
    }

    public function update(CategoryFormRequest $request)
    {
        $requestAll = $request->all();
        $fileName = time().$request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('categories',$fileName, 'public');
        $requestAll['image'] = '/storage/'.$path;

        $category = Category::find($request->id);
        $category->update( $requestAll);
        return redirect()->route('site.categories.form.update', ['slug'=>$category->slug])->with(['success'=>'Updated with success']);
    }
    
    public function form()
    {
        $categories = Category::all();
        return view('site.category.form', ['categories' => $categories]);
    }    
 
    /**
     * formUpdate
     *
     * @param  mixed $product_id
     * @return void
     */
    public function formUpdate($slug)
    {
        $category = Category::whereSlug($slug)->first();
        return view('site.category.formUpdate', ['category' => $category]);
    }

    public function delete($slug)
    {
        $category = Category::whereSlug($slug)->first();
        $fileName = str_replace( '/storage/',"",$category->image);
        if(Storage::exists('public/'.$fileName)){
            Storage::delete('public/'.$fileName);            
        }
        $category->delete();
        
        return response()->json(['status'=> 'Category deleted']);
    }
}
