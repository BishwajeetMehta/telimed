<?php
use App\systemsettings;
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

    $data['system'] = systemsettings::find(1);
    $_SESSION['setting'] = $data['system'];
    return view('frontend.index');
});


Route::post('/login','LoginController@login')->name('admin.login.submit');

Route::group(['prefix'=>'admin'], function () {
    Route::view('dashboard','backend.dashboard.index')->name('dashboard');

    Route::view('login','backend.dashboard.login')->name('admin.login.submitform');
    Route::get('logout','logincontroller@logout')->name('admin.login.logout');
    Route::view('setting','backend.dashboard.layouts.system_setting')->name('system-setting.form');
    Route::resource('system-setting','SystemController');

});




