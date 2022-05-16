<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{
    public function addProduct(){
        return view('product.addproduct');
    }

    public function saveProduct(Request $request){
        $this->validate($request,[
            'pname'=>'required',
            'price'=>'required',
            'image'=>'required|max:6144',
            'category'=>'required',

          ],[
             'pname.required'=>'Product Name Required !',
             'price.required'=>'price Required !',
             'image.required'=>'Employee Photo Required !',
             'image.max'=>'Maximum File Size 6 MB !',
             'image.mimes'=>'Support Only png,jpg,jpeg',
             'category.required'=>'category Required',

          ]);



          $product=new Product();
          $product->productname=$request->pname;
          $product->price=$request->price;
          $product->category=$request->category;
          if($request->hasFile('image'))
          {
              $imageName = time().'.'.$request->image->extension();
              $request->image->storeAs('public/images', $imageName);
              $product->photo=$imageName;

          }
         $save=$product->save();
         if($save){
         return view('product.addproduct')->with('success','product Added..');
        }
        else{

            return view('product.addproduct')->with('error','Error in product Adding..');
        }

}
public function showproduct()
{
    $products = Product::all();

    return view('product.showproduct', compact('products'));
}

public function editProduct($id){
    $product=Product::find($id);
    return view('product.editProduct',compact('product'));
}
public function updateProduct(Request $request,$id){
    $product=Product::find($id);

    $this->validate($request,[
       'pname'=>'required',
       'price'=>'required',
       'image'=>'max:6144',
       'category'=>'required',

     ],[
        'pname.required'=>'product Name Required !',
        'price.required'=>'price Required !',


        'image.max'=>'Maximum File Size 6 MB !',
        'image.mimes'=>'Support Only png,jpg,jpeg',
        'category.required'=>'category Required',

     ]);


     $product->productname=$request->pname;
     $product->price=$request->price;
     $product->category=$request->category;
     if($request->hasFile('image'))
     {
         $imageName = time().'.'.$request->image->extension();
         $request->image->storeAs('public/images', $imageName);
         $product->photo=$imageName;

     }else{
         $product->photo=$product->photo;
     }
    $save=$product->save();

     if($save){

       return redirect()->route('product.showproduct')->with('success','product Details Updated..');
   }else{

       return redirect()->route('product.showproduct')->with('error','Error in product Updating..');
   }
}

public function deleteProduct($id){
$product=Product::find($id);
Storage::delete('public/images/'.$product->photo);
$delete=$product->delete();

if($delete){

   return redirect()->route('product.showproduct')->with('success','product Removed..');
}else{

   return redirect()->route('product.showproduct')->with('error','Error in Removing product');
}
}
}



