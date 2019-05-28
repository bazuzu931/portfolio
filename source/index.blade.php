@extends('_layouts.master')

@section('body')

  <ul>
    @foreach ($posts as $post)
      <li><a href="{{ $post->getUrl() }}">{{ $post->title }}</a>
    @endforeach
  </ul>


<script>
  if (window.netlifyIdentity) {
    window.netlifyIdentity.on("init", user => {
      if (!user) {
        window.netlifyIdentity.on("login", () => {
          document.location.href = "/admin/";
        });
      }
    });
  }
</script>

@endsection
