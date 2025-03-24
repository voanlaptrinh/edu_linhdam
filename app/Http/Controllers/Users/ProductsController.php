<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(Request $request)
    {

        $search = $request->input('search');

        $products = Products::where('status', 1) // Chỉ lấy sản phẩm có trạng thái active
        ->when($search, function ($query, $search) {
            return $query->where('title', 'like', "%$search%");
        })
        ->paginate(12);

        if ($request->ajax()) {
            return response()->json([
                'table' => view('users.products.table', compact('products'))->render(),
                'pagination' => $products->links('pagination::bootstrap-4')->toHtml()
            ]);
        }


       return view('users.products.index', compact('products'));
   }
   public function detail($alias)
    {
        $product = Products::where('alias',  $alias)->firstOrFail();
        return view('users.products.detail', compact('product'));
    }
}
