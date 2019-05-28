@extends('_layouts.master')

@section('body')

  <ul>
    @foreach ($posts as $post)
      <li><a href="{{ $post->getUrl() }}">{{ $post->title }}</a>
    @endforeach
  </ul>


@endsection
