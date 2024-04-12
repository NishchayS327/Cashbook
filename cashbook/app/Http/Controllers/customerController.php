<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customers;
use DB;
class customerController extends Controller
{
    public function index()
    {   
        return view('addcustomer');
    }
    public function editpage(Request $request,$id)
    {   
        $data = DB::table('customers')->where('id', $id)->first();
        return view('editcustomer',compact('data'));
    }
    public function updatepage(Request $request)
    {   
        DB::table('customers')->where('id', $request->fid)->update([
            'full_name'        => $request->full_name,
            'bank_name'        => $request->bank_name,
            'account_number'   => $request->account_no,
            'method_of_pay'    => $request->method_of_payment,
            'amount'           => $request->amount,
            'transaction_type' => $request->transaction_type,
            'status'           => $request->transaction_status,
        ]);
        return redirect()->route('home')->with('success','Updated successfully');
    }
    public function addcustomers(Request $request)
    {
        $validatedData = $request->validate([
            'full_name' => 'required|string|max:255|min:2',
            'bank_name' => 'required|string|max:255|min:2',
            'account_no' => 'required|string|max:255|min:2',
            'method_of_payment' => 'required|max:255|min:2',
            'amount'            => 'required|max:255|min:2',
            'transaction_type' => 'required|max:255|min:2',
            'transaction_status' => 'required|max:255|min:2',
        ]);

        $customer = new customers();
        $customer->full_name = $request["full_name"];
        $customer->bank_name = $request["bank_name"];
        $customer->account_number = $request["account_no"];
        $customer->method_of_pay = $request["method_of_payment"];
        $customer->amount = $request["amount"];
        $customer->transaction_type = $request["transaction_type"];
        $customer->status = $request["transaction_status"];
        $customer->save();

        // Redirect
        return redirect()->route('customers')->with('success', 'Submitted successfully.');

    }
}
