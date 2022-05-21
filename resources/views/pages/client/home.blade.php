@extends("layouts.main")
@section("styles")
<link rel="stylesheet" href="{{asset('assets/css/client/home.css')}}">
@stop
@section('content')
<div class="max-w-7xl mx-auto px-2 sm:px-4 lg:px-8">
  <div class="mansory" id="mansory_items">
    @foreach ($recent_posts as $post)
    <figure class="mb-4">
      <img src="{{$post->image_link}}" />

      <div class="img__title mb-2">
        <h6 class="img__title-text text-overfl-3line "><a href="">{{$post->title}}</a></h6>
      </div>

      <div class="d-flex justify-between">
        <div class="d-flex align-items-center">
          <img class="mr-1" style="width:30px;border-radius:50%" src="{{$post->user['avatar']}}" alt="">
          <a class="font-medium" href="#">{{$post->author}}</a>
        </div>
        <div class="d-flex">
          <div class="img__impress-icon img__impress-like d-flex align-items-center">
            <i class="far fa-heart"></i>
          </div>
          <div class="ml-3 img__impress-icon img__impress-download d-flex align-items-center">
            <i class="far fa-save"></i>
          </div>
        </div>
      </div>

    </figure>
    @endforeach
  </div>
  <div class="flex justify-center my-5">
    {{ $recent_posts->links() }}
  </div>
</div>
@stop

@section("scripts")
<script>

</script>
@stop