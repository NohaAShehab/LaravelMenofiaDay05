@extends('layouts.layout')


@section('mainsection')
    <h1> Edit post {{$post->id}} </h1>
    <form action="{{route("posts.update",$post)}}" method="post">
        @csrf
        @method("put")

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" value="{{$post['title']}}" class="form-control"
                   name="title" id="post_title" aria-describedby="titleHelp">
            <label class="text-danger"> {{$errors->first("title")}}</label>
        </div>
        <div class="form-group">
            <label for="body">Email</label>
            <textarea  class="form-control"
                       name="body" id="body" aria-describedby="bodyHelp">{{$post['body']}}
            </textarea>
            <label class="text-danger"> {{$errors->first("body")}}</label>
        </div>

        <button type="submit"  class="btn btn-success">Submit</button>
        <a class="btn btn-primary" href="{{route("posts.index")}}">Back</a>

    </form>

@endsection
