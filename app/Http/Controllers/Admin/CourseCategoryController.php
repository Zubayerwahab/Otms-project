<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CourseCategory;
use Illuminate\Http\Request;

class CourseCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.courseCategory.index',[
            'courseCategories'=>CourseCategory::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.courseCategory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       CourseCategory::createOrUpdateCourseCategory($request);
       return redirect()->route('course-categories.index')->back()->with('success','Course Category Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return 'show data';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.courseCategory.edit',[
            'courseCategory' =>CourseCategory::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        CourseCategory::createOrUpdateCourseCategory($request,$id);
        return redirect()->route('course-categories.index')->back()->with('success','Course Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        CourseCategory::find($id)->delete();
        return redirect()->back()->with('success','Course Category Deleted Successfully');
    }
}
