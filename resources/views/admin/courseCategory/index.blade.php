@extends('admin.master')
@section('title')
    Manage Course Category

@endsection
@section('body')
    <div class="row">
        <div class="col-md-9 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h2 class="float-start">Manage Course Category</h2>
                    <a href="{{ route('course-categories.create') }}" class="btn btn-secondary float-end">Create</a>
                </div>
                <div class="card-body">
                    <table id="basic-datatable" class="table table-striped table-responsive">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Category Name</th>
                            <th>Category Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($courseCategories as $courseCategory)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $courseCategory->name }}</td>
                            <td>{{ $courseCategory->status == 1 ? 'Published' : 'Unpublished' }}</td>
                            <td>

                                <a href="{{ route('course-categories.edit',$courseCategory->id) }}" class="btn btn-sm btn-secondary">
                                    <i class=" uil-edit"></i>
                                </a>
                                <form action="{{ route('course-categories.destroy',$courseCategory->id) }}" onsubmit="event.preventDefault();return confirm('Are you sure to delete this?')" style="display: inline-block" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        <i class="uil-trash"></i>
                                    </button>
                                </form>

                            </td>
                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
