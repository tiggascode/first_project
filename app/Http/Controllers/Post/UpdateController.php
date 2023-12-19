<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;
use App\Http\Controllers\Controller;
use App\Http\Requests\Post\UpdateRequest;

class UpdateController extends BaseController
{
    public function __invoke(Post $post, UpdateRequest $request){
        $data = $request->validated();

        $this->service->update($post,$data);
        return redirect()->route('post.show', $post->id);  
    }
}