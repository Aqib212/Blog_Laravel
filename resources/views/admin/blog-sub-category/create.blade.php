@extends('admin.master')

@section('title')
    Create Blog Sub Category
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card" style="border: 2px solid lightgrey">
                        <div class="card-header">
                            <h3 class="text-center">Add Blog Sub Category</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('blog-sub-categories.store') }}" method="post">
                                @csrf
                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Category Name</label>
                                    <div class="col-md-8">
                                        <select name="category_id" id="" class="form-control">
                                            <option value="">Select a category</option>
                                            @foreach($blogCategories as $blogCategory)
                                                <option value="{{ $blogCategory->id }}" class="form-control">{{ $blogCategory->category_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Sub Category Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="sub_category_name" class="form-control" />
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Status</label>
                                    <div class="col-md-8">
                                        <label for=""><input type="radio" name="status" checked value="1">Published</label>
                                        <label for=""><input type="radio" name="status" value="0">Unpublished</label>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" class="btn btn-success btn-sm" value="Add Blog Sub Category" />
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
