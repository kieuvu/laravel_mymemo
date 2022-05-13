<?php

namespace App\Services;

use App\Models\Post;

class PostServices
{
  static public function updateImage(Post $post, $file)
  {
    $response = cloudinary()->upload($file->getRealPath())->getSecurePath();
    $post->image_link = $response;
    return $post->save();
  }
}
