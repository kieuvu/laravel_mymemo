@extends("layouts.main")
@section("styles")
<link rel="stylesheet" href="{{asset('assets/css/client/home.css')}}">
@stop
@section('content')
<div class="max-w-7xl mx-auto px-2 sm:px-4 lg:px-8">
  <div class="mansory" id="mansory_items">
    @foreach ($recent_posts as $post)
    <figure>
      <img src="{{$post->image_link}}" />
      <figcaption><a href="#">{{$post->author}}</a></figcaption>

      <div class="img__title">
        <h6 class="img__title-text text-overfl-3line "><a href="">{{$post->title}}</a></h6>
      </div>

      <div class="img__impress">
        <div class="img__impress-icon img__impress-save d-flex align-items-center">
          <i class="fas fa-plus-circle"></i>
        </div>
        <div class="d-flex">
          <div class="img__impress-icon img__impress-like d-flex align-items-center">
            <i class="far fa-heart"></i>
            <span style="width:4px"></span>
            <span class="img__impress-count">{{$post->likes}}</span>
          </div>
          <span style="width:12px"></span>
          <div class="img__impress-icon img__impress-download d-flex align-items-center">
            <i class="far fa-save"></i>
            <span style="width:4px"></span>
            <span class="img__impress-count">{{$post->downloads}}</span>
          </div>
        </div>
      </div>
    </figure>
    @endforeach
  </div>
  <div class="flex justify-center mb-5">
    {{ $recent_posts->links() }}
  </div>
</div>
@stop

@section("scripts")
<script>

</script>
@stop