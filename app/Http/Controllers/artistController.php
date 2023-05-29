<?php

namespace App\Http\Controllers;

use App\Models\paymentModel;
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
            'confirmed' => '0',
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

    public function paymentList()
    {
        $randomString = Str::random(7);
        $userName = Auth::user()->name;
        $data = paymentModel::all()->where("name_artist", $userName);
        return view('artist.payment',compact(['data','randomString']));
    }
}
