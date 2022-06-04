@extends('master')

@section('title')
Edit Blog
@endsection()

@section('body')
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div>
                    <div class="card">
                        <div class="card-header text-center">
                        <h4>Edit Blog Form</h4>
                        </div>
                        <div class="card-body">
                            @if($message = Session::get('message'))
                            <h5 class="text-success text-center">{{$message}}</h5>
                            @endif
                            <form action="{{ route('update-blog')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="blog_id" value="{{ $blog->id}}">
                                <div class="from-group row">
                                    <label for="" class="col-form-label col-md-3">Blog Title</label>
                                    <div class="col-md-9">
                                        <input type="text" name="title" value="{{ $blog->title }}" class="form-control">
                                    </div>
                                </div>
                                <div class="from-group row ">
                                    <label for="" class="col-form-label col-md-3">Blog Author</label>
                                    <div class="col-md-9 mt-3">
                                        <input type="text" name="author" value="{{$blog->author}}" class="form-control">
                                    </div>
                                </div>
                                <div class="from-group row ">
                                    <label for="" class="col-form-label col-md-3">Blog Description</label>
                                    <div class="col-md-9 mt-3">
                                        <textarea class="form-control" name="description" id="" cols="30" rows="10">{{ $blog->description }}</textarea>
                                       
                                    </div>
                                </div>
                                <div class="from-group row">
                                    <label for="" class="col-form-label col-md-3">Blog Image</label>
                                    <div class="col-md-9 mt-3">
                                        <img src="{{asset($blog->image)}}" style="height: 100px; width:100px; " alt="">
                                        <input type="file" name="image" class="form-control-file">
                                       
                                    </div>
                                </div>
                                <div class="from-group row ">
                                    <label for="" class="col-form-label col-md-3"></label>
                                    <div class="col-md-9 mt-3">
                                        <input type="submit" class="btn btn-success" value="Create New Blog">
                                       
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection