<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin.auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.home');
    }
    public function additem()
    {
        return view('admin.additem');
    }
   
    public function vieworder()
    {
        $data=DB::table('orders')->select(['id','Foodname','Qty','Amount','Userid'])->get();
        return view('admin.vieworder',['data'=>$data]);
    }
}
