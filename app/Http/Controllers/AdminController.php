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
         $result=Admin::where(['email'=>$email])->first();
         
    //   echo '<pre>';
    //     print_r($result);
    //     die();
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
//  public function showdata(Request $request)
//         {
            
//         $table = MerchantInfo::latest()->get();        
//         if ($request->ajax()) {
//             $data = MerchantInfo::latest()->get();
//             return Datatables::of($data)->addIndexColumn()->make(true);
//         }      
//         return view('transactiontables',compact('table'));
//         }


// public function getCategory(){
//     $filter_data = $this->input->post('filter_data');
//     parse_str($filter_data, $params);
//     $category = $this->home_model->categoryList($params);
//     $json_data['data'] = $category;
//     echo json_encode($json_data);
//    }
//     //
    // public function getData(Request $request){
        
    //     $draw=$request->get('draw');
       
    //     $start=$request->get("start");
    //     dd($start);
    //     $rowPerPage=$request->get("length");
    //     $orderArray=$request->get('order');       
    //     $columnNameArray=$request->get('columns');
    //     $searchArray=$request->get('search');
    //     $columnIndex=$orderArray[0]['column'];
    //     $columnName=$columnNameArray[$columnIndex]['data'];
    //     $columnSortOrder=$orderArray[0]['dir'];
    //     $searchValue=$searchValue['value'];
    //     $users=\DB::table('merchant_informations');
    //     $total=$users->count();
    //     $totalFilter=$total;
    //     $arrData=\DB::table('merchant_informations');
    //     $arrData=$arrData->get();
    //     $response=array(          
    //         "draw"=>intval($draw),
    //         "recordsTotal"=>$total,
    //         "recordFiltered"=>$totalFilter,
    //         "data"=>$arrData,
    //     );
    //     return response()->json($response);
    // }

}
