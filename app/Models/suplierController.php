<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suplierController extends Model
{
    use HasFactory;
    protected $fillable=['FullName','phoneNumber','email','Localisation','fonction','otherContact','rating'];
}
