@extends('admin.master')

@section('title')
    Manage Article
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
                            <th>Article Title</th>
                            <th>Description</th>
                            <th>Posted By</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($articles as $article)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $article->title }}</td>
                                <td>{!! $article->description !!}</td>
                                <td>{{ $article->user->name }}</td>
                                <td>
                                    <img src="{{ asset($article->image) }}" alt="" style="height: 80px">
                                </td>
                                <td>{{ $article->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td>
                                    <a href="{{ route('articles.edit', $article->id ) }}" class="btn btn-warning btn-sm"><i class="bx bx-edit"></i></a>
                                    {{--                                    <a href="{{ route('blog-sub-categories.destroy', $blogSubCategory->id ) }}" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger btn-sm"><i class="bx bx-trash"></i></a>--}}
                                    <form action="{{ route('articles.destroy', $article->id ) }}" method="post" style="display: inline-block" onclick="return confirm('Are you sure to delete?')">
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
