<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\MerchantInfo;
use DataTables;


class AdminController extends Controller
{

    public function showData(Request $request)
    {   
            if($request->session()->has('ADMIN_LOGIN')){
                return redirect('admin_panel');
            }else{
                return view('login');
            }               
    }

    public function auth(Request $request)
    {
        //
        //return $request->post(); 
         // echo '<pre>';
        // print_r($result);
         $email=$request->post('email');    
        //     echo '<pre>';
        // print_r($email);
        // die();             
         $result=Admin::where(['email'=>$email])->first();
        //  dd($result);
        // echo '<pre>';
        // print_r($result);
        // die();
        if($result){                 
            if(Hash::check($request->post('password'), $result->password)){
                $request->session()->put('ADMIN_LOGIN',true);
                $request->session()->put('ADMIN_ID',$result->id);
                return redirect('admin');
            }
            else{
                $request->session()->flash('error','please enter valid password');
                return redirect('admin');
            }
        }else{
            $request->session()->flash('error','please enter valid input');
            return redirect('admin');
        }
        
    }

    public function dashboard()
    {
        return view('admin_panel');
    }



 public function updatepassword()
        {
            $r=Admin::find(1);
            $r->password=Hash::make('sp123');
            $r->save();
        }


        public function index(Request $request){

            $table = MerchantInfo::latest()->get();        
            if ($request->ajax()) {
                $data = MerchantInfo::latest()->get();
                return Datatables::of($data)
                        ->addIndexColumn()
                        ->make(true);
            }      
            return view('bookd',compact('table'));

        }
   


        public function fetchemployee( )
    {
        //
        $employee= MerchantInfo::all();
        // dd($employee);
        return response()->json(['emp'=>$employee,]);
    }

}
