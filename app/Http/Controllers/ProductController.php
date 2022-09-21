<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:6',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $data= $request->all();
        $images=[];

        if($request->hasfile('photos'))
        {
            foreach($request->file('photos') as $image)

            {
                $destinationPath = 'images/';
                $id =Str::uuid();
                $name = $id . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath,$name);
                $images[] =$destinationPath.$name;
            }
        }
        $data['image']=$images;
        $products= Product::create($data);

        return redirect()->Route('product.index');

    }

    public function index()
    {
        $data=[
            'products'=>Product::all()
        ];
        return view('product.index',$data);
    }
}
