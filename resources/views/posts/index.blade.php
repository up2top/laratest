@extends ('layouts.master')

@section ('title')
    Posts
@endsection

@section ('content')
    @foreach ($posts as $post)
        @include ('posts.post')
    @endforeach
@endsection