<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class AdminController extends Controller
{
    public function product(){
        
        return view('admin.product');
    }

    public function uploadproduct(Request $request){

        $data = new product;

        $image = $request->file;

        $imagename =  time().'.'.$image->getClientOriginalExtension();

        $request->file->move('productimage',$imagename);

        $data -> image=$imagename;

        $data->title=$request->title;
        
        $data->price=$request->price;
        
        $data->description=$request->description;
        
        $data->quantity=$request->qte;

        $data->save();

        return redirect()->back()->with('message','Produt Added Successfully');




    }

    public function allproduct(){

        $data=product::all();
        
        return view('admin.allproduct',compact('data'));
    }

    public function deleteproduct($id){

        $data = product::find($id);

        $data->delete();
        
        return redirect()->back();
    }

    public function updateview($id){

        $data =  product::find($id);
        return view('admin.updateview',compact('data'));
    }

    public function updateproduct(Request $request, $id){

        $data = product::find($id);
        $image = $request->file;

        if($image){


            $imagename =  time().'.'.$image->getClientOriginalExtension();

            $request->file->move('productimage',$imagename);
    
            $data -> image=$imagename;
        }

        $data->title=$request->title;
        
        $data->price=$request->price;
        
        $data->description=$request->description;
        
        $data->quantity=$request->qte;

        $data->save();

        return redirect()->back()->with('message','Produt Update Successfully');


    }
}
