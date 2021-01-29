<?php

namespace App\Http\Controllers;

use App\Models\Course;

class PageController extends Controller
{
    /**
     * Undocumented function
     *
     * @return void
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Undocumented function
     *
     * @param Course $course
     * @return void
     */
    public function show(Course $course)
    {
        return view('show', compact('course'));
    }
}
