<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/',"PublicController@index");
Route::get('/devisGratuit',"PublicController@devisGratuit")->name('devisGratuit');
Route::post('/getColoris',"PublicController@getColoris")->name('getColoris');
Route::post('/get-finishing',"PublicController@getFinishing")->name('get-finishing');
Route::get('/get-price', 'PublicController@getPrice')->name('get-price');
Route::get('/get-calculated-price', 'PublicController@getCalculatedPrice')->name('get-calculated-price');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function(){

		Route::get('/dashboard','AdminController@index')->name('adminDashboard');
		Route::get('/matériau','AdminController@Matériau')->name('adminMatériau');
		Route::get('/add/items','AdminController@addItems')->name('adminAddItems');
		Route::post('/add/items','AdminController@addMatériau')->name('addMatériau');
		Route::get('/edit/matériau/{id}','AdminController@editMatériau')->name('adminEditMatériau');
		Route::post('/edit/matériau/{id}','AdminController@updateMatériau')->name('adminUpdateMatériau');
	Route::post('/delete/matériau/{id}','AdminController@deleteMatériau')->name('adminDeleteMatériau');

		Route::get('/coloris','AdminController@showColoris')->name('adminShowColoris');
		Route::get('/add/coloris','AdminController@addColoris')->name('adminAddColoris');
		Route::post('/add/coloris','AdminController@createdColoris')->name('adminColoris');
		Route::get('/edit/coloris/{id}','AdminController@editColoris')->name('adminEditColoris');
		Route::post('/edit/coloris/{id}','AdminController@postEditColoris')->name('adminPostEditColoris');
		Route::post('/delete/coloris/{id}','AdminController@deleteColoris')->name('adminDeleteColoris');

				Route::get('/finition','AdminController@showFinition')->name('adminShowFinition');
		Route::get('/add/Finition','AdminController@addFinition')->name('adminAddFinition');
		Route::post('/add/Finition','AdminController@createdFinition')->name('adminFinition');
		Route::get('/edit/Finition/{id}','AdminController@editFinition')->name('adminEditFinition');
		Route::post('/edit/Finition/{id}','AdminController@postEditFinition')->name('adminPostEditColoris');
		Route::post('/delete/Finition/{id}','AdminController@deleteFinition')->name('adminDeleteFinition');


		Route::get('/services','AdminController@showServices')->name('adminShowServices');
		Route::get('/add/service','AdminController@addService')->name('adminAddService');
		Route::post('/add/service','AdminController@createdService')->name('adminService');
		Route::get('/edit/service/{id}','AdminController@editService')->name('adminEditService');
		Route::post('/edit/service/{id}','AdminController@postEditService')->name('adminPostEditService');
		Route::post('/delete/Service/{id}','AdminController@deleteService')->name('adminDeleteService');

		Route::get('/options/cuts','AdminController@optionsCuts')->name('adminOptions&Cuts');
		Route::get('/add/options/cuts','AdminController@addOptionsCuts')->name('adminAddOptions&Cuts');
		Route::post('/add/options/cuts','AdminController@PostAddOptionsCuts')->name('adminPostAddOptions&Cuts');
		Route::get('/edit/options/cuts/{id}','AdminController@EditAddOptionsCuts')->name('adminEditAddOptions&Cuts');
		Route::post('/edit/options/cuts/{id}','AdminController@postEditAddOptionsCuts')->name('adminPostEditAddOptions&Cuts');


		Route::get('/show/rates','AdminController@showRates')->name('show-rates');
		Route::get('/rates','AdminController@rates')->name('rates');
		Route::post('/rates','AdminController@postRates')->name('post-rates');
		Route::get('/edit/rates/{id}','AdminController@editRates')->name('edit-rates');
		Route::post('/edit/rates/{id}','AdminController@postEditRates')->name('post-edit-rates');
		Route::post('/delete/rates/{id}','AdminController@deteleRates')->name('delete-rates');

	
		Route::get('/show-sinks','AdminController@adminShowSinks')->name('admin-show-sinks');
		Route::get('/add-sink','AdminController@addSink')->name('add-sink');
		Route::post('/add-sink','AdminController@addSinkPost')->name('add-sink-post');
		Route::get('/edit-sink/{id}','AdminController@editSink')->name('edit-sink');
		Route::post('/edit-sink/{id}','AdminController@editSinkPost')->name('edit-sink-post');
		Route::post('/delete-sink/{id}','AdminController@deleteSink')->name('delete-sink');

		Route::get('/show-mixer','AdminController@adminShowMixer')->name('admin-show-mixer');
		Route::get('/add-mixer','AdminController@addMixer')->name('add-mixer');
		Route::post('/add-mixer','AdminController@addMixerPost')->name('add-mixer-post');
		Route::get('/edit-mixer/{id}','AdminController@editMixer')->name('edit-mixer');
		Route::post('/edit-mixer/{id}','AdminController@editMixerPost')->name('edit-mixer-post');
		Route::post('/delete-mixer/{id}','AdminController@deleteMixer')->name('delete-mixer');

		
		Route::get('/show-soap','AdminController@adminShowSoap')->name('admin-show-soap');
		Route::get('/add-soap','AdminController@addSoap')->name('add-soap');
		Route::post('/add-soap','AdminController@addSoapPost')->name('add-soap-post');
		Route::get('/edit-soap/{id}','AdminController@editSoap')->name('edit-soap');
		Route::post('/edit-soap/{id}','AdminController@editSoapPost')->name('edit-soap-post');
		Route::post('/delete-soap/{id}','AdminController@deleteSoap')->name('delete-soap');
			

		Route::get('/show-drainer','AdminController@adminShowDrainer')->name('admin-show-drainer');
		Route::get('/add-drainer','AdminController@addDrainer')->name('add-drainer');
		Route::post('/add-drainer','AdminController@addDrainerPost')->name('add-drainer-post');
		Route::get('/edit-drainer/{id}','AdminController@editDrainer')->name('edit-drainer');
		Route::post('/edit-drainer/{id}','AdminController@editDrainerPost')->name('edit-drainer-post');
		Route::post('/delete-drainer/{id}','AdminController@deleteDrainer')->name('delete-drainer');

});

