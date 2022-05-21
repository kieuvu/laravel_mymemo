<?php

namespace App\Services;

class UserServices
{
  public static function getAvatar($name)
  {
    $url = "https://avatar.oxro.io/avatar.svg?name=";
    $url .= $name;
    return $url;
  }
}
