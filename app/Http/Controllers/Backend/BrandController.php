<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {

        $Brands = Brand::orderBy('id', 'desc')->get();
        return view('admin.pages.Brand.index')->with('Brands', $Brands);
    }

    public function create()
    {
       
        return view('admin.pages.Brand.create');
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

        $Brands = new Brand();

        $Brands->name = $request->name;
        $Brands->description = $request->description;


        //// Category Image model Insert Image ////



        $image = $request->file('image');
        $extention = $image->getClientOriginalExtension();

        $filename = time() . '.' . $extention;
        $image->move('upload/Brandspic/', $filename);

        $Brands->image = $filename;



        $Brands->save();
        //return response()->json($productimage);


        $notification = array(
            'messege' => 'Succcessfully Added',
            'alert-type' => 'success'
        );

        return Redirect()->back()->with($notification);
    }

    public function show($id)
    {
        $singleBrandview = Brand::find($id);
        return view('admin.pages.Brand.ShowIndividualBrand')->with('singleBrandview', $singleBrandview);
    }

    public function edit($id)
    {


        $Brand = Brand::find($id);
        if (!is_null($Brand)) {

            return view('admin.pages.Brand.editIndividualBrand', compact('Brand'));
        } else {
            return redirect()->to('Brand');
        }
    }

    public function update(Request $request, $id)
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

        $Brand = Brand::find($id);

        $Brand->name = $request->name;
        $Brand->description = $request->description;



        //// Delete the old images ////

        if (File::exists('upload/Brandspic/' . $Brand->image)) {

            File::delete('upload/Brandspic/' . $Brand->image);
        } else {
            // if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extention = $image->getClientOriginalExtension();

            $filename = time() . '.' . $extention;
            $image->move('upload/Brandspic/', $filename);

            $Brand->image = $filename;
        }
        $Brand->save();


        //if($request->hasFile('image')){

        //return response()->json($productimage);
        // }

        $notification = array(
            'messege' => 'Succcessfully Added',
            'alert-type' => 'success'
        );

        return Redirect()->back()->with($notification);
    }

    public function destroy($id)
    {
        $deleteBrand = Brand::find($id);

        if (!is_null($deleteBrand)) {


            // if (File::exists('upload/Brandspic/' . $deleteBrand->image)) {

            //     File::delete('upload/Brandspic/' . $deleteBrand->image);
            // }

            $deleteBrand->delete();
        }

        $notification = array(
            'messege' => 'Succcessfully Deleted',
            'alert-type' => 'success'
        );

        return Redirect()->to('Brand')->with($notification);
    }
}
