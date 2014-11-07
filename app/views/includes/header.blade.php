<!-- Navigation -->
<div class="uk-nav-sub">
    <ul class="uk-nav">
        <li class="uk-nav-header">
            <a id="logo" class="uk-navbar-brand" href="#">
                <img width="200px" height="auto"  src="assets/img/logo.png" />
            </a>
        </li>
        <li class="uk-nav-divider"></li>
        <li {{ (Request::is('/') ? ' class="uk-active"' : '') }}><a href="{{{ URL::to('') }}}">Home</a></li>
        <li {{ (Request::is('random_users') ? ' class="uk-active"' : '') }}><a href="{{{ URL::to('random_users') }}}">Random User Generator</a></li>
        <li {{ (Request::is('lorem_ipsum') ? ' class="uk-active"' : '') }}><a href="lorem_ipsum">Lorem Ipsum Generator</a></li>
    </ul>
</div>
    <!-- /.container -->

<!-- This is the off-canvas sidebar -->
<div id="nav" class="uk-offcanvas">
    <div class="uk-offcanvas-bar">
        <ul class="uk-nav uk-nav-offcanvas" data-uk-nav>
            <li {{ (Request::is('/') ? ' class="uk-active"' : '') }}><a href="{{{ URL::to('') }}}">Home</a></li>
            <li {{ (Request::is('random_users') ? ' class="uk-active"' : '') }}><a href="{{{ URL::to('random_users') }}}">Random User Generator</a></li>
            <li {{ (Request::is('lorem_ipsum') ? ' class="uk-active"' : '') }}><a href="lorem_ipsum">Lorem Ipsum Generator</a></li>
        </ul>
    </div>
</div>