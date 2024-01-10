<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Models\Course;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('course.index', compact('courses'));
    }

    public function create()
    {
        return view('course.create');
    }

    public function store(StoreCourseRequest $request)
    {
        // $course = new Course();
        // $course->name = $request->name;
        // $course->fee = $request->fee;
        // $course->duration = $request->duration;
        // $course->location = $request->location;

        Course::create($request->validated());
        return redirect()->route('course.index');
    }

    public function edit(Course $course)
    {
        return view('course.edit', compact('course'));
    }

    public function show(Course $course)
    {
        return view('course.detail', compact('course'));
    }

    public function update(UpdateCourseRequest $request, Course $course)
    {
        $course->update($request->validated());
        return redirect()->route('course.index');
    }

    public function destroy(Course $course)
    {
        if ($course) {
            $course->delete();
        }
        return redirect()->route('course.index');
    }
}
