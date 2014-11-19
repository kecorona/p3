<!DOCTYPE html>

<html lang="en">
<head>
    <title></title>
    @include('includes.head')
</head>

<body>
<div class="uk-container-center">
    <div class="uk-container-center">
            @include('includes.header')
        
    </div>
    <div class="uk-container-center">

        @yield('content')
    </div>
    
    <div class="uk-container-center bottom-bg">
        @include('includes.footer')
   </div>

        
    </div>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js' type='text/javascript'>
    </script> 
    {{ HTML::script('assets/js/app.js') }}
    
</body>
</html>