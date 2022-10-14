<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ia;
use App\Models\Iap;
use App\Models\Iat;

class Lead extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'leads';
    public function ia()
    {
        return $this->hasOne(Ia::class,'lead_id','id');
    }
    public function iap()
    {
        return $this->hasOne(Iap::class,'lead_id','id');
    }
    public function iat()
    {
        return $this->hasOne(Iat::class,'lead_id','id');
    }
    
}
