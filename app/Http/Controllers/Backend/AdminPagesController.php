<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Image;
use App\Models\ProductImage;

class AdminPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //return view('admin.pages.product.create');
        $products = Product::orderBy('id', 'desc')->get();
        return view('admin.pages.index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.pages.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

        ///For store ////

        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'status' => 'required',
            'category_id' => 'required',
            'brand_id' => 'required',

        ]);

        $product = new Product;

        $product->title = $request->title;
        $product->description = $request->description;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->status = $request->status;





        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->admin_id = 1;
        $product->slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $request->title);
        //gen_slug($request->title);



        $product->save();


        //// Product Image model Insert Image ////

        //  if($request->hasFile('image')){
        if (count($request->image) > 0) {



            foreach ($request->image as $image) {

                // $image = $request->file('image');
                $extention = $image->getClientOriginalExtension();

                $filename = rand() . '.' . $extention;
                $image->move('upload/productspic/', $filename);


                $productimage = new ProductImage;

                $productimage->product_id =  $product->id;

                echo $productimage->image =  $filename;
                $productimage->save();
            }
            //return response()->json($productimage);
        }

        $notification = array(
            'messege' => 'Succcessfully done',
            'alert-type' => 'success'
        );

        return Redirect()->back()->with($notification);
    }

    public function show($id)
    {
        $singleproductview = Product::find($id);
        return view('admin.pages.product.ShowIndividualProduct')->with('singleproductview', $singleproductview);
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.pages.product.editIndividualProduct')->with('products', $product);
    }

    public function update(Request $request, $id)
    {


        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'status' => 'required',
            'category_id' => 'required',
            'brand_id' => 'required',

        ]);

        $product = Product::find($id);

        $product->title = $request->title;
        $product->description = $request->description;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->status = $request->status;
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;





        $product->save();


        //// Product Image model Insert Image ////

        //  if($request->hasFile('image')){
        // if (count($request->image) > 0) {



        //     foreach ($request->image as $image) {

        //         // $image = $request->file('image');
        //         $extention = $image->getClientOriginalExtension();

        //         $filename = time() . '.' . $extention;
        //         $image->move('upload/productspic/', $filename);


        //         $productimage = new ProductImage;

        //         $productimage->product_id =  $product->id;

        //         echo $productimage->image =  $filename;
        //         $productimage->save();
        //     }

        $notification = array(
            'messege' => 'Succcessfully Updated',
            'alert-type' => 'success'
        );

        return Redirect()->to('administration')->with($notification);

        //return response()->json($productimage);


        //}

    }

    public function destroy($id)
    {
        $deleteIndividualproduct = Product::find($id);

        if (!is_null($deleteIndividualproduct)) {
            $deleteIndividualproduct->delete();
        }

        $notification = array(
            'messege' => 'Succcessfully Deleted',
            'alert-type' => 'success'
        );

        return Redirect()->to('administration')->with($notification);
    }
}
