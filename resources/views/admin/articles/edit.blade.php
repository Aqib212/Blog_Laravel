@extends('admin.master')

@section('title')
    Edit Article
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card" style="border: 2px solid lightgrey">
                        <div class="card-header">
                            <h3 class="text-center">Edit Article</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('articles.update', $article->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Article Title</label>
                                    <div class="col-md-8">
                                        <input type="text" name="title" id="" value="{{ $article->title }}" class="form-control" />
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Article Description</label>
                                    <div class="col-md-8">
                                        <textarea name="description" id="summernote" cols="30" rows="10" class="form-control">{!! $article->description !!}</textarea>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Featured Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="image" accept="image/*" />
                                        @if($article->image)
                                            <img src="{{ asset($article->image) }}" alt="" style="height: 80px" />
                                        @endif
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Status</label>
                                    <div class="col-md-8">
                                        <label for=""><input type="radio" name="status" {{ $article->status == 1 ? 'checked' : '' }} value="1">Published</label>
                                        <label for=""><input type="radio" name="status" {{ $article->status == 0 ? 'checked' : '' }} value="0">Unpublished</label>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" class="btn btn-success btn-sm" value="Update Article" />
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
