<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $cat = Category::all();
        return view('admin.category.index',compact('cat'))
        ->with('i',(request()->input('page',1)-1)*5);
    }

    public function addcategory()
    {
        return view('admin.category.add');
    }

    public function store(Request $request)
    {
        // Validasi
        $request->validate([
            'category' => 'required'
        ]);

        try{
            $category = Category::create([
                'category' => $request->category
            ]);
            return redirect()->route('adm.categoryadmin')->with(['success' => 'Success Add Category']);
        }catch(QueryException $e){
            return redirect()->route('adm.addcategoryadmin')->with(['error' => $e->errorInfo]);
        }
    }

    public function edit($id)
    {
        $category = Category::where('id',$id)->first();
        return view('admin.category.edit',compact('category'));
    }

    public function update(Request $request,$id)
    {
        $category = Category::find($id);
        $category->category = $request->category;
        $category->save();
        return redirect()->route('adm.categoryadmin')->with(['success' => 'Success Add Category']);
    }

    public function active($id)
    {
        $category = Category::find($id);
        $category->active=1;
        $category->save();
        return redirect()->route('adm.categoryadmin')->with(['success' => 'Success Add Category']);
    }

    public function deactive($id)
    {
        $category = Category::find($id);
        $category->active=0;
        $category->save();
        return redirect()->route('adm.categoryadmin')->with(['success' => 'Success Add Category']);
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('adm.categoryadmin')->with(['success' => 'Success Add Category']);
    }
}
