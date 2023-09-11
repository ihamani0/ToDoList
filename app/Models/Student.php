<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Student extends Model
{
    use HasFactory;
    

    protected $fillable = [ 
    'Full_Name' ,
    'Department'  , 
    'Birthday' , 
    'Gender' ,
    
    ] ; 

        public function cours():BelongsToMany
        {
            return $this->belongsToMany( 
                Cour::class 
                , 'cours_students' 
            , 'Students_id' ,
            'Courss_id' ,
            'id' ,
            'id');

        }


        
    

}
