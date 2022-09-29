@extends('admin.master')

@section('title')
    Manage Blog
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <table class="table table-bordered table-responsive" id="datatable">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Category Name</th>
                            <th>Sub Category Name</th>
                            <th>Blog Title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($blogs as $blog)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $blog->blogCategory->category_name }}</td>
                                <td>{{ $blog->blogSubCategory->sub_category_name }}</td>
                                <td>{{ $blog->blog_title }}</td>
                                <td>{!! $blog->description !!}</td>
                                <td>
                                    <img src="{{ asset($blog->image) }}" alt="" style="height: 80px">
                                </td>
                                <td>{{ $blog->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td>
                                    <a href="{{ route('blogs.edit', $blog->id ) }}" class="btn btn-warning btn-sm"><i class="bx bx-edit"></i></a>
                                    {{--                                    <a href="{{ route('blog-sub-categories.destroy', $blogSubCategory->id ) }}" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger btn-sm"><i class="bx bx-trash"></i></a>--}}
                                    <form action="{{ route('blogs.destroy', $blog->id ) }}" method="post" style="display: inline-block" onclick="return confirm('Are you sure to delete?')">
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
