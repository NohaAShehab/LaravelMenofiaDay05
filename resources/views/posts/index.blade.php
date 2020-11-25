@extends('layouts.layout')

@section("mainsection")

    <h2>Posts </h2>
    <table class="table table-striped ">
        <tr  class="bg-info">
            <th>
                Post title
            </th>
            <th>
                Post body
            </th>
            <th>
                Author
            </th>

            <th>
                Show
            </th>
            <th>
                Edit
            </th>
            <th>
                Delete
            </th>
        </tr>

       @foreach($posts as $post )
                <td>
                {{$post["title"]}}
                </td>
                <td>
                    {{$post["body"]}}
                </td>
                <td>
{{--                                        {{$post["user"]["name"]}}--}}

                    <a  href="{{route("userposts.show",$post["user"])}}">{{$post["user"]["name"]}}</a>

                </td>

                <td>
                    <a class="btn btn-success" href="{{route("posts.show",$post)}}">Show</a>
                </td>
                <td>
                    <a class="btn btn-warning" href="{{route("posts.edit",$post)}}">Edit</a>
                </td>
                <td>
                    <form action="{{route("posts.delete",$post)}}" method="post">
                        @csrf
                        @method("delete")
                        <input type="submit" value="Delete"  class="btn btn-danger" >
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <a class="btn btn-info" href="{{route("posts.create")}}">Add another post</a>






@endsection
