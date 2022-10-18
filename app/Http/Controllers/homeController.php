<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\order;
use App\Models\product;
use App\Models\User;
use Auth as GlobalAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\FuncCall;
use Session;
use Stripe;

class homeController extends Controller
{
   public function index(){
      $product =product::paginate(12);
    return view('home.userpage',compact('product'));
   }
   

 
   public function redirect(){
     $usertype =Auth::user()->usertype;
      if($usertype=='1'){
         return view('admin.home');
      }else{

          $product =product::paginate(12);
    return view('home.userpage',compact('product'));
      }
      
     }

   
      public function product_details($id){
         $details =product::find($id);
          
         return view('home.product_details',compact('details'));
      }

      public function add_cart(Request $req,$id){
        
         if(auth::user()){
            $user = Auth::user();
            $product =product::find($id);
            $cart = new cart;
            $cart->name = $user->name;
            $cart->email = $user->email;
            $cart->title = $product->title;
            $cart->	decription = $product->	decription;
            $cart->price = $product->price;
            $cart->discunt_price = $product->discunt_price;
            $cart->quantity = $product->quantity;
            $cart->user_id=$user->id;
            $cart->image = $product->image;
            $cart->product_id=$product->id;
            $cart->save();

             return redirect('/show_cart');
            return back();

         }else{
            return redirect('login');
         }
          
      }




      public function show_cart()
      {
       
        
         $user = cart::where(['user_id'=>Auth::user()->id])->get();
         //dd($user);
 
         return view('home.show_cart',compact('user'));
      }


      public Function cart_move($id){
         $data= cart::find($id);
         $data->delete();
         return redirect()->back();
      }


      public function cash_order(){

         $user=auth::user();
         $userid = $user->id;
         
         $data = cart::where('user_id','=',$userid)->get();
         foreach($data as $data){

            $order = new order;
            $order->name = $data->name;

            $order->email = $data->email;

            $order->user_id = $data->user_id;

            $order->product_title = $data->title;

            $order->price = $data->price;

            $order->quentity = $data->name;

            $order->product_id = $data->product_id;

            $order->product_image = $data->image;

            $order->payment_status = 'cahs or delevery';
            $order->delevery_status = 'processing';

            $order->save();
           
               $cat_id = $data->id;
               $cart =cart::find($cat_id);
               $cart->delete();
        }
         
         
        return redirect()->back();



      }


         public function strip($totalPrice){




            return view('home.strip',compact('totalPrice'));
      }





      public function stripePost(Request $request, $totalPrice)
      {


       

          Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
      
          Stripe\Charge::create ([
                  "amount" =>  $totalPrice*100,
                  "currency" => "usd",
                  "source" => $request->stripeToken,
                  "description" => "Test payment from itsolutionstuff.com." 
          ]);

          $user=auth::user();
          $userid = $user->id;
          
          $data = cart::where('user_id','=',$userid)->get();
          foreach($data as $data){
 
             $order = new order;
             $order->name = $data->name;
 
             $order->email = $data->email;
 
             $order->user_id = $data->user_id;
 
             $order->product_title = $data->title;
 
             $order->price = $data->price;
 
             $order->quentity = $data->name;
 
             $order->product_id = $data->product_id;
 
             $order->product_image = $data->image;
 
             $order->payment_status = 'paid';
             $order->delevery_status = 'processing';
 
             $order->save();
            
                $cat_id = $data->id;
                $cart =cart::find($cat_id);
                $cart->delete();
         }


        
          Session::flash('success', 'Payment successful!');
                
          return back();
      }



public function search_product(Request $request){
   $text_search =$request->search;
   $product = product::where('title','LIKE','%$text_search%')->paginate(5);
   return view('home.search',compact('product')); 
}









}
