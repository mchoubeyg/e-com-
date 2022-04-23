<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Myorder;
use Session;
use Illuminate\Support\Facades\DB;
use App\Mail\OrderEmail;
use App\Mail\ContactEmail;
use Illuminate\Support\Facades\Mail;

class ProductController extends Controller
{
    //


                                       /*      start of index function        */


    function index()
    {
        $data= Product::all();
        $data2= Product::where(['category'=>'recently_launched'] )->get();
        $data3= Product::where(['category'=>'discount'] )->get();
        $data4= Product::where(['category'=>'trending'] )->get();

        return view('product',['products'=>$data,'products2'=>$data2,'products3'=>$data3,'products4'=>$data4]);
    }


                                   
                                    /*      end of index function        */


                                    /*      start of Electronics function        */
    
    function electronics()
    {
        $data= Product::where(['category'=>'mobile'] )->get();
        $data2= Product::where(['category'=>'tv'])->get();
        $data3= Product::where(['category'=>'laptop'])->get();
        $data4= Product::where(['category'=>'washing machine'])->get();
        $data5= Product::where(['category'=>'refrigerator'])->get();

        return view('mobiles',['products'=>$data,'products2'=>$data2,'products3'=>$data3,'products4'=>$data4,'products5'=>$data5]);
    }

                                    /*      end of Electronics function        */



                                    /*      start of fashion function        */


    function fashion()
    {
        $data= Product::where(['category'=>'t-shirt'] )->get();
        $data2= Product::where(['category'=>'saree'])->get();
        $data3= Product::where(['category'=>'kids cloth'])->get();
        $data4= Product::where(['category'=>'shoes'])->get();
        $data5= Product::where(['category'=>'wedding'])->get();

        return view('fashion',['products'=>$data,'products2'=>$data2,'products3'=>$data3,'products4'=>$data4,'products5'=>$data5]);
    }


                                    /*      end of fashion function        */



                                    /*      start of contact function        */


    function contact(Request $req)
    {
        $req->validate([
            'name'=>'required|string',
            'email'=> 'required|email',
            'message'=> 'required|string'
]);


$details=[
    'name'=>$req->name,
    'email'=>$req->email,
    'message'=>$req->message
    
];
Mail::to($req->email)->send(new ContactEmail($details));
    
        return back()->with('message_sent','Your Message Has Been Sent Successfully!!');
        return view('contactus');
    }


                                    /*      end of contact function        */



                                    /*      start of detail function        */

    function detail($id)
    {
        $data= Product::find($id);
        return view('detail',['product'=>$data]);
    }


                                    /*      end of detail function        */



                                    /*      start of search function        */

    function search(Request $req)
    {
        
        $data= Product::
        where('name', 'like', '%'.$req->input('query').'%')
        ->get();
        return view('search',['products'=>$data]);
    }


                                    /*      end of search function        */



                                    /*      start of addToCart function        */

    function addToCart(Request $req)
    {
        if($req->session()->has('user'))
        {
        $cart= new Cart;
        $cart->user_id=$req->session()->get('user')['id'];
        $cart->product_id=$req->product_id;
        $cart->save();
        return redirect('/cartlist');
        }
        else{
            return redirect('/login');
        }
    }



                                    /*      end of addToCart function        */



                                    /*      start of CartItem function        */

    static function cartItem(){
        $userId=Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }



                                    /*      end of CartItem function        */



                                    /*      start of CartList function        */

    function cartList(Request $req){
        if($req->session()->has('user'))
        {
        $userId=Session::get('user')['id'];
        $products= DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*','cart.id as cart_id')
        ->get();

        return view('cartlist',['products'=>$products]);
        }
        else{
            return redirect('/login');
        }

    }


                                    /*      end of CartList function        */



                                    /*      start of removeCart function        */

    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }


                                    /*      end of removeCart function        */



                                    /*      start of orderNow function        */

    function orderNow(){
        $userId=Session::get('user')['id'];
        $total= $products= DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->sum('products.price');

        return view('ordernow',['total'=>$total]);
    }


                                    /*      end of orderNow function        */



                                    /*      start of orderPlace function        */

    function orderPlace(Request $req )
    {
        $req->validate([
            'name'=>'required|alpha',
            'email'=> 'required|email',
            'pincode'=> 'numeric|required',
            'address'=> 'required|string',
            'country'=> 'required|string',
            'payment'=>'required'

    ]);

        $userId=Session::get('user')['id'];
        $allCart= Cart::where('user_id',$userId)->get();
        
        foreach($allCart as $cart )
        {
        $order = new Myorder ;
        $order->product_id=$cart['product_id'];
        $order->user_id=$cart['user_id'];
        $order->status="pending";
        $order->payment_method=$req->payment;
        $order->payment_status="pending";
        $order->address=$req->address;
        $order->pincode=$req->pincode;
        $order->country=$req->country;
        $order->save();
        Cart::where('user_id',$userId)->delete();
        }
        $req->input();


$details=[
    'name'=>$req->name,
    'last'=>$req->last,
    'email'=>$req->email,
    'address'=>$req->address,
    'pincode'=>$req->pincode,
    'country'=>$req->country,
    'payment'=>$req->payment,
];

Mail::to($req->email)->send(new OrderEmail($details));


return redirect('/');
    }


                                    /*      end of orderPlace function        */



                                    /*      start of myOrders function        */

    function myOrders(Request $req){
        if($req->session()->has('user'))
        {
        $userId=Session::get('user')['id'];
        $orders= DB::table('myorders')
        ->join('products','myorders.product_id','=','products.id')
        ->where('myorders.user_id',$userId)
        ->get();

        return view('myorders',['orders'=>$orders]);
    }
    else{
        return redirect('/login');
    }

}


                                    /*      end of myOrders function        */





}
