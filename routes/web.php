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
// Landing page(banners, request appointment, service, news & events)
Route::get('/', 'GuestController@viewIndex');
Route::post('/', 'GuestController@createAppointment');
Route::post('/fetch', 'GuestController@fetch')
		->name('guestcontroller.fetch');
Route::post('schedule-appointment', 
	'Transaction\AppointmentController@scheduleAppointment');


// About page
Route::get('/about','GuestController@viewAbout');
Route::get('services','GuestController@viewServices')->name('services');
Route::get('service/{id}', 'GuestController@showService');
Route::get('other-service/{id}', 'GuestController@showOtherService');
Route::get('news','GuestController@viewNews')->name('news');
Route::get('contact','GuestController@viewContact');
Route::post('contact', 'GuestController@storeContact');
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
				//Profile
				Route::get('profile', 'ProfileController@viewProfile')->name('maintenance.profile');
				Route::post('profile', 'ProfileController@updateProfile');
				//Account
				Route::get('account', 'AccountController@editAccount')->name('maintenance.account');
				Route::put('update-profile/{id}', 'AccountController@updateProfile');
				Route::put('change-password/{id}', 'AccountController@changePassword');
				// Banner 
				Route::get('banner', 'BannerController@viewBanner')->name('maintenance.banner');
				Route::post('banner', 'BannerController@addBanner');
				Route::put('banner/{id}', 'BannerController@updateBanner');
				Route::delete('banner/{id}', 'BannerController@deleteBanner');
				Route::get('bannerEdit/{id}', 'BannerController@editBanner');
				Route::put('bannerModify/{id}', 'BannerController@modifyBanner');
				// Clinic 
				Route::get('clinic', 'ClinicController@viewClinic')->name('maintenance.clinic');
				Route::post('clinic', 'ClinicController@addClinic');
				Route::get('clinic/{id}', 'ClinicController@edit');
				Route::put('clinic/{id}', 'ClinicController@updateClinic');
				Route::delete('clinic/{id}', 'ClinicController@deleteClinic');
				// Company
				Route::get('company', 'CompanyController@viewCompany')->name('maintenance.company');
				Route::put('company/{id}', 'CompanyController@updateCompany');
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
				// FAQs
				Route::get('faqs', 'FAQController@viewFAQs')
					->name('maintenance.faqs');
				Route::post('faqs', 'FAQController@addFAQs');
				Route::get('faqs/{id}', 'FAQController@editFAQs');
				Route::put('faqs/{id}', 'FAQController@updateFAQs');
				// FAQs - Soft Delete
				Route::put('faqs/{id}/soft-delete', 'FAQController@softDelete');
				// News
				Route::get('news', 'NewsController@listNews')
					->name('maintenance.news');
				Route::post('news', 'NewsController@addNews');
				Route::get('news/{id}', 'NewsController@viewNews');
				Route::put('news/{id}', 'NewsController@updateNews');
				// News - Activate | Deactivate | Soft Delete
				Route::get('news/{id}/activate', 'NewsController@activate');
				Route::get('news/{id}/deactivate', 'NewsController@deactivate');
				Route::get('news/{id}/soft-delete', 'NewsController@softDelete');
				// Services
				Route::get('services', 'ServiceController@viewServices')
					->name('maintenance.services');
				Route::post('services/specialty', 
							'ServiceController@addSpecialty');
				Route::post('services/other', 
							'ServiceController@addOtherService');
				Route::get('specialty-service/{id}/edit', 
							'ServiceController@editSpecialty');
				Route::put('specialty-service/{id}/edit', 
							'ServiceController@updateSpecialty');
				Route::delete('specialty-service/{id}/delete', 
							'ServiceController@deleteSpecialty');
				Route::get('main-service/{id}/edit', 
							'ServiceController@editMainService');
				Route::put('main-service/{id}/edit', 
							'ServiceController@updateMainService');
				Route::delete('main-service/{id}/delete', 
							'ServiceController@deleteMainService');
				// Show & update video link
				Route::get('main-service/{id}/edit-video', 
					'ServiceController@editSpecialtyServiceVid');
				Route::put('main-service/{id}/edit-video', 
					'ServiceController@updateSpecialtyServiceVid');
				Route::get('other-service/{id}/edit-video', 
					'ServiceController@editOtherServiceVid');
				Route::put('other-service/{id}/edit-video', 
					'ServiceController@updateOtherServiceVid');
				// Add video link
				Route::post('main-service/add-video/{id}', 
					'ServiceController@addSpecialtyServiceVideo');
				Route::post('other-service/add-video/{id}', 
					'ServiceController@addOtherServiceVideo');
				// Remove service video
				Route::get('main-service/{id}/delete', 
					'ServiceController@deleteSpecialtyServiceVid');
				Route::get('other-service/{id}/delete', 
					'ServiceController@deleteOtherServiceVid');
			});
		});

		# TRANSACTION
		Route::group([
			'prefix' => 'transaction'
		], function() {
			Route::namespace('Transaction')->group(function () {
				// Schedule
				Route::get('appointment','AppointmentController@listAppointments') 
					->name('transaction.appointments');
				Route::get('approved-appointment','AppointmentController@listApprovedAppointments') 
					->name('transaction.approvedAppointments');
				Route::put('appointment-reschedule/{id}', 'AppointmentController@rescheduleAppointment');
				Route::put('appointment/{id}', 'AppointmentController@approveAppointment');
				Route::post('another-appointment', 'AppointmentController@addAnotherAppointment');
				// Patients
				Route::get('patients', 'PatientController@listPatients')
					->name('transaction.patients');
				Route::put('patients/{id}', 'PatientController@updatePatient');
				Route::put('updateRecord/{id}', 'PatientController@updateMedical');
				Route::post('addMedicalRecord', 'PatientController@addMedical');
				Route::post('addfile', 'PatientController@addMedicalFileRecord');
				Route::get('editRecord', 'PatientController@editRecord');
				Route::get('billing','PaymentController@billing')
					->name('transaction.billing');
				Route::get('billing/{id}', 'PaymentController@billing');
				Route::get('specialty-service-price', 
					'PaymentController@getSpecialtyServicePrice');
				Route::post('avail-service', 
					'PaymentController@availService');
				Route::post('proceed-to-payment', 
					'PaymentController@proceedToPayment');
				Route::get('{id}/show-initial-amount', 
					'PaymentController@showInitialAmount');

				Route::get('receipt/{id}','PaymentController@receipt')
					->name('transaction.receipt');
				Route::post('receipt/process-payment', 'PaymentController@processPayment');
				Route::get('balance','PaymentController@balance')
					->name('transaction.balance');
				// Clinical Expenses
				Route::get('expenses','ReportController@expenses')
					->name('transaction.expenses');
				Route::get('editExpenses/{id}','ReportController@editExpenses'); //change it
				Route::post('addExpense', 'ReportController@addExpense');
				Route::delete('expense/{id}', 'ReportController@deleteExpense');
				Route::put('updateExpense/{id}', 'ReportController@updateExpense');
				// Reports
				Route::get('report','ReportController@report')
					->name('transaction.report');
				Route::get('generatePDF','ReportController@generatePDF')
					->name('transaction.generatedReport');
				Route::post('generateDailyReport', 'ReportController@listDailyReport');
				Route::post('generateMonthlyReport', 'ReportController@listMonthlyReport');
				

				//Inbox
				Route::get('inbox','InboxController@viewInbox')
					->name('transaction.inbox');
				Route::get('inbox/{id}','InboxController@viewDetail')
					->name('transaction.inbox-detail');
				Route::get('trash','InboxController@viewTrash')
					->name('transaction.trash');
				Route::delete('trash/{id}', 'InboxController@deleteMessage');
			});
		});
});
Auth::routes();