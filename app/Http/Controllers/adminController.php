<?php

namespace App\Http\Controllers;

use App\Models\productModel;
use App\Models\paymentModel;
use Illuminate\Http\Request;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;


class adminController extends Controller
{
    // controller laravel template
    public function showUser()
    {
        $data = User::all();
        return view('admin.adminUserdata',compact(['data']));
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

    public function destroy($id){

        $data = User::find($id);
        $data->delete();
        Alert::success('Delete Success', 'Delete user data success');
        return view('admin.adminUserData');
        
    }
    public function editUser($id){
        $data = User::find($id);
        return view('admin.editUser',compact(['data']));
    }

    public function sendeditUserData($id){
        $data = User::find($id);
        $data->fill([
            'name' => request('name'),
            'username' => request('username'),
            'email' => request('email'),
            'password' => request('password'),
            'role' => request('role'),
        ]);
        $data->update();
        Alert::success('Edit Success', 'Edit user data success');
        return redirect('dashboard/userdata');
    }


}
