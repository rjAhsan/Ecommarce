<?php
use App\Todo;
$Customers=2;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('post');
});

// #Route Redirect Funcationaly
//Route::get('/A', function () {
//   echo "IM Route A";
//});
//
//Route::get('/B', function () {
//    echo "IM Route B";
//});
//
//Route::redirect('/A','/B',301);

// #Route  Prefix
//Route::prefix('admin')->group(function () {
//    Route::get('users', function () {
//        echo "Route Prefix";
//    });
//});



//Route::resource('test','CustomersController');

Route::get('/test/{customers}','CustomersController@shows');
Route::get('/test2/{todo}','TodoController@shows');



Route::get('/Refreshing', function () {

    $data_1=DB::table('todos')->where('name','ahsan')->get();

    //$data_1=Todo::where('name','ahsan')->get();
  //$data_2=$data_1->fresh();
  //echo $data_1;
    $data_1->count();
    dd($data_1->duplicates());

});



Route::resource('nameList','TodoController');

Route::post('/CreatePost','TodoController@CreatePOSt');
Route::delete('/delete/{id}','TodoController@delPOSt');
Route::get('/Editdata/{id}','TodoController@EditPost');
Route::post('Editdata/{id}','TodoController@EditData');
Route::get('/search/{keyWord}','TodoController@Search');


//Route::get('/newdata','TodoController@index');


//Add FallBack If No Route Found Then fallback Function Call
//Route::fallback(function() {
//    return 'Hm, why did you land here somehow?';
//});