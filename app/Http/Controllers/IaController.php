<?php
  
namespace App\Http\Controllers;
use App\Models\Ia;
use App\Models\Iap;
use App\Models\Iat;
use App\Models\Lead;
use Illuminate\Http\Request;
use DB;
class IaController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
       
        return view('kelvin2');
    }
    
    public function showia($lead)
 {  
    $lead1=Lead::where('lead',$lead)->first();
   
        if($lead1 )
    {   
        $lead2=Iap::orwhere('lead_id',$lead1->id)->where('type',0)->first();
    
        $lead3=Ia::where('lead_id',$lead1->id)->where('type',0)->first();
       
          
        $lead4=Iat::where('lead_id',$lead1->id)->where('type',0)->first();
     
        return view('kelvin3',['a1'=>$lead1,'a2'=>$lead2,'a3'=>$lead3,'a4'=>$lead4]);
        }
        else  {
            $text1='<div class="continer" >'.'<h1>請確認IA學生資料</h1>'.'</div>';
            echo $text1;
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showfu1($lead)
 {  
    $lead1=Lead::where('lead',$lead)->first();
   
        if($lead1 )
    {   
        $lead2=Iap::where('lead_id',$lead1->id)->where('type',0)->first();
        $lead3=Ia::where('lead_id',$lead1->id)->where('type',0)->first();
        $lead4=Iat::where('lead_id',$lead1->id)->where('type',0)->first();
        $lead5=Iap::where('lead_id',$lead1->id)->where('type',1)->first();
        $lead6=Ia::where('lead_id',$lead1->id)->where('type',1)->first();
        $lead7=Iat::where('lead_id',$lead1->id)->where('type',1)->first();
     
        return view('kelvin4',['a1'=>$lead1,'a2'=>$lead2,'a3'=>$lead3,'a4'=>$lead4,
                     'a5'=>$lead5,'a6'=>$lead6,'a7'=>$lead7]);
        }
        else  {
            $text1='<div class="continer" >'.'<h1>請確認IA學生資料</h1>'.'</div>';
            echo $text1;
        }
    }

    public function showfu2($lead)
    {  
       $lead1=Lead::where('lead',$lead)->first();
      
           if($lead1 )
       {   
           $lead2=Iap::where('lead_id',$lead1->id)->where('type',0)->first();
           $lead3=Ia::where('lead_id',$lead1->id)->where('type',0)->first();
           $lead4=Iat::where('lead_id',$lead1->id)->where('type',0)->first();
           $lead5=Iap::where('lead_id',$lead1->id)->where('type',1)->first();
           $lead6=Ia::where('lead_id',$lead1->id)->where('type',1)->first();
           $lead7=Iat::where('lead_id',$lead1->id)->where('type',1)->first();
           $lead8=Iap::where('lead_id',$lead1->id)->where('type',2)->first();
           $lead9=Ia::where('lead_id',$lead1->id)->where('type',2)->first();
           $lead10=Iat::where('lead_id',$lead1->id)->where('type',2)->first();
        
           return view('kelvin5',['a1'=>$lead1,'a2'=>$lead2,'a3'=>$lead3,'a4'=>$lead4,
                        'a5'=>$lead5,'a6'=>$lead6,'a7'=>$lead7,
                        'a8'=>$lead8,'a9'=>$lead9,'a10'=>$lead10 ]);
           }
           else  {
               $text1='<div class="continer" >'.'<h1>請確認IA學生資料</h1>'.'</div>';
               echo $text1;
           }
       }

     public function showfu3($lead)
 {  
    $lead1=Lead::where('lead',$lead)->first();
   
        if($lead1 )
    {   
        $lead2=Iap::orwhere('lead_id',$lead1->id)->where('type',3)->first();
    
        $lead3=Ia::where('lead_id',$lead1->id)->where('type',3)->first();
       
          
        $lead4=Iat::where('lead_id',$lead1->id)->where('type',3)->first();
     
        return view('kelvin6',['a1'=>$lead1,'a2'=>$lead2,'a3'=>$lead3,'a4'=>$lead4]);
        }
        else  {
            $text1='<div class="continer" >'.'<h1>請確認IA學生資料</h1>'.'</div>';
            echo $text1;
        }
    }

    public function showfu4($lead)
    {  
       $lead1=Lead::where('lead',$lead)->first();
      
           if($lead1 )
       {   
           $lead2=Iap::where('lead_id',$lead1->id)->where('type',3)->first();
           $lead3=Ia::where('lead_id',$lead1->id)->where('type',3)->first();
           $lead4=Iat::where('lead_id',$lead1->id)->where('type',3)->first();
           $lead5=Iap::where('lead_id',$lead1->id)->where('type',4)->first();
           $lead6=Ia::where('lead_id',$lead1->id)->where('type',4)->first();
           $lead7=Iat::where('lead_id',$lead1->id)->where('type',4)->first();
        
           return view('kelvin4',['a1'=>$lead1,'a2'=>$lead2,'a3'=>$lead3,'a4'=>$lead4,
                        'a5'=>$lead5,'a6'=>$lead6,'a7'=>$lead7]);
           }
           else  {
               $text1='<div class="continer" >'.'<h1>請確認IA學生資料</h1>'.'</div>';
               echo $text1;
           }
       }


   

}