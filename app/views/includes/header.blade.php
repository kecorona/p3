<!-- Navigation -->
    <nav class="navbar navbar-fixed-top" role="navigation">

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a id="logo" class="navbar-brand" href="#">
                <img width="200px" height="auto"  src="assets/img/logo.png" />
            </a>
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                <li {{ (Request::is('/') ? ' class="active"' : '') }}><a href="{{{ URL::to('') }}}">Home</a></li>
                <li {{ (Request::is('pages.random_users') ? ' class="active"' : '') }}><a href="{{{ URL::to('pages.random_users') }}}">Random User Generator</a></li>
                <li {{ (Request::is('/lorem_ipsum') ? ' class="active"' : '') }}><a href="{{{ URL::to('pages.lorem_ipsum') }}}">Lorem Ipsum Generator</a></li>
              </ul>
            </div>
            <!-- /.navbar-collapse -->
        <!-- /.container -->
    </nav>