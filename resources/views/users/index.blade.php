@extends('layouts.layout')

@section("mainsection")

    <h2>Users </h2>
    <table class="table table-striped ">
        <tr  class="bg-info">
            <th>
                Name
            </th>
            <th>
                Email
            </th>

            <th>
                User Blog
            </th>

        </tr>

        @foreach($users as $user )
            <td>
                {{$user["name"]}}
            </td>
            <td>
                {{$user["email"]}}
            </td>

            <td>
                <a class="btn btn-success" href="{{route("userposts.show",$user)}}">Show posts</a>
            </td>


            </tr>
        @endforeach
    </table>






@endsection
