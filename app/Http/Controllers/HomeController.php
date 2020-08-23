<?php

namespace App\Http\Controllers;
use DB;
Use App\Http\Controllers\Auth;
use Illuminate\Http\Request;
Use App\Order;
Use App\Item;
Use App\Profile;
Use App\User;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function welcome()
    {
        return view('welcome1');
    }
    public function menu()
    {    //khana ko lagi
        $khana="khana";
        $dataofkhana=DB::table('items')->select(['id','Foodtype','Foodname','Foodunit','Foodprice','Foodimage'])->where('Foodtype','=',$khana)->get();
        //breakfast ko lagi
        $Breakfast="Breakfast";
        $dataofbreakfast=DB::table('items')->select(['id','Foodtype','Foodname','Foodunit','Foodprice','Foodimage'])->where('Foodtype','=',$Breakfast)->get();
        //khaja ko lagi
        $khaja="khaja";
        $dataofkhaja=DB::table('items')->select(['id','Foodtype','Foodname','Foodunit','Foodprice','Foodimage'])->where('Foodtype','=',$khaja)->get();
        //drinks ko lagi
        $drinks="drinks";
        $dataofdrinks=DB::table('items')->select(['id','Foodtype','Foodname','Foodunit','Foodprice','Foodimage'])->where('Foodtype','=',$drinks)->get();
        return view('menu',['dataofkhana'=>$dataofkhana,'dataofbreakfast'=>$dataofbreakfast,'dataofkhaja'=>$dataofkhaja,'dataofdrinks'=>$dataofdrinks]);
    }
    public function order()
    {
        return view('order');
    }
    public function viewprofile()
    {

        $data=DB::table('profiles')->select(['id','Fullname','Email','Faculty','Programme','Rollno','Year'])->get();
        return view('profile',['data'=>$data]);
    }

    public function orderprofile(Request $request,$id)
    {
        $profiles=new Profile();
     
        
        $fullname=$request->input('firstname');
        $email=$request->input('email');
        $faculty=$request->input('faculty');
        $programme=$request->input('programme');
        $roll=$request->input('rollno');
        $year=$request->input('zip');
        

        $profiles->Userid=$id;
        $profiles->Fullname=$fullname;
        $profiles->Email=$email;
        $profiles->Faculty=$faculty;
        $profiles->Programme=$programme;
        $profiles->Rollno=$roll;
        $profiles->Year=$year;
        $profiles->save();  
      return redirect()->route('viewprofile');
          }
    public function cart($id)
    {
      
        $data=DB::table('orders')->select(['Unit','Foodname','Qty','Amount','Userid'])->where('Userid','=',$id)->get();
        $total=count($data);
        for($i=0;$i<$total;$i++)
        {
            $totalitem[$i]=$data[$i]->Qty;
            $totalprice[$i]=$data[$i]->Amount;
            

        }
        for($i=0;$i<$total;$i++)
        {
          
            $itemcount=$totalitem[$i]+$itemcount;
            $total=$totalprice[$i]+$total;

        }
        return view('cart',['data'=>$data,'itemcount'=>$itemcount,'total'=>$total]);
    }
    public function addtocart(Request $request,$Foodid,$id)
     {
        $data=DB::table('items')->select(['Foodtype','Foodname','Foodunit','Foodprice','Foodimage'])->where('id','=',$Foodid)->get();
//now create table for order with user id and food id tommorrow
$order=new Order();
$price=Item::find($Foodid);

$prise=$price->Foodprice;

$name=$price->Foodname;
$unit=$request->input('unit');
$qty=$request->input('quantity');
$total=$prise*$qty; 
$order->Unit=$unit;
$order->Foodname=$name;
$order->Amount=$total;
$order->Qty=$qty;
$order->Userid=$id;
$order->save();  
return redirect()->route('menu');
  

     }
}
