<!DOCTYPE html>
<html lang="en">
  <head>
	@include('includes.head')
</head>
<body>

	<div class="uk-container">
                     
        <nav class="uk-nav uk-margin-top">
            <div class="uk-navbar-nav">
                <ul class="uk-nav uk-nav-navbar" style=" display:inline;" data-uk-switcher="{connect:'#switcher-1'}">
                    <li><a href="index.html">
                        <img width="300px" height="auto"  src="assets/img/logo_inv.png"></a>
                    </li>
                </ul>
            </div>
            <div class="uk-navbar-flip">
            <ul class="uk-nav uk-navbar-nav uk-hidden-small">
                <li><a href="#bio"><span>Bio</span></a></li>
                <li><a href="#portfolio"><span>Portfolio</span></a></li>
                <li><a href=""><span>Tech Talk</span></a></li>
                <li><a href=""><span>Contact</span></a></li>
                
            </ul>
            </div>
        </nav>
        <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" style="margin-right: 10px" data-uk-offcanvas=""></a>

    </div>
            

        <div class="uk-container">


				  @yield('content')

	       </div>

           <div class="uk-container">
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
