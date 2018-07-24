<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/Route::get('/layout2', function () {
    return view('admin.layout2');
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('/reg', function () {
    return view('reg');
});
Route::get('/loginn', function () {
    return view('admin.login');
});
Route::get('/layout', function () {
    return view('admin.layout');
});
Route::get('/front', function () {
    return view('front');
});
Route::get('/main', function () {
    return view('main');
});
Route::get('/showNo','CpanelController@showNo');
Route::get('/showPO','CpanelController@showPO');
Route::get('/showId','CpanelController@showId');

Route::get('/ss/{user_id}','CpanelController@no');
Route::post('/cpanel/{user_id}','CpanelController@store');
Route::get('/cpanel/{user_id}','CpanelController@index');
Route::get('/cpanel222/{user_id}','CpanelController@index222');

//Route::resource('cpanel','CpanelController');
Route::get('profile','CpanelController@profileindex');
Route::get('profile/{user_id}','CpanelController@profile');
 

 

 
Route::get('/search/{user_id}','CpanelController@searchfirst');

Route::post('/after_search/{user_id}','CpanelController@search');

Route::post('/update2/{id}','CpanelController@update2');
Route::get('/edit/{id}','CpanelController@edit2');
Route::get('/mydetail/{user_id}','CpanelController@mydetail');

 
 Route::get('/group/{user_id}','CpanelController@group');
Route::post('/update1/{id}/{user_id}','CpanelController@update1');

Route::get('allusers/{user_id}','CpanelController@allusers');

Route::get('edit2/{PurchaseOrderNo}/{user_id}','CpanelController@edit');
Route::get('delete2/{PurchaseOrderNo}','CpanelController@destroy');
Route::post('/update3/{PurchaseOrderNo}/{user_id}','CpanelController@update3');

 
Route::get('/likesearch/{user_id}','CpanelController@editsearch');
Route::get('/likeafter_search/{user_id}','CpanelController@likesearch');
Route::get('/after_edit', function () {
    return view('forms.afteredit');
});

Route::get('/cpanel/create/{user_id}','CpanelController@create');

Route::get('/delsearch/{user_id}','CpanelController@deleteesearch');
Route::get('/delafter_search/{user_id}','CpanelController@delsearch');
Route::get('/del2/{PurchaseOrderNo}/{user_id}','CpanelController@destroy2');
Route::get('/del3/{id}/{PurchaseOrderNo}/{user_id}','CpanelController@destroy1');

Route::get('/delete_user/{user_id}','CpanelController@delete_user');
Route::get('/destroy_user/{id}/{user_id}','CpanelController@destroy_user');

Route::post('/update_avatar/{user_id}','CpanelController@update_avatar');
Route::post('/update_avatar2/{user_id}','CpanelController@update_avatar2');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
