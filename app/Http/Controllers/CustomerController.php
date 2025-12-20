<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        // $data = Customer::all();
        // dd($data); for developer viewing datas before showing UI  >>codes under dd() can not run
        // return view('customer.index', [
        //     'customer' => $data
        // ]);

        // $data = Customer::find(5);

        // $data=Customer::where('customer_id', 1)-> get();

        //

        // $data = Customer::orderBy('id', 'desc')

        //

        // $data=Customer::create([
        //     'title' => 'New Article',
        //     'body' => 'This is content',
        //     'customer_id' => '6'
        // ]);

//         $customer = Customer::find(1);
// $customer->update(['title' => 'Updated']);

        $data=Customer::find(1)->delete();
        return view('customer.index', ['customer' => $data]);
    }
    public function detail($id)
    {
        return "Controller - Customer Detail - $id";
    }
}
