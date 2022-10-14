<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Lead;
class Iat extends Model
{
    use HasFactory;
    protected $table = 'iat';
    protected $guarded = [];
   
    public function lead()
    {
        return $this->belongsTo(Lead::class,'id','lead_id');
    }
}
