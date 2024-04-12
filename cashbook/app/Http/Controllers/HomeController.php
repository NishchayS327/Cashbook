<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Customers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = DB::table('customers')->get();;
        return view('home',compact('products'));
    }
    public function destroy(Request $request)
    {
        if($request->id) {
            DB::table('customers')->where('id', $request->id)->delete();
            return redirect()->route('home')->with('success','Deleted successfully');
        }
        
    }
    public function edit(Request $request,$id)
    {
        return redirect()->route('home')->with('success','Deleted successfully');
     
    }

}
