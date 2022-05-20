<?php

namespace App\Services;

use App\Models\Post;
use App\Models\Tag;

class PostServices
{

  public static function newPost(string $title, string $slug, string $author, int $status): Post
  {
    $post         = new Post();

    $post->title  = $title;
    $post->slug   = $slug;
    $post->author = $author;
    $post->status = $status;

    $post->save();

    return $post;
  }

  static public function updateImage(Post $post, $file)
  {
    $response = cloudinary()->upload(
      $file->getRealPath(),
      array("folder" => "mymemo")
    )->getSecurePath();

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
