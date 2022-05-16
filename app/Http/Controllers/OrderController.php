<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Http\Request;
use PDF;
use DB;
use function GuzzleHttp\json_encode;

class OrderController extends Controller
{
    public function addorder(){
        return view('order.addorder');
    }
    public function saveOrder(Request $request){
        // dd($request);
        $this->validate($request,[
            'cname'=>'required|regex:/^[a-zA-ZÑñ\s]+$/',
            'pnumber'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'product'=>'required',
            'quantity'=>'required',

          ],[
             'cname.required'=>'customer Name Required !',
             'pnumber.required'=>'phone number Required !',
             'product.required'=>'product Required',
             'quantity.required'=>'quantity required',

          ]);
          $max_order_id = Order::max('order_id');
          $order_id = $max_order_id+1;




          foreach($request->product as $product)
          {
            $order=new Order();
            $order->customername=$request->cname;
            $order->order_id=$order_id;
            $order->phonenumber=$request->pnumber;
            $order->products_id=$product;
            $order->quantity = $request->quantity;
            $save=$order->save();
          }


        //   $data['products_id'] = json_encode($request->product);
        //   $order = Order::create($data);

         if($save){
         return view('order.addorder')->with('success','order Added..');
        }
        else{

            return view('order.addorder')->with('error','Error in order Adding..');
        }


}
public function showorder()
{
    // $orders = Order::distinct()->pluck('order_id');
    // $orders = DB::table('orders')
    //         ->select('customername','order_id')
    //         ->groupBy('order_id')
    //         ->get();
    $orders = Order::all()->unique('order_id');

//    $orders =  Order::create($orders);
    return view('order.showorder', compact('orders'));
}

public function editOrder($id){
    $order=Order::find($id);

    return view('order.editOrder',compact('order'));
}

public function updateOrder(Request $request,$id){
    $order=Order::find($id);

    $this->validate($request,[
       'cname'=>'required',
       'pnumber'=>'required',
       'product'=>'required',
       'quantity'=>'required',

     ],[
        'cname.required'=>'product Name Required !',
        'pnumber.required'=>'phone number Required !',
        'product.required'=>'product required',
        'quantity.required'=>'quantity Required',

     ]);

     $order->customername=$request->cname;
     $order->phonenumber=$request->pnumber;
     $order->products_id=$request->product;
     $order->quantity = $request->quantity;

    $save=$order->save();

     if($save){

       return redirect()->route('order.showorder')->with('success','order Details Updated..');
   }else{

       return redirect()->route('order.showorder')->with('error','Error in order Updating..');
   }
}

public function deleteOrder($id){
$order=Order::find($id);

$delete=$order->delete();

if($delete){

   return redirect()->route('order.showorder')->with('success','order Removed..');
}else{

   return redirect()->route('order.showorder')->with('error','Error in Removing order');
}
}
public function generateInvoicePDF($id)
    {

//    $orders= Order::where('order_id',$id)->first();

//    $product=Product::find($orders->products_id);

$orders= Order::where('order_id',$id)->get();
// dd($orders ->order_id);

   $products=[];
   $price =0;
   foreach($orders as $order)
    {
        $order_id = $order->order_id;
        $product =Product::find($order->products_id)->toArray();
        $products[]=$product;
        // dd(gettype($product['price']));
        $price+=$product['price'];

        // dd($products);

    }
    // dd($order_id);
    // dd(gettype($products));
    // $product=Product::find($order->products_id)->get();

     $result= [];
    //  $result['name']=$product->productname;
    //  $result['price']=$product->price;
     $result['order_id'] =$order_id;
     $result['products'] = $products;
     $result['totalprice'] =$price;
        $pdf = PDF::loadView('myPDF',$result);
       return $pdf->download('invoice.pdf');

    }

}

