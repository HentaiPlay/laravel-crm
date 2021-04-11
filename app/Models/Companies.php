<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employees;

class Companies extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'website',
        'logo'
    ];

    public function getEmployees(){
        return $this->hasMany(Employees::class);
    }
}
