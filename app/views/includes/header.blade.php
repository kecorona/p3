<!-- Navigation -->

<div class="uk-grid top-bg"data-uk-grid-margin>
    <div class="uk-width-medium-1-3 uk-width-small-1-1 kc-margin">
        <a id="" class="uk-navbar-brand" href="#">
            <img width="200px" height="auto"  src="assets/img/logo.png" />
        </a>
        <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" style="" data-uk-offcanvas=""></a>      
    </div>

    <div class="uk-width-medium-2-3 kc-margin">
        <nav class="uk-hidden-small">
            <ul class="uk-nav">

                <li {{ (Request::is('/') ? ' class="uk-active"' : '') }}><a href="{{{ URL::to('/') }}}">Home</a></li>
                <li {{ (Request::is('random_users') ? ' class="uk-active"' : '') }}><a href="{{{ URL::to('random_users') }}}">Random User Generator</a></li>
                <li {{ (Request::is('lorem_ipsum') ? ' class="uk-active"' : '') }}><a href="lorem_ipsum">Lorem Ipsum Generator</a></li>
            </ul>
        </nav>
        

        
        </div>
    
    
<div id="offcanvas" class="uk-offcanvas ">
        <div class="uk-offcanvas-bar uk-offcanvas-bar-flip">
            <ul class="uk-nav uk-nav-offcanvas" data-uk-nav>
                <div class="uk-container-center uk-text-center">
                    <h1 class="uk-article-title">Developer Tools</h1>
                </div>
                <li {{ (Request::is('/') ? ' class="uk-active"' : '') }}><a href="{{{ URL::to('/') }}}">Home</a></li>
                <li {{ (Request::is('random_users') ? ' class="uk-active"' : '') }}><a href="{{{ URL::to('random_users') }}}">Random User Generator</a></li>
                <li {{ (Request::is('lorem_ipsum') ? ' class="uk-active"' : '') }}><a href="{{{ URL::to('random_users') }}}">Lorem Ipsum Generator</a></li>
            </ul>
        </div>
    </div>
</div>
    


    <!-- /.container -->

<!-- This is the off-canvas sidebar -->

