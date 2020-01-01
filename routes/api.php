<?php

use Illuminate\Http\Request;


// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('courses')->name('courses.')->namespace('Api')->group(function () {
    Route::get('/all', 'CourseController@index');
    Route::get('/{category}/u/0', 'CourseController@categorize')->name('categorize');
    Route::get('/{category}/{instructor}/{course}', 'CourseController@show');
    Route::get('/delete', 'CourseController@delete');
    Route::get('/destroy', 'CourseController@destroy');
});

Route::prefix('categories')->namespace('Api')->group(function () {
    Route::get('/', "CategoryController@index");
    Route::get('/delete', 'CourseController@delete');
    Route::get('/destroy', 'CourseController@destroy');
});
