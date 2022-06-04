@extends('master')

@section('title')
Mangage  Blogs
@endsection()

@section('body')
<section class="py-5">
<div class="container">
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header text-center">
                <h4>Manage Blog</h4>
            </div>
            <div class="card-body">
                @if(Session::has('message'))
                <h4 class="text-success text-center">{{Session::get('message')}}</h4>
                @endif
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                           <th>SL</th> 
                           <th>Title</th> 
                           <th>Author Name</th> 
                           <th>Blog Description</th> 
                           <th>Blog Image</th> 
                           <th>Action</th> 
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($blogs as $blog)
                      <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$blog->title}}</td>
                          <td>{{$blog->author}}</td>
                          <td>{{$blog->description}}</td>
                          <td><img src="{{isset($blog->image) ? asset($blog->image) : '' }}" style="height:100px; width: 100px;" alt="" /></td>
                          <td><a href="{{route('edit-blog',['id'=> $blog->id])}}" class="btn btn-warning">Edit</a></td>
                          <td><a href="{{route('delete-blog',['id'=>$blog->id])}}" onclick="return confirm('Are You sure???')" class="btn btn-denger">Delete</a></td>
                      </tr> 
                      @endforeach 
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</section>
@endsection

