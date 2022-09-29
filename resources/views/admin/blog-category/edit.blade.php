@extends('admin.master')

@section('title')
    Edit Blog Category
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card" style="border: 2px solid lightgrey">
                        <div class="card-header">
                            <h3 class="text-center">Edit Blog Category</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('update-blog-category',['id' => $blogCategory->id]) }}" method="post">
                                @csrf
                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Category Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="category_name" class="form-control" value="{{ $blogCategory->category_name }}">
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Status</label>
                                    <div class="col-md-8">
                                        <label for=""><input type="radio" {{ $blogCategory->status == 1 ? 'checked' : '' }} name="status" value="1">Published</label>
                                        <label for=""><input type="radio" {{ $blogCategory->status == 0 ? 'checked' : '' }} name="status" value="0">Unpublished</label>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" class="btn btn-success btn-sm" value="Update Blog Category" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
