<?php

namespace App\Http\Controllers;

use App\Models\productModel;
use App\Models\paymentModel;
use Illuminate\Http\Request;
use App\Models\User;
class adminController extends Controller
{
    // controller laravel template
    public function showUser()
    {
        $data = User::all();
        return view('admin.adminUserdata',compact(['data']),[
            'title'=>'User']);
    }

    public function showDataproduct()
    {
        $data = productModel::all();
        return view('showproductadmin',compact(['data']));
    }

    public function showTransaction(){
        $data = paymentModel::all();
        return view('admin.paymentlist',compact(['data']));
    }


}
