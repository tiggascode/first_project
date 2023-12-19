<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tag;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){



    }

    public function create(){


    }

    public function store(){
        
    }

    public function show(Post $post){
    }

    public function edit(Post $post){



    }
    public function update(Post $post){
        
    }
    
    public function destroy(Post $post){

    }
    public function firstOrCreate(){
    

        $anotherPost = [ 
            'title' => 'some post',
            'content' => 'some content',
            'image' => 'some  shdhs.jpg',
            'likes' => 50000,
            'is_published' => 1,
        ];

        $post = Post::firstOrCreate([
            'title' => 'some post'
        ],[
            'title' => 'some post',
            'content' => 'some content',
            'image' => 'some  shdhs.jpg',
            'likes' => 50000,
            'is_published' => 1,
        ]);
        dump($post->content);
        dd('finised');
    }

    public function updateOrCreate(){
        $anotherPost = [
            'title' => 'updateorcreate some post',
            'content' => 'updateorcreate some content',
            'image' => 'updateorcreate some  shdhs.jpg',
            'likes' => 5000,
            'is_published' => 0,
        ];
        $post = Post::updateOrCreate([
            'title' => 'some post'
        ],[
            'title' => 'some post',
            'content' => 'updateorcreate some content',
            'image' => 'updateorcreate some  shdhs.jpg',
            'likes' => 5000,
            'is_published' => 0,
        ]);
        dump($post->content);
        dd('updated');
    }
}
