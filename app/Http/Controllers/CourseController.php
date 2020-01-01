<?php

namespace App\Http\Controllers;

use App\Course;
use App\Category;
use App\Instructor;
use ArrayObject;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('courses.index');
    }

    /**
     * Display a listing of the resource based on Category/Topic
     *
     * @return \Illuminate\Http\Response
     */
    public function categorize(Category $category)
    {
        // $category = $category->with('courses');
        return view('courses.show-category', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category $category
     * @param  \App\Instructor $author
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category, Instructor $author, Course $course)
    {
        dd("Course Detail");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        return view('courses.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Trash the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function delete(Course $course)
    {
        //
    }

    /**
     * Restore the specified resource from trash.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function restore(Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
    }
}
