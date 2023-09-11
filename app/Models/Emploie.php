<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Emploie extends Model
{
    use HasFactory,SoftDeletes;
    
    protected $fillable = ['Name' ,'Department','Salary'] ;


    public function cour(){
        return $this->hasMany(Cour::class , "emploie_id" , 'id') ; 
    }
}
