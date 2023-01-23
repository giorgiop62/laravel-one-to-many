@extends('layouts.app')

@section('title')
    | Admin
@endsection

@section('content')
    <div class="container">
        <h1>elenco post</h1>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Data</th>
                    <th scope="col">Text</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->data }}</td>
                        <td>{{ $post->text }}</td>
                        <td><a class="btn btn-primary" href="{{route('admin.posts.show',$post)}}">Show</a></td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    @endsection
