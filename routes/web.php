<?php

Route::view('/', "home.welcome")->name('/');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('courses')->name('courses.')->group(function () {
    Route::get('/', 'CourseController@index')->name('index');
    Route::get('/{category}/u/0', 'CourseController@categorize')->name('categorize');
    Route::redirect('/{category}', '/courses/{category}/u/0'); // Redirect to "categorize"
    Route::redirect('/{category}/u', '/courses/{category}/u/0'); // Redirect to "categorize"
    Route::get('/create', 'CourseController@create')->name('create');
    Route::post('/', 'CourseController@store')->name('store');
    Route::get('/edit', 'CourseController@edit')->name('edit');
    Route::get('/{category}/{author}/{course}', 'CourseController@show')->name('show');
    Route::patch('/', 'CourseController@update')->name('update');
    Route::get('/delete', 'CourseController@delete')->name('delete');
    Route::get('/restore', 'CourseController@restore')->name('restore');
    Route::get('/destroy', 'CourseController@destroy')->name('destroy');
});
