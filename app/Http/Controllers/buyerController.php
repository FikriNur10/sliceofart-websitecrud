<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\paymentModel;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


class buyerController extends Controller
{
    public function showBuyerpayment()
    {
        $userName = Auth::user()->name;
        $data = paymentModel::all()->where("name_buyer", $userName);
        return view('buyer.buyerPaymentlist',compact(['data']));
    }

    public function showBuyerpaymentDetail($transaction_code)
    {
        $data = paymentModel::find($transaction_code);
        // dd($data);
      return view('buyer.buyerPaymentpage',compact(['data']));
    }

    public function paymentUpdate(Request $request,$transaction_code)
    {
        $data = paymentModel::find($transaction_code);
        $data->fill([
            'transaction_code' => $request->transaction_code,
            'payment_method' => $request->payment_method,
            'code_product' => $request->code_product,
            'name_artist' => $request->name_artist,
            'name_buyer' => $request->name_buyer,
            'price' => $request->price,
            'confirmed' => 1,
        ]);
        $data->update();
        // dd($user_transaction_list);
        Alert::success('Payment Succes', 'Payment Succes');
        return redirect('/dashboard/buyerpaymentlist');
        
    }
    public function paymentFinishAlert() {
        Alert::warning('Payment has ben', 'Payment Succes');
        return redirect('/dashboard/buyerpaymentlist');
    }
    
}
