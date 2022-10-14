<?php

namespace App\Models;

      
   use Illuminate\Database\Eloquent\Model;
   use Illuminate\Database\Eloquent\Factories\HasFactory;
      
   class Document extends Model
   {   use HasFactory;
        /**
        * The attributes that are mass assignable.
        *
        * @var array
        */
       protected $fillable = [
           'title', 'file_name'
       ];
   }
