<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
Use Image;
use App\Product;
use Validator,Redirect,Response,File;
use Intervention\Image\Exception\NotReadableException;


class ProductController extends Controller
{
    //
    public function show_product()
    {
       $product = Product::all();

       $arr = array('product' => $product);

      return view('layouts.products.product-child', $arr);
    }

    public function add_product() {
      return view('layouts.products.add-product-child');
    }
    public function store_product(Request $request) {
      if ($request->isMethod('post')) {
        $addProduct = new Product();
        $addProduct->name = $request->name;
        $addProduct->description = $request->desc;
        // $addProduct->save();



        request()->validate([
              'Thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
         ]);

         if ($files = $request->file('Thumbnail')) {

            // for save original image
            $ImageUpload = Image::make($files);
            $originalPath = public_path('uploads');
            $ImageUpload->save($originalPath.time().$files->getClientOriginalName());

            // for save thumnail image
            $thumbnailPath = public_path('thumbnail');
            $ImageUpload->resize(400,400);
            $ImageUpload = $ImageUpload->save($thumbnailPath.time().$files->getClientOriginalName());

          $addProduct->Thumbnail = time().$files->getClientOriginalName();
          $addProduct->save();
          }

          $image = Product::latest()->first(['Thumbnail']);
          // return Response()->json($image);
        return view('layouts.products.add-product-child');
        }
    }


    public function edit_product(Request $request, $id) {
      if ($request->isMethod('POST')) {
        $editProduct = Product::find($id);
        $editProduct->name = $request->input('name');
        $editProduct->save();

        return redirect('products');
      }else{
      $product = Product::find($id);

      $arr = array('product' => $product);
      return view('layouts.products.edit-product-child', $arr);

    }
    }
}
