<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'category_id',
        'name',
        'description',
        'exclusive'
    ];

    protected $dates = [
        'deleted_at'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }    
    /**
     * table
     *
     * @param  mixed $search
     * @return void
     */
    static function table(string|null $search){
        // $products = Product::select(['products.*', 'categories.name AS category_name'])
        // ->join('categories', 'categories.id', '=', 'products.id');
        // if ($search){
        //     $products->where('name', 'LIKE', "%{$search}%");
        //     $products->orWhere('id', 'LIKE', "%{$search}%");
        // }
        // $products->get()->paginate(5);
        $products = DB::table('products')
        ->join('categories', 'categories.id', '=', 'products.category_id')
        ->whereNull("products.deleted_at")
        ->orderByDesc('id')
        ->select(['products.*', 'categories.name AS category_name'])
        ->paginate(5);
        return $products;
    }
}
