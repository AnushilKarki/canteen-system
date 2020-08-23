<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Item;
use DB;
class ItemController extends Controller
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
public function view()
{

$data=DB::table('items')->select(['id','Foodtype','Foodname','Foodunit','Foodprice','Foodimage'])->get();
return view('admin.viewitem',['data'=>$data]);
}

public function save(Request $request)
   {
    $item=new Item();
    $itemtype=$request->input('Foodtype');
   $itemname=$request->input('Foodname'); 
   $itemunit=$request->input('Foodunit');
   $itemprice=$request->input('Foodprice'); 
   $item->Foodtype=$itemtype;
   $item->Foodname=$itemname;
   $item->Foodunit=$itemunit;
   $item->Foodprice=$itemprice;
   if($request->hasfile('Foodimage'))
    {
     $filename=$request->Foodimage->getClientOriginalName();
    $request->file('Foodimage')->storeAs('public/upload',$filename);
    $item->Foodimage=$filename;
    }
  $item->save();
  echo "Item uploaded";

  return redirect()->route('admin.viewitem');
  // return view('admin.enterstock',['data'=>$thisfoodid]);
  }

  public function edit($id)
   {
       $data=DB::table('items')->select(['id','Foodname','Foodtype','Foodunit','Foodprice','Foodimage'])->where('id','=',$id)->get();
       return view('admin.edititem',['data'=>$data]);
   }
   public function update(Request $request,$id)
      {
        $foodname=$request->input('Foodname');
        $foodtype=$request->input('Foodtype');
        $foodunit=$request->input('Foodunit');
        $foodprice=$request->input('Foodprice');


      DB::update('update items set Foodname = ? , Foodtype = ? , Foodunit = ? , Foodprice = ? where id = ?',[$foodname,$foodtype,$foodunit,$foodprice,$id]);
     return redirect()->route('admin.viewitem');   
          
      }
      public function delete($id)
        {
            DB::delete('delete from items where id = ? ',[$id]);
            return redirect()->route('admin.viewitem');
        }
   
}