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



Route::get('/', 'FrontendController@index');


Route::get('home', 'HomeController@index')->middleware('auth')->name('home');

Auth::routes();

Route::get('admin', 'HomeController@index')->middleware('auth')->name('home');

Route::get('contact-us','ContactController@frontUser');

Route::post('post-contact','ContactController@postFront');

Route::get('send-email','ContactController@sendEmail');

/*quote*/

Route::get('quote-request','QuoteController@form');


Route::post('post-quote-request','QuoteController@postForm');

/*	payment options */

Route::get('pay-bank-customer','PaymentController@paymentBankCustomer');

Route::get('pay-cash-customer','PaymentController@paymentCashCustomer');

Route::post('post-pay-bank-customer','PaymentController@postBank');

Route::post('post-pay-cash-customer','PaymentController@postCash');

/*for pdf export*/

Route::get('export-to-cash-pdf/{id}','PdfController@index');

Route::get('exported-to-bank-pdf/{id}','PdfController@exportBankPdf');

Route::get('exported-to-cash-pdf/{id}','PdfController@exportCashPdf');


/*admin part*/

Route::get('admin/general-questions','ContactController@generalQuestionList')->middleware('auth');

Route::get('admin/quote-request','ContactController@quoteRequestList')->middleware('auth');

Route::get('admin/refer-contact','ContactController@referenceList')->middleware('auth');

Route::post('admin/delete-contact', 'ContactController@deleteContact')->middleware('auth');

Route::get('admin/change-password', 'UserController@changePassword')->middleware('auth');

Route::post('admin/post-change-password', 'UserController@postChangePassword')->middleware('auth');


//quote request
Route::get('admin/home-quote', 'QuoteController@homeQuote')->middleware('auth');
Route::get('admin/auto-quote', 'QuoteController@autoQuote')->middleware('auth');
Route::get('admin/business-quote', 'QuoteController@businessQuote')->middleware('auth');


//delete quote
Route::post('admin/delete-quote', 'QuoteController@deleteQuote')->middleware('auth');


//payment options
Route::get('admin/payment-bank', 'PaymentController@paymentBank')->middleware('auth');
Route::get('admin/payment-cash', 'PaymentController@paymentCash')->middleware('auth');

Route::post('admin/delete-payment-cash', 'PaymentController@deletePayCash')->middleware('auth');

Route::post('admin/delete-payment-bank', 'PaymentController@deletePayBank')->middleware('auth');

//our services
Route::get('admin/our-service','OurServiceController@index')->middleware('auth');

Route::get('admin/edit-our-services','OurServiceController@edit')->middleware('auth');

Route::post('admin/update-our-services','OurServiceController@update')->middleware('auth');


// article listing

Route::get('admin/article-listing','ArticleController@index')->middleware('auth');
Route::get('admin/create-article','ArticleController@create')->middleware('auth');

Route::post('admin/store-article','ArticleController@store')->middleware('auth');


Route::get('admin/edit-article/{id}','ArticleController@edit')->middleware('auth');
Route::post('admin/update-article','ArticleController@update')->middleware('auth');


//delete article


Route::post('admin/delete-article','ArticleController@deleteArticle')->middleware('auth');



// subscriber 

Route::get('admin/subscriber-list','SubscriberController@index')->middleware('auth');

Route::post('subscribe','SubscriberController@store');



Route::post('admin/option-subscriber','SubscriberController@optionSubscriber')->middleware('auth');


//send email to subscriber


Route::post('admin/post-email','SubscriberController@sendEmailSubscriber')->middleware('auth');


/* for our team pending*/


Route::get('admin/our-team','OurTeamController@view')->middleware('auth');

Route::get('admin/create-our-team','OurTeamController@create')->middleware('auth');

Route::post('admin/store-our-team','OurTeamController@store')->middleware('auth');

Route::get('admin/edit-our-team/{$id}','OurTeamController@edit')->middleware('auth');

/* end our team pending*/