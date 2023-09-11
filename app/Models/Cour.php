<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Cour extends Model
{
    use HasFactory;
    protected $fillable = [
        'Name' , 
        'Charge' , 
    ];


    public  function students():BelongsToMany
    {
        return $this->belongsToMany(
        Student::class 
        , 'cours_students' 
        , 'Courss_id' ,
        'Students_id' ,
        'id');
    }
    
}
