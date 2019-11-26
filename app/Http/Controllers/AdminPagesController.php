<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use Image;
use App\ProductImage;

class AdminPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(){
        return view('admin.pages.product.create');
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('admin.pages.product.addProduct');
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request){
      

        $product = new Product;
     
        $product->title = $request->title;
        $product->description = $request->description;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->status = $request->status;
       

      


        $product->category_id = 1;
        $product->brand_id = 1;
        $product->admin_id = 1;
        $product->slug = 'samsung-gal';

       

        $product->save();
       

        //// Product Image model Insert Image ////
        $productimage = new ProductImage;

         if($request->hasFile('image')){

              $image = $request->file('image');
              $extention = $image->getClientOriginalExtension();
          
               $filename =time() . '.' . $extention;
               $image->move('upload/productspic/', $filename);
               

                $productimage->product_id =  $product->id;

                $productimage->image =  $filename;

                 
               
           }else{
               $productimage->product_id =  $product->id;
               $productimage->image = 'lol';
           }

           $productimage->save();
          // return response()->json($productimage);
        
       

        $notification=array(
            'messege'=>'Succcessfully Added',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);

    }
}
