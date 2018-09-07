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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'GuestController@viewIndex');
Route::get('/about', 'GuestController@viewAbout');

Route::group(
	[
		'prefix' => 'admin'
	], 
	function() {
		Route::get('dashboard', function(){
			return view('admin.dashboard');
		});
		Route::group([
			'prefix' => 'maintenance'
		], function(){
			# MAINTENANCE
			Route::namespace('Maintenance')->group(function () {
				// About 
				Route::get('about', 'AboutController@viewAbout')->name('maintenance.about');
				// Banner 
				Route::get('banner', 'BannerController@viewBanner')->name('maintenance.banner');
				// Clinic 
				Route::get('clinic', 'ClinicController@viewClinic')->name('maintenance.clinic');
				// Company
				Route::get('company', 'CompanyController@viewCompany')->name('maintenance.company');
				// Contact
				Route::get('contact', 'ContactController@viewContact')->name('maintenance.contact');
				Route::post('contact', 'ContactController@addContact');
				// Features
				Route::get('features', 'FeatureController@viewFeatures')->name('maintenance.features');
				// Feedback
				Route::get('feedback', 'FeedbackController@viewFeedback')->name('maintenance.feedback');	
				// FAQ's
				Route::get('faqs', 'FAQController@viewFAQs')->name('maintenance.faqs');
				Route::post('faqs', 'FAQController@addFAQs');
				// News
				Route::get('news', 'NewsController@viewNews')->name('maintenance.news');
				// Services
				Route::get('services', 'ServiceController@viewServices')->name('maintenance.services');
			});
		});
});