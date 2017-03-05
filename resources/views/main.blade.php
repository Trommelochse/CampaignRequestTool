<!DOCTYPE html>
<html lang="en">

@include('partials._head')

<body>
	@include('partials._nav')

	@yield('content')

	@include('partials._footer')

	<script src="{!! asset('js/vendor/jquery.js')!!}" type="text/javascript"></script>
  	<script src="{!! asset('js/vendor/what-input.js')!!}" type="text/javascript"></script>
  	<script src="{!! asset('js/vendor/foundation.js')!!}" type="text/javascript"></script>
 	<script src="{!! asset('js/foundation-datepicker.min.js')!!}" type="text/javascript"></script>
 	<script src="{!! asset('js/main.js')!!}" type="text/javascript"></script>
  
</body>
</html>