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
Route::get('about', 'GuestController@viewAbout');
Route::get('services','GuestController@viewServices')->name('services');
Route::get('service/{id}', 'GuestController@showService');
Route::get('other-service/{id}', 'GuestController@showOtherService');
Route::get('news','GuestController@viewNews')->name('news');
Route::get('contact','GuestController@viewContact');
Route::get('faqs','GuestController@viewFaqs');


# Admin
Route::group(
	[
		'prefix' => 'admin'
	], 
	function() {
		Route::get('dashboard', 'DashboardController@viewDashboard')->name('admin.dashboard');
		# MAINTENANCE
		Route::group([
			'prefix' => 'maintenance'
		], function(){
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
				Route::get('clinic/{id}', 'ClinicController@edit');
				Route::put('clinic/{id}', 'ClinicController@editClinic');
				Route::delete('clinic/{id}', 'ClinicController@deleteClinic');
				// Company
				Route::get('company', 'CompanyController@viewCompany')->name('maintenance.company');
				Route::post('company', 'CompanyController@addCompany');
				// Contact
				Route::get('contact', 'ContactController@viewContact')->name('maintenance.contact');
				Route::post('contact', 'ContactController@addContact');
				Route::get('contact/{id}', 'ContactController@edit');
				Route::put('contact/{id}', 'ContactController@editContact');
				Route::delete('contact/{id}', 'ContactController@deleteContact');
				// Features
				Route::get('features', 'FeatureController@viewFeatures')->name('maintenance.features');
				Route::post('features', 'FeatureController@storeFeature');
				Route::get('features/{id}', 'FeatureController@edit');
				Route::put('features/{id}', 'FeatureController@editFeature');
				Route::delete('features/{id}', 'FeatureController@deleteFeature');
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
				Route::post('services/specialty', 'ServiceController@addSpecialty');
				Route::post('services/other', 'ServiceController@addOtherService');
				Route::get('specialty-service/{id}/edit', 'ServiceController@editSpecialty');
				Route::get('main-service/{id}/edit', 'ServiceController@editMainService');
			});

		});

		# TRANSACTION
		Route::group([
			'prefix' => 'transaction'
		], function() {
			Route::namespace('Transaction')->group(function () {
				Route::get('patients', 'PatientController@listPatients')
					->name('transaction.patients');
				Route::get('editPatients', 'PatientController@editPatients'); //change it
			});
		});
});
Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
