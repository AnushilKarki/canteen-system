<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Stock;
use App\Item;
use DB;
class StockController extends Controller
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
public function viewstock()
{
    $data=DB::table('stocks')->select(['id','Qty','Unit','Foodid',])->get();
    
    return view('admin.viewstock',['data'=>$data]);
}
public function view($foodid)
{
$pond=Item::find($foodid);
$foodid1=$pond->id;
$data=DB::table('items')->select(['id','Foodtype','Foodname','Foodunit','Foodprice','Foodimage'])->where('id','=',$foodid1)->get();
 

    return view('admin.enterstock',['data'=>$data]);
}
public function save(Request $request,$id)
   {
    $stock=new Stock();
    $foodid1=$id;
   $stockqty=$request->input('qty'); 
   $stockunit=$request->input('unit'); 
   $stock->Foodid=$foodid1;
   $stock->Unit=$stockunit;
   $stock->Qty=$stockqty;

  $stock->save();
  echo "stock updated";
return redirect()->route('admin.home');
  }
  public function addstock()
  {

$data=DB::table('items')->select(['id','Foodtype','Foodname','Foodunit','Foodprice','Foodimage'])->get();
      return view('admin.addstock',['data'=>$data]);
  }
  public function edit($B_id)
   {
       $data=DB::table('blogs')->select(['B_id','B_title','B_image','B_detail'])->where('B_id','=',$B_id)->get();
       return view('admin.blog.edit',['data'=>$data]);
   }
   public function update()
      {
          //
          
      }
      public function del($B_id)
        {
            DB::delete('delete from blogs where B_id = ? ',[$B_id]);
            return redirect()->route('adminblog');
        }
   
}