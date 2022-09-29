@extends('admin.master')

@section('title')
    Manage Blog Category
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <table class="table table-bordered" id="datatable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Category Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($blogCategories as $blogCategory)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $blogCategory->category_name }}</td>
                                <td>{{ $blogCategory->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td>
                                    <a href="{{ route('edit-blog-category', ['id' => $blogCategory->id ]) }}" class="btn btn-warning btn-sm"><i class="bx bx-edit"></i></a>
                                    <a href="{{ route('delete-blog-category', ['id' => $blogCategory->id ]) }}" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger btn-sm"><i class="bx bx-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
