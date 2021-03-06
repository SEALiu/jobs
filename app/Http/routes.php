<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('index', function () {
    return view('index');
});

Route::get('account/register', function () {
    return view('account.register');
});

Route::get('account/login', function () {
    return view('account.login');
});

Route::get('account/edit', function () {
    return view('account.edit');
});

Route::get('account/findPassword', function () {
    return view('account.findPassword');
});

Route::get('account/', function () {
    return view('account.index');
});

Route::get('account/index', function () {
    return view('account.index');
});

Route::get('account/enterpriseVerify', function () {
    return view('account.enterpriseVerify');
});

Route::get('position/applyList', function () {
    return view('position.applyList');
});

Route::get('position/publish', function () {
    return view('position.publish');
});

Route::get('position/publishList', function () {
    return view('position.publishList');
});

Route::get('position/detail', function () {
    return view('position.detail');
});

Route::get('position/advanceSearch', function () {
    return view('position.advanceSearch');
});

Route::get('resume/add', function () {
    return view('resume.add');
});

Route::get('resume/preview', function () {
    return view('resume.preview');
});

Route::get('news/', function () {
    return view('news.index');
});

Route::get('news/index', function () {
    return view('news.index');
});

Route::get('news/detail', function () {
    return view('news.detail');
});


Route::get('about/', function () {
    return view('about.index');
});

Route::get('about/index', function () {
    return view('about.index');
});

Route::get('message/', function () {
    return view('message.index');
});

Route::get('message/index', function () {
    return view('message.index');
});

Route::get('message/detail', function () {
    return view('message.detail');
});
