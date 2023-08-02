<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //
    public function index()
    {
        $categories = Category::all();
        return view('index', compact('categories') );
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $category = new Category();
        $category->first_name = $request->post('first_name');
        $category->last_name = $request->post('last_name');
        $category->description = $request->post('description');
        $category->save();
        return redirect('index');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id); // افترض أنه تم تمرير معرف الكتيبة كمعامل ($id)
        return view('edit', compact('category'));
    }
    

    public function update(Request $request, $id)
    {
        
        $category = Category::findOrFail($id); // افترض أنه تم تمرير معرف الكتيبة كمعامل ($id)
        $category->first_name = $request->input('first_name');  // افترض أن "name" هو الحقل الذي ترغب في تحديثه
        $category->last_name = $request->input('last_name');  // افترض أن "name" هو الحقل الذي ترغب في تحديثه
        $category->description = $request->post('description');
        $category->update();
        // dd($category);
        return redirect('index');
    }


    public function destroy($id)
    { 
        $category = Category::find($id);
        $category->delete();
        return redirect('index');
    }
    

}
