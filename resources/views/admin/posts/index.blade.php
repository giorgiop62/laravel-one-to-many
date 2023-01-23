@extends('layouts.app')

@section('title')
    | Admin
@endsection

@section('content')
<div class="container">
    <h1>elenco post</h1>
    @dump($posts);

@endsection
