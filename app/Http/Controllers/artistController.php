<?php

namespace App\Http\Controllers;

use App\Models\paymentModel;
use App\Models\productModel;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class artistController extends Controller
{
    public function paymentStore(Request $request){
        $data = paymentModel::create([
            'transaction_code' => $request->transaction_code,
            'payment_method' => $request->payment_method,
            'code_product' => $request->code_product,
            'name_artist' => $request->name_artist,
            'name_buyer' => $request->name_buyer,
            'price' => $request->price,
            'payment_status' => '0',
            'confirm_status' => '0',
        ]);
        Alert::success('Payment Succes', 'Payment Succes');

        return redirect('/dashboard/payment');
    }

    public function randomCode()
    {
        $randomString = Str::random(7);
        return view('artist.payment',compact(['randomString']));
    }

    public function ShowPayment()
    {
        $data = paymentModel::all();
        dd($data);
        // return view('artist.paymentData',compact(['data']));
    }

    public function ShowPaymentCodeData($code)
    {
        $data = paymentModel::all()->where("transaction_code", $code);
        return view('artist.paymentData',compact(['data']));
    }

    public function paymentList()
    {
        $randomString = Str::random(7);
        $username = Auth::user()->username;
        $nama = Auth::user()->name;
        $data = paymentModel::all()->where("name_artist", $nama);
        $product_code = productModel::all()->where("username", $username);
        return view('artist.payment',compact(['data','randomString','product_code']));
    }

    public function showProductCode($username)
    {
        $data = productModel::all()->where("username", $username);
        return view('artist.paymentData',compact(['data']));
    }

}
