<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['products'] = Product::latest()->get();

        return view('admin.product.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'price' => 'required|integer',
            'product_image' => 'required|image|mimes:jpg,jpeg,png|max:4096'
        ]);

        $requestData = $request->all();

        $requestData['list_product'] =  json_encode($request->list_product);

        if($request->hasFile('product_image'))
        {
            $file= $request->file('product_image');


            $image_name = $file->getClientOriginalName();

            $file->move(public_path('uploads/product_image/'),$image_name);
            
            $requestData['product_image'] = $image_name;
        }
        
        Product::create($requestData);

        Alert::success('Success', 'Product Has been created successfully');
        return redirect()->route('admin.product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['product'] = Product::where('id', $id)->first();
        return view('admin.product.update',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'price' => 'required|integer',
        ]);
        $product = Product::where('id', $id)->first();

        $requestData = $request->all();

        if($request->hasFile('product_image'))
        {
            $this->validate($request, [
                'product_image' => 'image|mimes:jpg,jpeg,png|max:4096'
            ]);
            $file= $request->file('product_image');
            $image_name = $file->getClientOriginalName();
            if($product->product_image){        
                unlink(public_path('uploads/product_image/'.$product->product_image));
                $file->move(public_path('uploads/product_image/'),$image_name);
            }else{
                $file->move(public_path('uploads/product_image/'),$image_name);
            }
            $requestData['product_image'] = $image_name;
        }

        $product->update($requestData);

        Alert::success('Success', 'Product Has been updated successfully');
        return redirect()->route('admin.product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::where('id',$id)->first();

        if($product->product_image){
            unlink(public_path('uploads/product_image/'.$product->product_image));
        }

        $product->delete();

        Alert::success('Success', 'Product Has been updated successfully');
        return redirect()->route('admin.product.index');
    }
}
