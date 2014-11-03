<!-- Navigation -->
    <nav class="uk-navbar-nav uk-navbar-fixed">
        <div class="uk-navbar-header">
            <a id="logo" class="uk-navbar-brand" href="#">
                <img width="200px" height="auto"  src="assets/img/logo.png" />
            </a>
            <button type="uk-button" class="uk-navbar-toggle" data-toggle="uk-collapse" data-target="#panel">
            <span class="sr-only">Toggle navigation</span>
            <span class="uk-icon-bar"></span>
            <span class="uk-icon-bar"></span>
            <span class="uk-icon-bar"></span>
          </button>
        </div>


        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a id="logo" class="navbar-brand" href="#">
                <img width="200px" height="auto"  src="assets/img/logo.png" />
            </a>
              
            <div class="uk-collapse uk-navbar-collapse">
              <ul class="uk-nav uk-navbar-nav">
                <li {{ (Request::is('/') ? ' class="uk-active"' : '') }}><a href="{{{ URL::to('') }}}">Home</a></li>
                <li {{ (Request::is('random_users.index') ? ' class="uk-active"' : '') }}><a href="{{{ URL::to('random_users.index') }}}">Random User Generator</a></li>
                <li {{ (Request::is('lorem_ipsum.index') ? ' class="uk-active"' : '') }}><a href="lorem_ipsum.index">Lorem Ipsum Generator</a></li>
              </ul>
            </div>
            <!-- /.navbar-collapse -->
        <!-- /.container -->
    </nav>