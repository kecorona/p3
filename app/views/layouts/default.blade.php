<!DOCTYPE html>
<html lang="en">
  <head>
	@include('includes.head')
</head>
<body>
        <div class="uk-container">
        
        </div>

        <div class="uk-container">


				  @yield('content')

                  @yield('results')

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
