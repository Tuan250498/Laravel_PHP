<?php

namespace Modules\Admin\Http\Controllers;

use App\Category;
use App\Http\Requests\RequestCategory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminCategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        $viewData = [
            'categories' => $categories
        ];
        return view('admin::category.index', $viewData);
    }

    public function create()
    {
        return view('admin::category.create');
    }

    public function store(RequestCategory $request)
    {
        Category::create([
            'c_name'            => $request->c_name,
            'c_slug'            => \Str::slug($request->c_name),
            'c_title_seo'       => $request->c_title_seo ? $request->c_title_seo : $request->c_name,
            'c_description_seo' => $request->c_description_seo ? $request->c_description_seo : $request->c_name,
        ]);
        return redirect()->Route('Admin.list.Category');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin::category.update', compact('category'));
    }

    public function update(RequestCategory $request, $id)
    {
        $category = Category::find($id);
        $category->update([
            'c_name'            => $request->c_name,
            'c_slug'            => \Str::slug($request->c_name),
            'c_title_seo'       => $request->c_title_seo ? $request->c_title_seo : $request->c_name,
            'c_description_seo' => $request->c_description_seo ? $request->c_description_seo : $request->c_name,
        ]);
        return redirect()->Route('Admin.list.Category');
    }

    public function action($action, $id)
    {
        if ($action) {
            $category = Category::find($id);
            switch ($action) {
                case 'delete':
                    $category->delete();
                    break;
            }
        }
        return redirect()->back();
    }
}
