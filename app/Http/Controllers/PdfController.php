<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use PDF;

use App\Models\Ia;
use App\Models\Iap;
use App\Models\Iat;
use App\Models\Lead;

use DB;
  
class PdfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF($lead)
    {    $lead1=Lead::where('lead',$lead)->first();
   
        if($lead1 )
    {   
        $lead2=Iap::orwhere('lead_id',$lead1->id)->where('type',0)->first();
    
        $lead3=Ia::where('lead_id',$lead1->id)->where('type',0)->first();
       
          
        $lead4=Iat::where('lead_id',$lead1->id)->where('type',0)->first();
     
        $pdf = PDF::loadView('kelvin3',['a1'=>$lead1,'a2'=>$lead2,'a3'=>$lead3,'a4'=>$lead4]);
      
        return $pdf->download($lead1->lead.$lead1->name.'IA對照表.pdf');   
        }
        else  {
            $text1='<div class="continer" >'.'<h1>請確認IA學生資料</h1>'.'</div>';
            echo $text1;
        }
        
      
      
     
    
       
    }
}