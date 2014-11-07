<!DOCTYPE html>
<html lang="en">
  <head>
	@include('includes.head')

</head>

<body>

<div class="uk-container">

	<div class="uk-grid">

		<div class="uk-width-3-10">
        
        	@include('includes.header')

        </div>

        <div class="uk-width-7-10">

				  @yield('content')

	       </div>

          

	<footer class="uk-container">

		@yield('includes.footer')

	</footer>

</div>

<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js' type='text/javascript'></script>

{{ HTML::script('assets/js/app.js') }}
{{ HTML::script('assets/js/bootstrap.min.js') }}

</body>
</html>
