<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;
use App\Http\Controllers\Controller;
class DestroyController extends BaseController
{
    public function __invoke(Post $post){   
        $post->delete();
        return redirect()->route('post.index');
    }
}
