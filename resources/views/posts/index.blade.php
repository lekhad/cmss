@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-end my-2">
    <a href="{{ route('posts.create') }}" class="btn btn-success float-right">Add Post</a>
 </div>

 <div class="card card-default">
    <div class="card-header">
        <div class="card-body">
            <table class="table">
                <thead>
                    <th>Image</th>
                    <th>Title</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td><img src="{{ asset($post->image) }}" width="120px" height="60px" alt="Hello"></td>
                            <td>{{ $post->title }}</td>
                            <td>
                                <a href="" class="btn btn-info sm">Edit</a>
                            </td>
                            <td>
                                <a href="" class="btn btn-danger sm">Trash</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
 </div>
@endsection