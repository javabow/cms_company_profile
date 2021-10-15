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

// Route::get('/', 'BlogController@index')->name('blog_home');

//auth
//Auth::routes();
Auth::routes([
    // 'register' => false, // Registration Routes...
    // 'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

//Clear Cache facade value:
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>cache cleared</h1>';
});

//Clear config facade value:
Route::get('/clear-config', function() {
    $exitCode = Artisan::call('config:clear');
    return '<h1>config cleared</h1>';
});

//Clear config facade value:
Route::get('/clear-config-2', function() {
    $exitCode = Artisan::call('config:cache');
    return '<h1>config cached</h1>';
});

//route cache facade value:
Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:clear');
    return '<h1>config cached</h1>';
});

Route::get('/home', 'HomeController@index')->name('home');

//toram
Route::get('/dashboard', 'ToramController@index')->name('dashboard_index');
//toram add article
Route::get('/dashboard/add', 'ToramController@add')->name('add_article');
Route::post('/dashboard/store', 'ToramController@store')->name('store_article');
//preview article
Route::get('/dashboard/preview/{id}', 'ToramController@preview')->name('preview_article');
//toram edit article
Route::get('/dashboard/edit/{id}', 'ToramController@edit')->name('edit_article');
Route::post('/dashboard/update/{id}', 'ToramController@update')->name('update_article');
Route::delete('/dashboard/delete/{id}', 'ToramController@delete_artikel')->name('delete_artikel');

// label
Route::get('/dashboard/label', 'ToramController@label')->name('label_index');
Route::post('/dashboard/label/store', 'ToramController@add_label')->name('store_label');
Route::post('/dashboard/label/update/{id}', 'ToramController@update_label')->name('update_label');
Route::delete('/dashboard/label/update/{id_label}', 'ToramController@delete_label')->name('delete_label');

//saran
// Route::post('/saran/store', 'ToramController@add_saran')->name('store_saran');
// Route::get('/saran/result', 'BlogController@saran_result_view')->name('blog_saran_result');

// faq
Route::get('/dashboard/faq', 'ToramController@faq')->name('faq_index');
Route::post('/dashboard/faq/store', 'ToramController@add_faq')->name('store_faq');
Route::post('/dashboard/faq/update/{id}', 'ToramController@update_faq')->name('update_faq');
Route::delete('/dashboard/faq/update/{id_faq}', 'ToramController@delete_faq')->name('delete_faq');

//admin create user
Route::get('/dashboard/add/user', 'ToramController@user_add_index')->name('admin_user_index')->middleware('admin');;

//file manager
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    '\vendor\uniSharp\LaravelFilemanager\Lfm::routes()';
});

//blog routes
Route::get('/', 'BlogController@all_artikel_view')->name('artikel_home');

Route::get('/service', 'BlogController@all_service')->name('blog_service');
Route::get('/service/{url}', 'BlogController@detail_service')->name('blog_service_detail');
Route::get('/service/label/{label_url}', 'BlogController@service_label_view')->name('blog_service_label');

Route::get('/artikel', 'BlogController@all_artikel')->name('blog_artikel');
Route::get('/artikel/{url}', 'BlogController@detail_artikel')->name('blog_artikel_detail');
Route::get('/artikel/label/{label_url}', 'BlogController@artikel_label_view')->name('blog_artikel_label');

// Route::get('/search', 'BlogController@search')->name('toram_search');

// Route::get('/akreditasi', 'BlogController@akreditasi_view')->name('blog_akreditasi');

Route::get('/contact', 'BlogController@contact_view')->name('blog_contact');

// Route::get('/faq', 'BlogController@faq_view')->name('blog_faq');

Route::get('/about-company', 'BlogController@about_view')->name('blog_about');


//komentar routes
// Route::get('/dashboard/komentar', 'KomentarController@index')->name('komentar_home');
// Route::get('/dashboard/komentar/approve/{id}', 'KomentarController@approve')->name('komentar_approve');
// Route::get('/dashboard/komentar/delete/{id}', 'KomentarController@delete')->name('komentar_delete');
// Route::post('/komentar/post', 'KomentarController@comment_post')->name('komentar_post');

URL::forceScheme('https');


