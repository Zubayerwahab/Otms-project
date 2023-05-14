@extends('admin.master')
@section('title')
    Edit Course Category
@endsection
@section('body')
    <div class="row">
        <div class="col-md-6 py-5 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="float-start">Edit Course Category</h3>
                    <a href="{{ route('course-categories.index') }}" class="btn btn-primary float-end">Manage</a>
                </div>
                <div class="card-body">
                    <span class="text-success" {{ Session::has('success') ? Session::get('success') : '' }}></span>
                    <form action="{{ route('course-categories.update', ['id'=>$courseCategory->id]) }}" method="post">
                        @csrf
                        <div class="row mt-2">
                            <label for="" class="col-md-4">Category Name</label>
                            <div class="col-md-8">
                                <input type="text" name="name" value="{{ $courseCategory->name }}" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <label for="" class="col-md-4">Status</label>
                            <div class="col-md-8">
                                <label><input type="radio" name="status" value="1" {{ $courseCategory->staus == 1 ? 'checked' : '' }}>Published</label>
                                <label><input type="radio" name="status" value="2" {{ $courseCategory->staus == 2 ? 'checked' : '' }}>Unpublished</label>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <label for="" class="col-md-4"></label>
                            <div class="col-md-8">
                                <input type="submit" class="btn btn-success" value="Update Category">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection



