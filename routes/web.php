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

Auth::routes();

Route::get('/forum', 'HomeController@index')->name('forum');


/*Protecting the Channels Controller by Auth Middleware*/

Route::group(['middleware' => 'auth'], function () {
    Route::resource('channels', 'ChannelsController');
});

/*Create Discussion*/


Route::group(['middleware' => 'auth'], function () {
    Route::get('discussion/create', [
        'uses' => 'DiscussionController@create',
        'as' => 'discussion.create'
    ]);
});

/*Store a Discussion*/

Route::post('discussion/store', [
    'uses' => 'DiscussionController@store',
    'as' => 'discussion.store'
]);

/*Show a Discussion*/

Route::get('discussion/{slug}', [
    'uses' => 'DiscussionController@show',
    'as' => 'discussion'
]);

/*Leave a reply*/

Route::post('discussion/reply/{id}', [
    'uses' => 'DiscussionController@reply',
    'as' => 'discussion.reply'
]);

/*Like a Reply*/

Route::get('reply/like/{id}', [
    'uses' => 'RepliesController@like',
    'as' => 'reply.like'
]);


/*Unlike a Reply*/

Route::get('unreply/like/{id}', [
    'uses' => 'RepliesController@unlike',
    'as' => 'reply.unlike'
]);

/*Disucssion for a particular channel*/

Route::get('channel/{slug}', [
    'uses' => 'HomeController@channel',
    'as' => 'channel'
]);

/*Watch a Discussion*/

Route::get('discussion/watch/{id}',[
    'uses' => 'WatchersController@watch',
    'as' => 'discussion.watch'
]);

/*unwatch a Discussion*/

Route::get('discussion/unwatch/{id}',[
    'uses' => 'WatchersController@unwatch',
    'as' => 'discussion.unwatch'
]);


Route::get('discussion/best/reply/{id}',[
    'uses' => 'RepliesController@best_answer',
    'as' => 'discussion.best.answer'
]);