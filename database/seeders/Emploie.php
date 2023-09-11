<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Emploie as Emp ; 
use Illuminate\Support\Str;


class Emploie extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


            //using factor to insrt fake data 
            Emp::factory()->count(5)->create() ;










        //Using just seeder to insert data with for loop
        // for ($i=1; $i<= 10 ; $i++) 
        // {          
        //     Emp::create([
        //         'Name' => Str::random(6) ,
        //         'Department' => Str::random(6) , 
        //         'Salary' => rand(100 , 999)
        //     ]);
            
        // }
    }
}
