<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use App\Models\datajenispelatihan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class datapeserta extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $guarded = ['id'];

    public function jenispelatihan(){
        return $this->belongsTo(datajenispelatihan::class,'id','KPelatihan','NPelatihan');
    }

}
