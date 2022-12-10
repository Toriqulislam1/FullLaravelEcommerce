<?php

namespace App\Http\Controllers;

use App\Models\catagory;
use App\Models\logo;
use App\Models\product;
use Illuminate\Http\Request;
use PDF;


class adminController extends Controller
{


 //logo
 
   public function logo(Request $request){

      $data = logo::all();

   
      return view('admin.logo',compact('data'));
   }
   //insert logo
   public function logoaction(Request $request){

      $logo = new logo;

      $image = $request->logo;
      $imagename =time().'.'.$request->logo->getclientoriginalextension();
      $image->move('logo',$imagename);
      $logo->logo =$imagename;
      $logo->save();

      return redirect()->back();


   }

//delete logo
 public function delete_logo($id)
{

  $delete = logo::find($id);
  $delete->delete();



  return redirect()->back();
}


   //status on of
   public function status_on_of($id){
    
      return "hellow";
        
      


   }

   
      


























    public function catagory_view(){

        $data = catagory::all();


        return view('admin.catagory',compact('data'));
    }

    public function add_catagory(Request $request){
        $catagory = new catagory;
        $catagory->catagory = $request->catagory_name;
        $catagory->save();
        return redirect()->back()->with('message','catagory successfully added');
        
    }


    public function delete_catagory($id){
        $data= catagory::find($id);
        $data->delete();
        return redirect()->back()->with('message','catagory delete successfully ');
    }

    public function add_product(){
        $catagory = catagory::all();
       
        return view('admin.product',compact('catagory'));
    }


 public function add_db_product(Request $request){
    $product = new product;
    $product->title = $request->title;
    $product->decription = $request->decription;
    
    $product->price = $request->price;
    $product->discunt_price = $request->discunt_price;
    $product->quantity = $request->quantity;
    $product->catagory = $request->catagory;

    $image = $request->image;
    $imagename = time().'.'.$image->getclientoriginalextension();
    $request->image->move('product',$imagename);
    $product->image =$imagename;
    $product->save();
    return redirect()->back()->with('message','product added successfully ');
 }

 public function show_product(){

    $product = product::all();


    return view('admin.show_product',compact('product'));
 }

 public function delete($id){
    $product_delete = product::find($id);
    $product_delete->delete();
    return redirect()->back();
 }

 public function update( Request $request,$id){

   $product = product::find($id);
   $catagory = catagory::all();
   /*
    $pro_update->title = $request->title;
    $pro_update->decription = $request->decription;
    $pro_update->price = $request->price;
    $pro_update->discunt_price = $request->discunt_price;
    $pro_update->quantity = $request->quantity;
    $pro_update->catagory = $request->catagory;
    $pro_update->image = $request->image;
     
    $image = $request->image;
    $imagename = time().'.'.$image->getclientoriginalextension();
    $request->image->move('product',$imagename);
    $product->image =$imagename;
    $product->save();
    */
    return view('admin.product_update',compact('product','catagory'));
 }
    public function product_update( Request $request,$id){
        $product = product::find($id);
        $product->title = $request->title;
        $product->decription = $request->decription;
        $product->price = $request->price;
        $product->discunt_price = $request->discunt_price;
        $product->quantity = $request->quantity;
        $product->catagory = $request->catagory;
        $product->image = $request->image;
         
        $image = $request->image;
        $imagename = time().'.'.$image->getclientoriginalextension();
        $request->image->move('product',$imagename);
        $product->image =$imagename;
        $product->save();
    


       return redirect()->back();

    }

  public function pdf($id){
   $product_pdf =product::find($id);
   


   $pdf =PDF::loadView('admin.pdf',compact('product_pdf'));

   return $pdf->download('details.pdf');

  }
   
public function search(Request $request){
   $search_text =$request->search;

   $product=product::where('title', 'LIKE', "%{$search_text}%")->get();
   return view('admin.show_product', compact('product'));
     
   
}























 }












