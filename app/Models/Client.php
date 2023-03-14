<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable=['FullName','phoneNumber','email','otherContact','fidalite'];
    public function company(){
        return $this->belongsTo(Company::class);
    }
}
