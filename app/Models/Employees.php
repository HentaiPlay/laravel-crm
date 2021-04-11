<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Companies;

class Employees extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getCompanies(){
        return $this->belongsTo(Companies::class, 'company_id');
    }
}
