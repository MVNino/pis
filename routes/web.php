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

# Website
Route::get('/', 'GuestController@viewIndex');
Route::get('/about', 'GuestController@viewAbout');
Route::get('/services','GuestController@viewServices');
Route::get('/news','GuestController@viewNews');
Route::get('/contact','GuestController@viewContact');
Route::get('faqs','GuestController@viewFaqs');

# Admin
Route::group(
	[
		'prefix' => 'admin'
	], 
	function() {
		Route::get('dashboard', function(){
			return view('admin.dashboard');
		})->name('admin.dashboard');
		Route::group([
			'prefix' => 'maintenance'
		], function(){
			# MAINTENANCE
			Route::namespace('Maintenance')->group(function () {
				// About 
				Route::get('about', 'AboutController@viewAbout')->name('maintenance.about');
				Route::post('about', 'AboutController@addAbout');
				// Banner 
				Route::get('banner', 'BannerController@viewBanner')->name('maintenance.banner');
				Route::post('banner', 'BannerController@addBanner');
				Route::put('banner/{id}', 'BannerController@updateBanner');
				Route::delete('banner/{id}', 'BannerController@deleteBanner');
				// Clinic 
				Route::get('clinic', 'ClinicController@viewClinic')->name('maintenance.clinic');
				Route::post('clinic', 'ClinicController@addClinic');
				// Company
				Route::get('company', 'CompanyController@viewCompany')->name('maintenance.company');
				Route::post('company', 'CompanyController@addCompany');
				// Contact
				Route::get('contact', 'ContactController@viewContact')->name('maintenance.contact');
				Route::post('contact', 'ContactController@addContact');
				// Features
				Route::get('features', 'FeatureController@viewFeatures')->name('maintenance.features');
				Route::post('features', 'FeatureController@storeFeature');	
				// FAQ's
				Route::get('faqs', 'FAQController@viewFAQs')->name('maintenance.faqs');
				Route::post('faqs', 'FAQController@addFAQs');
				// News
				Route::get('news', 'NewsController@listNews')
					->name('maintenance.news');
				Route::post('news', 'NewsController@addNews');
				Route::get('news/{id}', 'NewsController@viewNews');
				Route::put('news/{id}', 'NewsController@updateNews');
				// Services
				Route::get('services', 'ServiceController@viewServices')
					->name('maintenance.services');
			});
		});
});