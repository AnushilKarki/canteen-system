<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Http\Controllers\Auth;
use App\Profile;
use DB;
class ProfileController extends Controller
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
   
        $data=DB::table('profiles')->select(['id','Fullname','Email','Faculty','Programme','Rollno','Year','Userid'])->get();
        return view('profile.view',['data'=>$data]);
    }
public function add($user)
    { 
        
        $userid=$user;
        $data=DB::table('profiles')->select(['id','Fullname','Email','Faculty','Programme','Rollno','Year','Userid'])->where('Userid','=',$userid)->get();
      return view('profile.add')->with('userid','=',$userid,'data','=',$data);
    }
public function save(Request $request,$id)
   {

    DB::delete('delete from profiles where Userid = ? ',[$id]);
    
    $profiles=new Profile();
     
        $userid=$id;
    $fullname=$request->input('firstname');
    $email=$request->input('email');
    $faculty=$request->input('faculty');
    $programme=$request->input('programme');
    $roll=$request->input('rollno');
    $year=$request->input('zip');
    

    $profiles->Userid=$userid;
    $profiles->Fullname=$fullname;
    $profiles->Email=$email;
    $profiles->Faculty=$faculty;
    $profiles->Programme=$programme;
    $profiles->Rollno=$roll;
    $profiles->Year=$year;
    $profiles->save();  
return redirect()->route('viewprofile');
   
  }
  public function edit()
   {
       $data=DB::table('profiles')->select(['id','Fullname','Email','Faculty','Programme','Rollno','Year'])->get();
   
       return view('profile.edit',['data'=>$data]);  
   }
   public function update(Request $request,$N_id)
      { 
     
        
        $fullname=$request->input('firstname');
        $email=$request->input('email');
        $faculty=$request->input('faculty');
        $programme=$request->input('programme');
        $roll=$request->input('rollno');
        $year=$request->input('zip');
        

        
   
      DB::update('update profiles set Fullname = ? , Email = ? , Faculty = ? ,Programme = ? , Rollno = ? , Zip = ? where Userid = ?',[$fullname,$email,$faculty,$programme,$rollno,$zip,$N_id]);
     return redirect()->route('viewprofile');   
      }
      public function del($N_id)
        {
            DB::delete('delete from notices where N_id = ? ',[$N_id]);
            return redirect()->route('adminnotice');
        }
   
}
