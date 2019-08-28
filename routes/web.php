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

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard','DashboardController@index')->name('admin.dashboard');

Route::resource('campaign','CampaignController');
Route::post('campaign/{id}/restore','CampaignController@restore')->name('campaign.restore');
Route::delete('campaign/{id}/permanent_delete','CampaignController@permanent_delete')->name('campaign.permanent_delete');

Route::resource('volunteer','VolunteerController');
Route::post('volunteer/{id}/restore','VolunteerController@restore')->name('volunteer.restore');
Route::delete('volunteer/{id}/permanent_delete','VolunteerController@permanent_delete')->name('volunteer.permanent_delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
