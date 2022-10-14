<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\Lead;
use App\Models\Ia;
use App\Models\Iap;
use App\Models\Iat;
use File;
use Storage;
use Image;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Leads extends Component
{   use LivewireAlert;
    use WithPagination;
    use WithFileUploads;
    public $photos = [];
    public $file=[];
    protected $paginationTheme = 'bootstrap';
    public $search; 
    public  $index1=0,$index2=0,$index3=0;
    public $lead,$name,$lead_id,$type;
    public $sp,$tp,$sl,$sa,$gc,$gl,$gr;
    public $p1,$p2,$p3,$p4,$p12,$p22,$p32,$p42;
    public $s1,$s2,$s3,$s4,$s5,$s6,$s7;
    public $n1,$n2,$n3,$n4,$n5,$n6,$n7,$n8;
    public $date1,$typename,$value;
    protected $queryString = ['search'];
   
    protected $rules = [
        'lead' => 'required|min:5',
        'name' => 'required|min:2',
    ];
    public function updatingSearch()
       {
          $this->resetPage();

         }
    private function resetInputFields(){
        $this->lead = '';
        $this->name = '';
        $this->type='';
        $this->lead_id='';
        $this->date1='';
        $this->typename='';
        $this->p1='';$this->p2='';$this->p3='';$this->p4='';$this->p12='';$this->p22='';$this->p32='';$this->p42='';
        $this->sp='';$this->tp='';$this->sl='';$this->sa='';$this->gc='';$this->gl='';$this->gr='';
        $this->s1=null;$this->s2=null;$this->s3=null;$this->s4=null;$this->s5=null;$this->s6=null;
        $this->n1='';$this->n2=''; $this->n3='';$this->n4=''; $this->n5='';$this->n6=''; $this->n7='';$this->n8='';
        $this->photos = null;
    }
    public function cancel()
    {
        $this->resetValidation();
        $this->resetInputFields();
        $this->reset();
        return back();
       
       
    }

    public function typechose()
    {
        if($this->type==0){
            $typename1='ia';
        }
        else if($this->type==1){
            $typename1='fu1';
        } 
        else if($this->type==2){
            $typename1='fu2';
        }
        else if($this->type==3){
            $typename1='fu3';
        }
        else if($this->type==4){
            $typename1='fu4';
        }
    }

    public function render()
    { 
        return view('livewire.leads',
        [
            'leads' => Lead::orWhere('lead', 'like', '%'.$this->search.'%')
            ->orWhere('name','like','%'.$this->search.'%')
            ->orderBy('id','desc')
            ->paginate(3),

        ])->layout('layouts.app1');
    }

    public function store()
    {   $method=1;
        $validatedDate = $this->validate([
            'lead' => 'required|min:5',
            'name' => 'required|min:2',
        ]);
        $leads=Lead::create($validatedDate);
        
       
       
        $this->alert('success', '學員創建成功 Successfully.' , [
            'position' => 'top', 'timer' => 3000
        ]);

        $this->resetInputFields();

        $this->emit('userStore'); // Close model to using to jquery
       
        return redirect()->to('/lead');
    }
    
    public function updateiap()
    {   $this->validate([
        'photos.*' => 'image|max:1024', // 1MB Max
    ]);  

    
  $image1=$image2=$image3=$image4=$image5=$image6=$image7=$image8=$pathname22=NULL;
    
  if($this->type==0){
        $typename1='ia';
    }
    else if($this->type==1){
        $typename1='fu1';
    } 
    else if($this->type==2){
        $typename1='fu2';
    }
    else if($this->type==3){
        $typename1='fu3';
    }
    else if($this->type==4){
        $typename1='fu4';
    }
  

    if($this->photos){
   
      
   
    foreach ($this->photos as $photo) {
        $pathname22=$photo->store('dore/'.$this->lead.$this->name.'/'.$typename1.'/post','public');
       
      
        if ($photo->getClientOriginalName()=='01.png'){
     
        $filename= time().'-01.'.$photo->getClientOriginalExtension();
        $destinationPath = 'dore/'.$this->lead.$this->name.'/'.$typename1.'/post'.'/'.$filename;
        $destinationPath1 = public_path('storage\dore\\'.$this->lead.$this->name.'\\'.$typename1.'\post'.'\\'.$filename);
    $imgFile = Image::make($photo->getRealPath());
   
     $imgFile->crop(273,369,11,77 )
    ->save($destinationPath1);

  
  
    $image1=$this->p1;
    if($imgFile){
      $pathname=public_path('storage/'.$image1);
      if(File::exists($pathname))
      File::delete($pathname);
    
      
      $image1= $destinationPath;
     
     }
   }

   else if ($photo->getClientOriginalName()=='02.png'){
    $filename= time().'-02.'.$photo->getClientOriginalExtension();
         $destinationPath = 'dore/'.$this->lead.$this->name.'/'.$typename1.'/post'.'/'.$filename;
         $destinationPath1 = public_path('storage\dore\\'.$this->lead.$this->name.'\\'.$typename1.'\post'.'\\'.$filename);
    $imgFile = Image::make($photo->getRealPath());
     $imgFile->backup();
     $imgFile->crop(249,385,35,213 )
     ->save($destinationPath1);
   
  
     $image2=$this->p2;
     if($imgFile){
       $pathname=public_path('storage/'.$image2);
       if(File::exists($pathname))
       File::delete($pathname);
      
      
       $image2=  $destinationPath;
      
      }
      
      $filename= time().'-03.'.$photo->getClientOriginalExtension();
      $destinationPath = 'dore/'.$this->lead.$this->name.'/'.$typename1.'/post'.'/'.$filename;
      $destinationPath1 = public_path('storage\dore\\'.$this->lead.$this->name.'\\'.$typename1.'\post'.'\\'.$filename);
      $imgFile->reset();
      $imgFile->crop(281,217,299,213 )
      ->save($destinationPath1);
    
  
      $image3=$this->p3;
      if($imgFile){
        $pathname=public_path('storage/'.$image3);
        if(File::exists($pathname))
        File::delete($pathname);
       
        $image3=  $destinationPath;
       
       }
       
       $filename= time().'-04.'.$photo->getClientOriginalExtension();
       $destinationPath = 'dore/'.$this->lead.$this->name.'/'.$typename1.'/post'.'/'.$filename;
       $destinationPath1 = public_path('storage\dore\\'.$this->lead.$this->name.'\\'.$typename1.'\post'.'\\'.$filename);
       $imgFile->reset();
       $imgFile->crop(185,137,619,445 )
       ->save($destinationPath1);

       $image4=$this->p4;
       if($imgFile){
         $pathname=public_path('storage/'.$image4);
         if(File::exists($pathname))
         File::delete($pathname);
        
         $image4=  $destinationPath;
        
        }

    
    }
    


   else if ($photo->getClientOriginalName()=='03.png'){
    $filename= time().'-05.'.$photo->getClientOriginalExtension();
    $destinationPath = 'dore/'.$this->lead.$this->name.'/'.$typename1.'/post'.'/'.$filename;
    $destinationPath1 = public_path('storage\dore\\'.$this->lead.$this->name.'\\'.$typename1.'\post'.'\\'.$filename);
         $imgFile = Image::make($photo->getRealPath());
     
          $imgFile->crop(273,369,11,77 )
         ->save($destinationPath1);
       
        
         $image5=$this->p12;
         if($imgFile){
           $pathname=public_path('storage/'.$image5);
           if(File::exists($pathname))
           File::delete($pathname);
          
      
           $image5= $destinationPath;
          
          }
        }
     
        else if ($photo->getClientOriginalName()=='04.png'){
         $filename= time().'-06.'.$photo->getClientOriginalExtension();
         $destinationPath = 'dore/'.$this->lead.$this->name.'/'.$typename1.'/post'.'/'.$filename;
         $destinationPath1 = public_path('storage\dore\\'.$this->lead.$this->name.'\\'.$typename1.'\post'.'\\'.$filename);
          $imgFile = Image::make($photo->getRealPath());
          $imgFile->backup();
          $imgFile->crop(249,385,35,213 )
          ->save($destinationPath1);
        
        
          $image6=$this->p22;
          if($imgFile){
            $pathname=public_path('storage/'.$image6);
            if(File::exists($pathname))
            File::delete($pathname);
           
            $image6=  $destinationPath;
           }
           
           $filename= time().'-07.'.$photo->getClientOriginalExtension();
         $destinationPath = 'dore/'.$this->lead.$this->name.'/'.$typename1.'/post'.'/'.$filename;
         $destinationPath1 = public_path('storage\dore\\'.$this->lead.$this->name.'\\'.$typename1.'\post'.'\\'.$filename);
           $imgFile->reset();
           $imgFile->crop(281,217,299,213 )
           ->save($destinationPath1);
         
         
           $image7=$this->p32;
           if($imgFile){
             $pathname=public_path('storage/'.$image7);
             if(File::exists($pathname))
             File::delete($pathname);
            
      
             $image7= $destinationPath;
            
            }
            $filename= time().'-08.'.$photo->getClientOriginalExtension();
         $destinationPath = 'dore/'.$this->lead.$this->name.'/'.$typename1.'/post'.'/'.$filename;
         $destinationPath1 = public_path('storage\dore\\'.$this->lead.$this->name.'\\'.$typename1.'\post'.'\\'.$filename);
            $imgFile->reset();
            $imgFile->crop(185,137,619,445 )
            ->save($destinationPath1);
          
           
            $image8=$this->p42;
            if($imgFile){
              $pathname=public_path('storage/'.$image8);
              if(File::exists($pathname))
              File::delete($pathname);
              $image8=$destinationPath;
            
              
             }
         

        }

        else     if ($photo->getClientOriginalName()=="p1.png"){
     
          
            $image1=$this->p1;
           
              $pathname=public_path('storage/'.$image1);
              if(File::exists($pathname))
              File::delete($pathname);
              $image1=$photo->store('dore/'.$this->lead.$this->name.'/'.$typename1.'/post','public');
          
        }
        else     if ($photo->getClientOriginalName()=="p2.png"){
     
          
            $image2=$this->p2;
           
              $pathname=public_path('storage/'.$image2);
              if(File::exists($pathname))
              File::delete($pathname);
              $image2=$photo->store('dore/'.$this->lead.$this->name.'/'.$typename1.'/post','public');
          
        }
        else     if ($photo->getClientOriginalName()=="p3.png"){
     
          
            $image3=$this->p3;
           
              $pathname=public_path('storage/'.$image3);
              if(File::exists($pathname))
              File::delete($pathname);
              $image3=$photo->store('dore/'.$this->lead.$this->name.'/'.$typename1.'/post','public');
          
        }
        else     if ($photo->getClientOriginalName()=="p4.png"){
     
          
            $image4=$this->p4;
           
              $pathname=public_path('storage/'.$image4);
              if(File::exists($pathname))
              File::delete($pathname);
              $image4=$photo->store('dore/'.$this->lead.$this->name.'/'.$typename1.'/post','public');
          
        }
        if ($photo->getClientOriginalName()=="p5.png"){
     
          
            $image5=$this->p12;
           
              $pathname=public_path('storage/'.$image5);
              if(File::exists($pathname))
              File::delete($pathname);
              $image5=$photo->store('dore/'.$this->lead.$this->name.'/'.$typename1.'/post','public');
          
        }
        else     if ($photo->getClientOriginalName()=="p6.png"){
     
          
            $image6=$this->p22;
           
              $pathname=public_path('storage/'.$image6);
              if(File::exists($pathname))
              File::delete($pathname);
              $image6=$photo->store('dore/'.$this->lead.$this->name.'/'.$typename1.'/post','public');
          
        }
        else     if ($photo->getClientOriginalName()=="p7.png"){
     
          
            $image7=$this->p32;
           
              $pathname=public_path('storage/'.$image7);
              if(File::exists($pathname))
              File::delete($pathname);
              $image7=$photo->store('dore/'.$this->lead.$this->name.'/'.$typename1.'/post','public');
          
        }
        else     if ($photo->getClientOriginalName()=="p8.png"){
     
          
            $image8=$this->p42;
           
              $pathname=public_path('storage/'.$image8);
              if(File::exists($pathname))
              File::delete($pathname);
              $image8=$photo->store('dore/'.$this->lead.$this->name.'/'.$typename1.'/post','public');
          
        }
         
         
       
     
       
   }  
  
   
            
  
}
   

    
           
       
        
        $iaa = Iap::where('lead_id',$this->lead_id)->where('type',$this->type)->first();
      
        if($iaa){
            $iaa->p1=$image1;
            $iaa->p2=$image2;
            $iaa->p3=$image3;
            $iaa->p4=$image4;
            $iaa->p12=$image5;
            $iaa->p22=$image6;
            $iaa->p32=$image7;
            $iaa->p42=$image8;
            $iaa->update();
            }

        $this->alert('success', '學員'.$this->typename.'-Post成績注入成功 Successfully.' , [
            'position' => 'center','timer' => 2000
        ]);
       
        $this->resetInputFields();
        $this->emit('userUpdateIap');
        $this->index1++;
        return back();
        
    }

   


    public function updateia()
    {      
        $this->validate([
            'photos.*' => 'image|max:1024', // 1MB Max
        ]);  
    
        
       
    $image1=$image2=$image3=$image4=$image5=$image6=$image7=NULL;
if($this->type==0){
    $typename1='ia';
}
else if($this->type==1){
    $typename1='fu1';
} 
else if($this->type==2){
    $typename1='fu2';
}
else if($this->type==3){
    $typename1='fu3';
}
else if($this->type==4){
    $typename1='fu4';
}
      
if($this->photos){
   
      
   
    foreach ($this->photos as $photo) {

        $filename=$photo->getClientOriginalName();
       
        if(strpos($filename,'05.png')||($filename=='sp.png')) {
      
            $image1=$this->sp;
           if($photo){
           $pathname=public_path('storage/'.$image1);
          if(File::exists($pathname))
           File::delete($pathname);
          $image1=$photo->store('dore/'.$this->lead.$this->name.'/'.$typename1.'/omt','public');
           }
        }
        
       if(strpos($filename,'08.png')||($filename=='tp.png')) {
      
            $image2=$this->tp;
            if($photo){
            $pathname=public_path('storage/'.$image2);
           if(File::exists($pathname))
            File::delete($pathname);
           $image2=$photo->store('dore/'.$this->lead.$this->name.'/'.$typename1.'/omt','public');
        }
    }
      if(strpos($filename,'12.png')||($filename=='sl.png')) {
            $image3=$this->sl;
            if($photo){
            $pathname=public_path('storage/'.$image3);
           if(File::exists($pathname))
            File::delete($pathname);
           $image3=$photo->store('dore/'.$this->lead.$this->name.'/'.$typename1.'/omt','public');
        }
    }
       if(strpos($filename,'13.png')||($filename=='sa.png')) {
            $image4=$this->sa;
            if($photo){
            $pathname=public_path('storage/'.$image4);
           if(File::exists($pathname))
            File::delete($pathname);
           $image4=$photo->store('dore/'.$this->lead.$this->name.'/'.$typename1.'/omt','public');
        }
    }
       if(strpos($filename,'02.png')||($filename=='gc.png')) {
            $image5=$this->gc;
            if($photo){
            $pathname=public_path('storage/'.$image5);
           if(File::exists($pathname))
            File::delete($pathname);
           $image5=$photo->store('dore/'.$this->lead.$this->name.'/'.$typename1.'/omt','public');
        }
    }
       if(strpos($filename,'03.png')||($filename=='gl.png')) {       
        $image6=$this->gl;
            if($photo){
            $pathname=public_path('storage/'.$image6);
           if(File::exists($pathname))
            File::delete($pathname);
           $image6=$photo->store('dore/'.$this->lead.$this->name.'/'.$typename1.'/omt','public');
        }
        }
            if(strpos($filename,'04.png')||($filename=='gr.png')) {
            $image7=$this->gr;
            if($photo){
            $pathname=public_path('storage/'.$image7);
           if(File::exists($pathname))
            File::delete($pathname);
           $image7=$photo->store('dore/'.$this->lead.$this->name.'/'.$typename1.'/omt','public');
            }
        

    }
}
}

$iaa = Ia::where('lead_id',$this->lead_id)->where('type',$this->type)->first();
      
if($iaa){

$iaa->sp=$image1;
$iaa->tp=$image2;
$iaa->sl=$image3;
$iaa->sa=$image4;
$iaa->gc=$image5;
$iaa->gl=$image6;
$iaa->gr=$image7;

$iaa->update();
}
  

$this->alert('success', '學員'.$this->typename.'-Omt成績注入成功 Successfully.' , [
    'position' => 'center','timer' => 2000
]);

$this->resetInputFields();
$this->emit('userUpdateIa');
$this->index2++;
return back();
        
    }

        
   
    
    public function updateiat()
    {
        $data = $this->validate([
            
            's1' => '',
            's2' => '',
            's3' => '',
            's4' => '',
            's5' => '',
            's6' => '',
            's7' => '',
            'date1'=>'',
          

        ]);

             
        $data['lead_id']=$this->lead_id;
        $data['date1']=$this->date1;
        $data['type']=$this->type;
        $data['s1'] = $this->s1;
        $data['s2'] = $this->s2;
        $data['s3'] = $this->s3=42-($this->s1+$this->s2);
        $data['s4'] = $this->s4;
        $data['s5'] = $this->s5;
        $data['s6'] = $this->s6=42-($this->s4+$this->s5+$this->s1);
        if($this->type==0){
        $data['s7'] = $this->s7;
        }
      
        
        $iaa = Iat::where('lead_id',$this->lead_id)->where('type',$this->type)->first();
        if($iaa){
        $iaa->update($data);
        }else
        {
          Iat::create($data);
        }
      
        
        $this->alert('success', '學員'.$this->typename.'-Table數值注入成功 Successfully.' , [
            'position' => 'center','timer' => 2000,
        ]);
    
        $this->resetInputFields();
        $this->emit('userUpdateIat');
        $this->index3++;
        return back(); 
      
        
      
        
    }

  
 
    public function edit($id)
    {
      
        $leads = Lead::where('id',$id)->first();
        $this->lead_id = $id;
        $this->lead = $leads->lead;
        $this->name = $leads->name;
       
     }
    public function editiap($id,$type,$typename)
    { 
      
        $leads = Lead::where('id',$id)->first();
        $ias=Iap::where('lead_id',$id)->where('type',$type)->first();
        if(!$ias){
            Iap::create(['lead_id' => $id,'type'=>$type]);
            $ias=Iap::where('lead_id',$id)->where('type',$type)->first();
        }
        $this->type=$type;
        $this->typename=$typename;
        $this->lead_id = $ias->lead_id;
        $this->type=$ias->type;
        $this->p1 = $ias->p1;
        $this->p2 = $ias->p2;
        $this->p3 = $ias->p3;
        $this->p4 = $ias->p4;
        $this->p12 = $ias->p12;
        $this->p22 = $ias->p22;
        $this->p32 = $ias->p32;
        $this->p42 = $ias->p42;
        $this->lead=$leads->lead;
        $this->name=$leads->name;
        
     }

    
    
     public function editia($id,$type,$typename)
     {
         
         $leads = Lead::where('id',$id)->first();
         $ias=Ia::where('lead_id',$id)->where('type',$type)->first();
         if(!$ias){
             Ia::create(['lead_id' => $id,'type'=>$type]);
             $ias=Ia::where('lead_id',$id)->where('type',$type)->first();
         }
         $this->type=$type;
         $this->typename=$typename;
         $this->lead_id = $ias->lead_id;
         $this->type=$ias->type;
         $this->sp = $ias->sp;
         $this->tp = $ias->tp;
         $this->sl = $ias->sl;
         $this->sa = $ias->sa;
         $this->gc = $ias->gc;
         $this->gl = $ias->gl;
         $this->gr = $ias->gr;
         $this->lead=$leads->lead;
         $this->name=$leads->name;
       
      }
      
      

      
     

    
     public function editiat($id,$type,$typename)
     {
        
     
         $leads = Lead::where('id',$id)->first();
         $ias=Iat::where('lead_id',$id)->where('type',$type)->first();
         if(!$ias){
             Iat::create(['lead_id' => $id,'type'=>$type]);
             $ias=Iat::where('lead_id',$id)->where('type',$type)->first();
         }
         $this->type=$type;
         $this->typename=$typename;
         $this->lead_id = $ias->lead_id;
         $this->type=$ias->type;
         $this->date1=$ias->date1;
         $this->s1 = $ias->s1;  //偷跑
         $this->s2 = $ias->s2;  //太慢
         $this->s3 = $ias->s3=42-($ias->s1+$ias->s2);  
         $this->s4 = $ias->s4;  //未達
         $this->s5 = $ias->s5;  //超過
         $this->s6 = $ias->s6=42-($ias->s4+$ias->s5+$ias->s1);  // 偷跑
         if($type==0) {  $this->s7=$ias->s7;}
         $this->lead=$leads->lead;
         $this->name=$leads->name;
       
      }

      
      
      
     
     
    

     public function update()
    {
        $validatedDate = $this->validate([
            'lead' => 'required|min:5',
            'name' => 'required|min:2',
        ]);
        if ($this->lead_id) {
            $leads = Lead::find($this->lead_id);
            $leads->update([
                'lead' => $this->lead,
                'name' => $this->name,
            ]);
            $this->updateMode = false;
            session()->flash('message', '學員資料更新成功');
            $this->alert('success', '學員資料更新成功 Successfully.' , [
                'position' => 'top','timer' => 3000
            ]);
            $this->resetInputFields();
            $this->emit('userUpdate');
            $this->resetInputFields();
              return redirect()->to('/lead');
        }
    }

    public function postdel($id)
    {      $this->del_id=$id;
        $this->alert('warning', '刪除資料?', [
            'position' => 'top',
            'timer' => 3000,
            'toast' => true,
            'showConfirmButton' => true,
            'onConfirmed' => 'delete',
            'text' => '確定要刪除?',
            'confirmButtonText' => '刪除',
            'cancelButtonText' => '取消',
            'showCancelButton' => true,
            'onDismissed' => '',
           ]);



    }
    public function delete($id)
    {
        if($id){
            $de1=Lead::where('id',$id)->first();
            Ia::where('lead_id',$del->id)->delete();
            $del->delete();
            session()->flash('message', '學員刪除成功Successfully,請記得手動刪除學員圖片,懶得寫code了.');
            $this->alert('success', '學員刪除成功Successfully,請記得手動刪除學員圖片,懶得寫code了.' , [
                'position' => 'top','timer' => 3000
            ]);
        }
        return back();
    }
   
    public function show($lead,$type,$typename)
    {   

       if($type==0)
        return redirect()->to('/ia'.'/'.$lead);
        if($type==1)
        return redirect()->to('/fu1'.'/'.$lead);
        if($type==2)
        return redirect()->to('/fu2'.'/'.$lead);
        if($type==3)
        return redirect()->to('/fu3'.'/'.$lead);
        if($type==4)
        return redirect()->to('/fu4'.'/'.$lead);
    }
   
}

