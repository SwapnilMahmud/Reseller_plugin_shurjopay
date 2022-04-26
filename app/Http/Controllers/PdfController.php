<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\MerchantInfo;
use Rap2hpoutre\FastExcel\FastExcel;
class PdfController extends Controller
{
        
    public function generate(){
        $data=MerchantInfo::all();
        // echo $data;
        // die();
        // return view('pdf.pdfloader',compact('data'));
        $fileName='student_info.pdf';
        $mpdf=new \Mpdf\Mpdf([
              'margin_left'=>10,
              'margin_right'=>10,
              'margin_top'=>15,
              'margin_bottom'=>12,
              'margin_header'=>10,
              'margin_footer'=>12  
            ]);
            $html=\View::make('pdf.pdfloader')->with('data',$data);
            $html=$html->render();
            $mpdf->SetHeader('Merchant Information 1|Merchant  Info|{PAGENO}');
            $mpdf->SetFooter('Merchant Information');           
            $mpdf->WriteHTML($html);
            $mpdf->Output($fileName,'I');
    }
    
    public function generateexcel(){
       $data=MerchantInfo::all();
       return (new FastExcel(MerchantInfo::all()))->download('file.xlsx');
        
    }

    public function generatinvoice(){
        // $data=Student::all();
        
     $invoices =MerchantInfo::orderBy('created_at', 'DESC')->get();
     return (new FastExcel($invoices))->download('Merchant_Transaction.csv');
         
     }
}
