<!DOCTYPE html>

<html lang="en">
<head>
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
    
</body>
</html>