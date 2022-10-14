<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use File;
use Illuminate\Support\Facades\Storage;
class ResizeController extends Controller
{
    public function index()
    {
    	return view('resize2');
    }
    public function resizeImage(Request $request)
    {
	    $this->validate($request, [
            'file' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
        ]);
        $image = $request->file('file');
        $input['file'] = time().'.'.$image->getClientOriginalExtension();
        
        if ($image->getClientOriginalName()=='01.png'){
        
        $destinationPath = public_path('thumbnail');
        $imgFile = Image::make($image->getRealPath());
        $imgFile->backup();
         $imgFile->crop(273,369,11,77 )
		->save($destinationPath.$input['file']);
      
        $localFile = File::get($destinationPath.$input['file']);
       
        Storage::disk('ftp')->put(date("Ymd").'-01.png', $localFile);
        $localFile = File::delete($destinationPath.$input['file']);
      
        return back()
        	->with('success','圖片上傳成功')
        	->with('fileName',$input['file']);
        }else if ($image->getClientOriginalName()=='02.png'){
        
            $destinationPath = public_path('thumbnail');
            $imgFile = Image::make($image->getRealPath());
            $imgFile->backup();
               $imgFile->crop(249,385,35,213 )
            ->save($destinationPath.$input['file']);
          
            $localFile = File::get($destinationPath.$input['file']);
           
            Storage::disk('ftp')->put(date("Ymd").'-02.png', $localFile);
           
            $localFile = File::delete($destinationPath.$input['file']);
           
            $imgFile->reset();
            $imgFile->crop(281,217,299,213 )
              
           ->save($destinationPath.$input['file']);
         
           $localFile = File::get($destinationPath.$input['file']);
          
           Storage::disk('ftp')->put(date("Ymd").'-03.png', $localFile);
           $localFile = File::delete($destinationPath.$input['file']);
        
           $imgFile->reset();
           $imgFile->crop(185,137,619,445 )
             
          ->save($destinationPath.$input['file']);
        
          $localFile = File::get($destinationPath.$input['file']);
         
          Storage::disk('ftp')->put(date("Ymd").'-04.png', $localFile);
         
          $localFile = File::delete($destinationPath.$input['file']);
          
            return back()
                ->with('success','圖片上傳成功')
                ->with('fileName',$input['file']);
            }

           else if ($image->getClientOriginalName()=='03.png'){
        
                $destinationPath = public_path('thumbnail');
                $imgFile = Image::make($image->getRealPath());
            
                 $imgFile->crop(273,369,11,77 )
                ->save($destinationPath.$input['file']);
              
                $localFile = File::get($destinationPath.$input['file']);
               
                Storage::disk('ftp')->put(date("Ymd").'-05.png', $localFile);
                $localFile = File::delete($destinationPath.$input['file']);
              
                return back()
                    ->with('success','圖片上傳成功')
                    ->with('fileName',$input['file']);
                }else if ($image->getClientOriginalName()=='04.png'){
                
                    $destinationPath = public_path('thumbnail');
                    $imgFile = Image::make($image->getRealPath());
                    $imgFile->backup();
                    $imgFile->crop(185,137,619,445 )
                    ->save($destinationPath.$input['file']);
                  
                    $localFile = File::get($destinationPath.$input['file']);
                   
                    Storage::disk('ftp')->put(date("Ymd").'-06.png', $localFile);
                    $localFile = File::delete($destinationPath.$input['file']);
                   
                    $imgFile->reset();
                    $imgFile->crop(281,217,299,213 )
                      
                   ->save($destinationPath.$input['file']);
                 
                   $localFile = File::get($destinationPath.$input['file']);
                  
                   Storage::disk('ftp')->put(date("Ymd").'-07.png', $localFile);
                   $localFile = File::delete($destinationPath.$input['file']);
                   $imgFile->reset();
                   $imgFile->crop(185,137,619,445 )
                     
                  ->save($destinationPath.$input['file']);
                
                  $localFile = File::get($destinationPath.$input['file']);
                 
                  Storage::disk('ftp')->put(date("Ymd").'-08.png', $localFile);
                 
                  $localFile = File::delete($destinationPath.$input['file']);
                    return back()
                        ->with('success','圖片上傳成功')
                        ->with('fileName',$input['file']);
                    }
                     
             
         
    }
}
