@extends('admin.master')

@section('title')
    Create Service
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card" style="border: 2px solid lightgrey">
                        <div class="card-header">
                            <h3 class="text-center">Add Service</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('services.store') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Service Title</label>
                                    <div class="col-md-8">
                                        <input type="text" name="title" id="" class="form-control" />
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Service Description</label>
                                    <div class="col-md-8">
                                        <textarea name="description" id="summernote" cols="30" rows="10" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Featured Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="image" accept="image/*" />
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
                                        <input type="submit" class="btn btn-success btn-sm" value="Create Service" />
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
