@extends('_layouts.master')

@section('body')
    <h1>Welcome to <strong>{{ $page->title }}</strong></h1>
    <p>{{ $page->description }}</p>
@endsection
