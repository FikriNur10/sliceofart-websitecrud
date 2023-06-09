<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productModel;
use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;


class productController extends Controller
{
    public function index()
    {
        $userID = Auth::user()->username;         
        $data = productModel::all() ->where('username', $userID);
        return view('showproduct',compact(['data']),[
            'title'=>'Product']);
    }
    
    public function randomCode()
    {
        $randomString = Str::random(5);
        return view('addproduct',compact(['randomString']));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required',
            'code_product' => 'required|unique:product',
            'name' => 'required',
            'price' => 'required',
            'numberRevision' => 'required',
            'category' => 'required',
            'description' => 'required',
            'image_product' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);
        
        if($request ->hasFile('image_product')){
            $validatedData['image_product'] = $request -> file('image_product') -> getClientOriginalName();
            $request -> file('image_product') -> move('productsImage/',$request -> file('image_product') -> getClientOriginalName());
        }
        $data = productModel::create($validatedData);

        Alert::success('Success', 'Success adding product');
        return redirect('/dashboard/works');

        
    }

    public function showProduct()
    {
        $data = productModel::all();
        return view('browse',compact(['data']));
    }

    public function destroy($code_product)
    {
        $data = productModel::find($code_product);
        $data -> delete();

        Alert::success('Delete Success', 'Delete Success');
        return redirect('/dashboard/works');
    }

    // ON BROWSER PAGE
    public function showProductbrowse()
    {
        $products = productModel::all();
        return view('browse',compact(['products']),
        ['title'=>'Browse']);
    
    }

    public function showProductdetail($code_product)
    {
        $products = productModel::findOrFail($code_product);
        $userID = $products->username;
        $user = User::all()->where('username', $userID)->first();
        // dd($products,$user);
        return view('productdetail',compact(['products','user']),
        ['title'=>'Product Detail']);
        
    }
    public function editProduct($code_product)
    {
        $products = productModel::findOrFail($code_product);
        return view('artist.updateArt',compact(['products']),
        ['title'=>'Edit Product']);
    }
    public function updateProduct(Request $request, $code_product)
    {
        $products = productModel::findOrFail($code_product);
        $products->update($request->all());
        if($request ->hasFile('image_product')){
            $request -> file('image_product') -> move('productsImage/',$request -> file('image_product') -> getClientOriginalName());
            $products -> image_product = $request -> file('image_product') -> getClientOriginalName();
            $products -> save();
        }
        Alert::success('Update Success', 'Update Success');
        return redirect('/dashboard/works');
    }
    
    
}
