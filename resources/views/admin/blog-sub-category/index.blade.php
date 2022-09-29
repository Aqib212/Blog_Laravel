@extends('admin.master')

@section('title')
    Manage Blog Sub Category
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
                            <th>Sub Category Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($blogSubCategories as $blogSubCategory)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $blogSubCategory->blogCategory->category_name }}</td>
                                <td>{{ $blogSubCategory->sub_category_name }}</td>
                                <td>{{ $blogSubCategory->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td>
                                    <a href="{{ route('blog-sub-categories.edit', $blogSubCategory->id ) }}" class="btn btn-warning btn-sm"><i class="bx bx-edit"></i></a>
{{--                                    <a href="{{ route('blog-sub-categories.destroy', $blogSubCategory->id ) }}" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger btn-sm"><i class="bx bx-trash"></i></a>--}}
                                    <form action="{{ route('blog-sub-categories.destroy', $blogSubCategory->id ) }}" method="post" style="display: inline-block" onclick="return confirm('Are you sure to delete?')">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-sm">
                                            <i class="bx bx-trash"></i>
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
    </section>
@endsection
