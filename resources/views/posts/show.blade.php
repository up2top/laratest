@extends('layouts.master')

@section('title')
  {{ $post->title }}
@endsection

@section ('content')
  {{ $post->body }}

  <hr>

  <div class="comments">
    <ul class="list-group">
    @foreach ($post->comments as $comment)
        <li class="list-group-item">
            <strong>
                {{ $comment->created_at->diffForHumans() }}:
            </strong>
            {{ $comment->body }}
        </li>
    @endforeach
    </ul>
  </div>

  <hr />

  @can('createComment', $post)
  <div class="card">
    <div class="card-block">
      <form method="POST" action="/posts/{{ $post->id }}/comments">

        {{ csrf_field() }}

        <div class="form-group">
          <textarea name="body" placeholder="Your comment here." class="form-control"></textarea>
        </div>

        <div class="form-group">
            <button class="btn btn-primary" type="submit">Post comment</button>
        </div>
      </form>
    </div>
  </div>
  @endcan
@endsection
