<?php

namespace App\Services;

use App\Models\Post;
use App\Models\Tag;

class PostServices
{
  static public function updateImage(Post $post, $file)
  {
    $response         = cloudinary()->upload($file->getRealPath())->getSecurePath();
    $post->image_link = $response;
    return $post->save();
  }

  static public function updateTags(Post $post, array $tags)
  {
    $tags_id = [];
    foreach ($tags as $tag) {
      $newtags = Tag::firstOrCreate([
        'hash' => md5($tag),
      ], [
        'name' => $tag,
      ]);

      $id = $newtags->id;
      if (in_array($id, $tags_id)) continue;
      $tags_id[] = $id;
    }

    return $post->tags()->sync($tags_id);
  }
}
