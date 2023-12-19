@extends('layouts.main')
@section('content')
    <div >
        <form action="{{ route('post.store')}}" method="post">
        @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input 
                value="{{old('title')}}"
                type="text" name="title" class="form-control"  id="title"  placeholder="Title">
                @error('title')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" name="content"  id="content"  placeholder="Content">{{old('content')}}</textarea>
                @error('content')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input 
                value="{{old('image')}}"
                type="text" class="form-control" name="image"  id="image"  placeholder="Image">
                @error('image')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="category">Category</label>
                <select id="category" class="form-control" name="category_id">
                    @foreach($categories as $category)
                    <option 
                    {{ old('category_id') == $category->id ? ' selected' : '' }}
                    value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="tags">Tags</label>
                <select multiple id="tags" class="form-control" name="tags[]" >
                    @foreach($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                    @endforeach
                </select>

            </div>


            <button type="submit" class="create-button">Create</button>
        </form>
    </div>
@endsection


