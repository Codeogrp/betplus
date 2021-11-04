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

Route::get('/', function () {
    return view('index');
});

Route::get('about', function () {
    return view('about');
});

Route::get('apply-job', function () {
    return view('apply-job');
});

Route::get('chanel', function () {
    return view('chanel');
});

Route::get('company-profile', function () {
    return view('company-profile');
});

Route::get('events', function () {
    return view('events');
});

Route::get('forum-post-view', function () {
    return view('forum-post-view');
});

Route::get('groupes', function () {
    return view('groupes');
});

Route::get('help-center', function () {
    return view('help-center');
});

Route::get('jobs', function () {
    return view('jobs');
});

Route::get('messages', function () {
    return view('messages');
});
Route::get('parieur', function () {
    return view('parieur');
});

Route::get('project-view', function () {
    return view('project-view');
});

Route::get('profiles', function () {
    return view('profiles');
});

Route::get('my-profile', function () {
    return view('my-profile');
});

Route::get('profile-account-setting', function () {
    return view('profile-account-setting');
});

Route::get('user-profile', function () {
    return view('user-profile');
});

Route::get('sign-in', function () {
    return view('sign-in');
});

