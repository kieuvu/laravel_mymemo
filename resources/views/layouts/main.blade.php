<!DOCTYPE html>
<html lang="en">
@include('partials.head')

<body>
  @include('partials.header')
  @yield('content')
  @include('partials.script')
  @include('partials.footer')
</body>

</html>