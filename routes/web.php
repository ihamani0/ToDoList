<?php

//use App\Http\Controllers\EmploieCntrl;
use App\Http\Controllers\StudentsCntrl;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Service\Test;
use App\Service\TestService;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', function () {
    return view('home');
});
////////////////////CRUD SYSTEM/////////////////////////////
Route::controller(StudentsCntrl::class)->group(function ()
{

//1-- GEt All DATA Index
Route::get('/Students', "Index")->name('Student.index');

//2- Create New Students
Route::get('/Students/Create' ,'Create')->name('Student.create');
Route::post('Students' ,'Store')->name('Students.store') ;

// - Edite Route Students
Route::get('/Students/{Student}/edit' , 'Edit')->name('Student.edit');

//3-- Get Single DAta
Route::get('/Students/{Student}',  'Show')->name('Student.show');

// Update Data
Route::put('Students/{Student}' ,  'Update')->name('Student.update') ;

//Delete Data
Route::delete('Students/{Student}' , 'Destroy')->name('Student.destroy');

});
///////////////////////////////////////////////////////

//Make NameSpace in File Route Provied it's Help for bach matkatharch use fi hada file ta3 route
//RouteProvide
//exmple
Route::get('exmple','exmpleCntrl@__invoke');


//make a new middlware 1-Make:middlware 2-install new middlware in krenale
//cmd artisan make:midllware
//krenal Http
//exmple
Route::get('exmple2' , fn () => 'midlware test')->middleware('Test:issam');


//Route Macro
//RouteProvide
// method boot()
// Route::macro('name_route = myweb ' , $callBack Function)
Route::MyWeb('issam');


Route::controller('EmploieCntrl')->group(function (){
    Route::prefix('Emploie')->group( function (){
            Route::get('/' , 'index')->name('Emploie.index');
            Route::get('/create' , 'create')->name('Emploie.create');
            Route::post('/','store')->name('Emploie.store');
            Route::get('/{emploie}/edit' , 'edit')->name('Emploie.edit');
            Route::put('/{emploie}' , 'update')->name('Emploie.update');
            Route::delete('/{emploie}' , 'destroy')->name('Emploie.destroy');
            Route::delete('/{emploie}/force' , 'force')->name('Emploie.force');
            Route::post('/{emploie}/restore' , 'restore')->name('Emploie.restore');


    });
});


// Auth::routes();

// Route::get('/',"HomeController@index")->name('home');


// Route::get('put/session' , function (){
//     session()->put('Students' , ['Name'=> "issam" , "LastName" => "Hamani"]);
// });

// Route::get('get/session' , function (){
//     dd(session()->all());
// });

Route::get('TodoList' , function (){
    return view('Todo');
});



Auth::routes();

//File Upload
Route::prefix('File')->group(function (){
    Route::resource('file' , FileController::class);
});




