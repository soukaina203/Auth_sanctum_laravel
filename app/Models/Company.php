<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        'Name', 'email',
        'phoneNumber', 'address', 'secteur', "descriptionDActivite",
        'otherContact', 'nameOfCEO'
    ];
    public function user(){
        return $this->hasMany(User::class);
    }
    public function client(){
        return $this->hasMany(Client::class);
    }
    public function product(){
        return $this->hasMany(Product::class);
    }
    public function supplier(){
        return $this->hasMany(Supplier::class);
    }
}
