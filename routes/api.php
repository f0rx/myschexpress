<?php

use Illuminate\Http\Request;


// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('courses')->name('courses.')->namespace('Api')->group(function () {
    Route::get('/all/{tag?}', 'CourseController@index');
    Route::get('/{category}/all{tag?}', 'CourseController@categorize');
    Route::get('/topTags', 'TagController@active');
    Route::get('/{category}/{instructor}/{course}', 'CourseController@show');
    Route::get('/delete', 'CourseController@delete');
    Route::get('/destroy', 'CourseController@destroy');
});
