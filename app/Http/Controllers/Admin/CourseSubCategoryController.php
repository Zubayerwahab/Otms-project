<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CourseCategory;
use App\Models\CourseSubCategory;
use Illuminate\Http\Request;

class CourseSubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.courseSubCategory.index',[
            'courseSubCategories'=>CourseSubCategory::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.courseSubCategory.create',[
            'courseCategories'=>CourseCategory::where('status',1)->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        CourseSubCategory::createOrUpdateCourseSubCategory($request);
        return redirect()->back()->with('success','Course Sub Cateegory Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.courseSubCategory.edit',[
            'courseSubCategory'=>CourseSubCategory::find($id),
             'courseCategories'=>CourseCategory::where('status',1)->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        CourseSubCategory::createOrUpdateCourseSubCategory($request,$id);
        return redirect()->route('course-sub-categories.index')->with('success','Course Sub Category Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        CourseSubCategory::find($id)->delete();
        return redirect()->back()->with('success','Course Sub Category Deleted ');
    }
}
