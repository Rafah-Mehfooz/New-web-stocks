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

//Authentication routes
Route::get('auth/login','Auth\LoginController@showLoginForm');
Route::post('auth/login','Auth\LoginController@login');
Route::get('auth/logout','Auth\LoginController@logout');
Route::get('auth/register','Auth\RegisterController@showRegistrationForm');
Route::post('auth/register','Auth\RegisterController@register');
//password reset routes
/*Route::get('password/reset/{token?}','Auth\ResetPasswordController@showResetForm');
Route::post('password/reset','Auth\ResetPasswordController@reset');
Route::get('password/email','Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email','Auth\ResetPasswordController@sendResetLinkEmail');*/





Route::get('/createAccount', function () {
    return view('createAccount');
});
Route::get('/forgotPasword', function () {
    return view('forgotPasword');
});
Route::get('/', function () {
    return view('landing');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/forgotPassword',function(){
	return view('forgotPassword');
});
//share related routes
Route::get('/dashboard','ShareController@getDashboard');
Route::get('/portfolio', 'PortfolioController@getPortfolioView')->name('portfolio');
Route::get('/getPortfolio', 'PortfolioController@getPortfolio')->name('getPortfolio');
Route::post('/addPortfolio', 'PortfolioController@addPortfolio')->name('addPortfolio');
Route::get('/faq', 'ShareController@getFaq');



//market summary cement
Route::get('/cementView','CementSharesController@getcementView');
Route::get('/cement','CementSharesController@getcementShares')->name('cement');
//cement shares
Route::get('/AC','CementSharesController@getAttockcementView');
Route::get('/BWC','CementSharesController@getBestwaycementView');
//market summary chemical
Route::get('/chemicalView','ChemicalSharesController@getchemicalView');
Route::get('/chemical','ChemicalSharesController@getchemicalShares')->name('chemical');
//chemical shares
Route::get('/BP','ChemicalSharesController@getBergerPaintView');
Route::get('/DC','ChemicalSharesController@getDataArgoView');

//profile
Route::get('/profileView','ProfileController@getProfileView');
Route::post('/profileSettings','ProfileController@updateProfile')->name('profileSettings');

