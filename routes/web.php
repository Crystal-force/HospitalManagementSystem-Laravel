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

Route::get('/', 'FirstController@signin')->name('signin');

Route::any('/p-check', 'FirstController@pCheck');

Route::get('/firstpage', 'FirstController@index')->name('first-page');




Route::post('post-document', 'FirstController@postDocument')->name('post-document');



Auth::routes();

// Route::group(['middleware' => 'Authenticate'], function () {

  Route::get('/home/{id?}', 'HomeController@index')->name('home');

  Route::any('/submit', 'DataRegisterController@datasave')->name('submit');

  Route::post('/remove', 'RemoveController@remove')->name('remove');

  Route::get('/infomationshow/{id?}', 'ShowController@infomationshow')->name('infomationshow');  

  Route::get('/patientinfo/{id?}', 'ShowController@patientinfo')->name('patientinfo');

  Route::get('/downloadPDF/{id}','PdfDownloadController@downloadPDF');

  Route::get('/send-email-pdf/{id?}','PdfDownloadController@sendpdfemail');

  Route::any('/updatestate', 'ShowController@updatestate')->name('updatestate'); 

  Route::post('/submitmail', 'ContactMessageController@contact')->name('contact'); 

  Route::post('/savesecondstate', 'ShowController@savesecondstate')->name('savesecondstate');



  Route::get('/admin-category', 'CategoryController@index')->name('category');

  Route::post('/addcategory', 'CategoryController@addcategory')->name('addcategory');

  Route::post('/edit-category', 'CategoryController@editcategory')->name('editcategory');

  Route::post('/remove-category', 'CategoryController@removecategory')->name('removecategory');

  Route::get('/usermanagement', 'UserController@index')->name('userlist');

  Route::get('/today-information', 'HomeController@todayinfo')->name('todayinfo');

  Route::get('/today-user', 'UserController@todayuser')->name('todayuser');

  

  Route::any('/daily-report', 'DailyController@dailyExcel')->name('dailyreport');

  

// });



/*Billing Route*/

Route::group(['prefix'=>'billing-admin','as'=>'billing-admin.'], function(){
    Route::get('login', 'BillingAdminController@login')->name('login');
    Route::post('login', 'BillingAdminController@loginPost')->name('login-post');
    Route::post('make-billed', 'BillingAdminController@makeBilled')->name('make-billed');
    Route::get('list', 'BillingAdminController@list')->name('list');
    Route::get('logout', 'BillingAdminController@logout')->name('logout');
});