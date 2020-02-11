<?php

namespace Modules\Admin\Http\Controllers;

use App\Category;
use App\Http\Requests\RequestProduct;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $viewData = [
            'products' => $products
        ];
        return view('admin::product.index', $viewData);
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin::product.create', compact('categories'));
    }

    public function store(RequestProduct $request)
    {
        Product::create([
            'p_name'            => $request->p_name,
            'p_slug'            => \Str::slug($request->p_name),
            'p_category_id'     => $request->p_category_id,
            'p_price'           => $request->p_price,
            'p_sale'            => $request->p_sale,
            'p_descipsion'      => $request->p_descipsion,
            'p_content'         =>$request->p_descipsion,
            'p_title_seo'       => $request->p_title_seo ? $request->p_title_seo : $request->p_name,
            'p_description_seo' => $request->p_description_seo ? $request->p_description_seo : $request->p_name,
        ]);
        return redirect()->back();

    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('admin::product.update', compact('product', 'categories'));
    }

    public function update(RequestProduct $request, $id)
    {
        $product = Product::find($id);
        $product->update([
            'p_name' => $request->p_name,
            'p_slug' => \Str::slug($request->p_name),
            'p_category_id' => $request->p_category_id,
            'p_price' => $request->p_price,
            'p_sale' => $request->p_sale,
            'p_descipsion' => $request->p_descipsion,
            'p_content' => $request->p_content,
            'p_title_seo' => $request->p_title_seo ? $request->p_title_seo : $request->p_name,
            'p_description_seo' => $request->p_description_seo ? $request->p_description_seo : $request->p_name,
        ]);
        return redirect()->back();
    }
}
