<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Lead;
class Iap extends Model
{
    use HasFactory;
    protected $table = 'iap';
    protected $guarded = [];
   
    public function lead()
    {
        return $this->belongsTo(Lead::class,'id','lead_id');
    }
}
