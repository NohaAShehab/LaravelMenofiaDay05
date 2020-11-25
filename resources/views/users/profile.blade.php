@extends('layouts.layout')

@section("mainsection")

    <h2>{{$user->name}} Profile</h2>
    <table class="table table-striped ">
        <tr  class="bg-info">
            <th>
                Post title
            </th>
            <th>
                Post body
            </th>

        </tr>

        @foreach($posts as $post )
            <tr>
                <td>
                    {{$post["title"]}}
                </td>
                <td>
                    {{$post["body"]}}
                </td>
            </tr>
        @endforeach
    </table>






@endsection
