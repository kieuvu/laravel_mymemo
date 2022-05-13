<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>

<script src="{{asset('assets/js/app.js')}}"></script>
<script src="{{asset('assets/libs/intense/intense.js')}}"></script>

<script>
  window.onload = function() {
	// Intensify all images on the page.
    var element = document.querySelectorAll( 'figure img' );
	Intense(element);
}
</script>

@yield('scripts')