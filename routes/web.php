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
*/

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/','HomeController@index')->name('home');
Route::get('about','HomeController@about')->name('about');
Route::get('find','HomeController@find')->name('find');
Route::get('campaign','HomeController@campaign')->name('campaign');
Route::get('campaign-details/{id}','HomeController@campaign_details')->name('campaign.details');




/*{{ str_limit($post->details,100) }}
<a href="{{ route('blog.details',$post->id) }}" class="btn btn-primary">View More</a>*/


Route::middleware('auth')->prefix('admin')->group(function (){

Route::get('dashboard','DashboardController@index')->name('admin.dashboard');
Route::resource('campaign','CampaignController');
Route::post('campaign/{id}/restore','CampaignController@restore')->name('campaign.restore');
Route::delete('campaign/{id}/permanent_delete','CampaignController@permanent_delete')->name('campaign.permanent_delete');

Route::resource('volunteer','VolunteerController');
Route::post('volunteer/{id}/restore','VolunteerController@restore')->name('volunteer.restore');
Route::delete('volunteer/{id}/permanent_delete','VolunteerController@permanent_delete')->name('volunteer.permanent_delete');

Route::resource('donor','DonorController');

});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
