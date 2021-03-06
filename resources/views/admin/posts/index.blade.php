@extends('layouts.admin')

@section('content')

@if(Session::has('deleted_post'))


    <p class="bg-danger">{{session('deleted_post')}}</p>


  @endif


    <h1>All Posts</h1>

    <table class="table">
            <thead>
              <tr>
                <th>Id</th>
                <th>Photo</th>
                <th>Title</th>
                <th>Author</th>
                <th>Category</th>
                {{-- <th>Body</th> --}}
                <th>Zobacz Post</th>
                <th>Zobacz komentarze</th>
                <th>Created</th>
                <th>Updated</th>
              </tr>
            </thead>
            <tbody>
            @if($posts)

                @foreach ($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td><img height="50" width="50" src="{{$post->photo ? $post->photo->file : 'https://via.placeholder.com/350x150'}}" alt=""></td>
                    <td><a href="{{route('admin.posts.edit',$post->id)}}">{{$post->title}}</a></td>
                    <td>{{$post->user->name}}</td>
                    <td>{{$post->category ? $post->category->name : 'Brak kategorii'}}</td>
                    
                    {{-- <td>{{str_limit($post->body,30)}}</td> --}}
                    <td><a href="{{route('home.post',$post->slug)}}">Zobacz post</a></td>
                    <td><a href="{{route('admin.comments.show',$post->id)}}">Zobacz komentarze</a></td>
                    <td>{{$post->created_at->diffForhumans()}}</td>
                    <td>{{$post->updated_at->diffForhumans()}}</td>
                </tr>
                @endforeach

                @endif



             
              
            </tbody>
    </table>

    <div class="row">
        <div class="col-sm-6 col-sm-offset-5">
            {{$posts->render()}}
        </div>
    </div>


@stop