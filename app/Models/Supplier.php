<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
protected $fillable=['FullName','phoneNumber','email','Localisation','fonction','otherContact','rating'];
public function company(){
    return $this->belongsTo(Company::class);
}
}
