@extends('layouts.main')
@section('content')

        <div class="post-div">        

        @foreach($posts as $post)
        <div id="posts">  <a href="{{ route ('post.show', $post->id) }}">{{ $post->id}}. {{ $post->title}}</a></div>
        @endforeach
        </div>
        
        @can('view', auth()->user())

        <a class="add-button" href="{{ route ('post.create') }}">Add one</a>

        @endcan
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
       <div  class="paginate">
        {{ $posts->withQueryString()->links()  }}
       </div>

@endsection


