<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {

        $keyword = $request->get('keyword');
        $product = Product::all();
        $data = array('title' => 'Dashboard');

        if($keyword){
            $product = Product::where("package","LIKE","%$keyword%")->get();
        }
            
        return view('admin.index', $data,['products' => $product]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array('title' => 'Add Product');
        $product = Product::all();
        return view('admin.create',$data,['products'=>$product]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product;
            
        if($request->file('images')){
        $image_name = $request->file('images')->store('storage','public');
        }

        $product->id = $request->id;
        $product->package = $request->package;
        $product->food = $request->food;
        $product->dessert = $request->dessert;
        $product->drink = $request->drink;
        $product->price = $request->price;
        $product->images = $image_name;

        $product->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('detail',['products'=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $data = array('title' => 'Edit Product');
        return view('admin.edit',$data,['products'=>$product]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->package = $request->package;
        $product->food = $request->food;
        $product->dessert = $request->dessert;
        $product->drink = $request->drink;
        $product->price = $request->price;
        $product->images = $request->images;

        $product->save();
        return redirect()->route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('admin.index');
    }
}
