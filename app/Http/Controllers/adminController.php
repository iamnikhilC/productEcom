<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class adminController extends Controller
{

    public function index(){
        $products = product::all();
        return view('admin.home', compact('products'));
    }

    public function dashboard(){
        $products = product::all();
        return view('admin.dashbord', compact('products'));
    }

    public function add(){
        return view('admin.addProduct');
    }

    public function store(Request $request){

        $validate = Validator::make($request->all(),[
            'name' => 'required',
            'amount' => 'required',
        ]);

        if($validate->fails()){
            return redirect()->back()->with('Validation Error!', $validate->getMessage());
        }
        $product = new product;

        if(!empty($request->image)){
            $image = $request->image;
            $imgName = $image->getClientOriginalName();
            $extension = $image->getClientOriginalExtension();
            $customName =  time(). '-'.$imgName;
            $image->move(public_path('images'), $customName); 
            $product->image = $customName ;
        }
       
        $product->name = $request->name;
        $product->amount = $request->amount;
        $product->description = $request->description;
        $product->save();

        if($product){
            return redirect()->back()->with('success', 'Product Added Successfully!');
        }
        else{
            return redirect()->back()->with('error', 'Whoops! Something was wrong');
        }
    }

    public function view($id){
        $product = product::find($id);
        return view('admin.viewProduct', compact('product'));
    }

    public function edit($id){
        $product = product::find($id);

        return view('admin.edit', compact('product'));
    }

    public function update(Request $request, $id){

        $validate = Validator::make($request->all(),[
            'name' => 'required',
            'amount' => 'required',
        ]);

        if($validate->fails()){
            return redirect()->back()->with('Validation Error!', $validate->getMessage());
        }
        $product = product::find($id);

        if(!empty($request->image)){
            $image = $request->image;
            $imgName = $image->getClientOriginalName();
            $extension = $image->getClientOriginalExtension();
            $customName =  time(). '-'.$imgName;
            $image->move(public_path('images'), $customName); 
            $product->image = $customName ;
        }
       
        $product->name = $request->name;
        $product->amount = $request->amount;
        $product->description = $request->description;
        $product->update();

        if($product){
            return redirect()->back()->with('success', 'Product Updated Successfully!');
        }
        else{
            return redirect()->back()->with('error', 'Whoops! Something was wrong');
        }
    }
}

