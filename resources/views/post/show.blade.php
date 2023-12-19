@extends('layouts.main')
@section('content')
    <div class="post-div">
        <div class="post-title">{{ $post->id}}. {{ $post->title}}</div>
        <div class="post-content">{{ $post->content}}</div>
    </div>
    <img src="{{ $post->image}}" >
    @can('view', auth()->user())

    <div id="buttons">
    
        
        <form action="{{ route('post.delete', $post->id) }}" method="post">
            @csrf
            @method('delete')
            <a class="edit-button" href="{{ route('post.edit', $post->id) }}">Edit</a>

            <input type="submit" value="Delete" class="delete-button">
        </form>
    </div>
    @endcan
        <div class="button"><a class="back-button" href="{{ route('post.index') }}">Back</a></div>
@endsection


