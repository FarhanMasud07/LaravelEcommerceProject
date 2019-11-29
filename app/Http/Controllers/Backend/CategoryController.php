<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {

        $categorys = Category::orderBy('id', 'desc')->get();
        return view('admin.pages.Category.index')->with('categorys', $categorys);
    }

    public function create()
    {
        $main_categories = Category::orderBy('name', 'desc')->where('parent_id', NULL)->get();
        return view('admin.pages.Category.create', compact('main_categories'));
    }

    public function store(Request $request)
    {

                ///For store ////

        $validatedData = $request->validate(
            [
                'name' => 'required',
                'image' => 'nullable|image',

            ],
            [
                'name.required' => 'Please Provide a Category name',
                'image' => 'Please Provide a valid image .jpg, .png, .gif, .jpeg expresion !!!'
            ],
        );

        $category = new Category();

        $category->name = $request->name;
        $category->description = $request->description;
        $category->parent_id = $request->parent_id;
        
        
        //// Category Image model Insert Image ////

           
    
                    $image = $request->file('image');
                    $extention = $image->getClientOriginalExtension();
    
                    $filename = time() . '.' . $extention;
                    $image->move('upload/categorypic/', $filename);

                    $category->image = $filename;
    
    
                
                $category->save();
                //return response()->json($productimage);
            

        $notification = array(
            'messege' => 'Succcessfully Added',
            'alert-type' => 'success'
        );

        return Redirect()->back()->with($notification);
    }

    public function show($id){
        $singleCategoryview = Category::find($id);
        return view('admin.pages.Category.ShowIndividualCategory')->with('singleCategoryview',$singleCategoryview);
    }

    public function edit($id){

        $main_categories = Category::orderBy('name', 'desc')->where('parent_id', NULL)->get();

        $category = Category::find($id);
        if(!is_null($category)){

             return view('admin.pages.Category.editIndividualCategory',compact('category','main_categories'));
        }else{
            return redirect()->to('Category');
        }
       
    }
}
