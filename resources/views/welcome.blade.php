<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">

      <title>Home</title>

  <!-- Bootstrap Core CSS -->
  <link href="https://blackrockdigital.github.io/startbootstrap-landing-page/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/home-login.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="https://blackrockdigital.github.io/startbootstrap-landing-page/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
    </head>
    <body>
      <div class="intro-header">
          <div class="container">
            <div class="row">
                <div class="col-lg-12">
                  <div class="intro-message">
                        <h1>WELCOME TO</h1>
                        <h3>FIGHT FOR HEALTH</h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                        </ul>
                        <div class="flex-center position-ref full-height">
                            @if (Route::has('login'))
                                <div class="top-right links">
                                    @if (Auth::check())
                                        <a href="{{ url('/home') }}" class="btn btn-default btn-lg"><span class="network-name">Home</span></a>
                                    @else
                                        <a href="{{ url('/login') }}" class="btn btn-default btn-lg"><span class="network-name">Login</span></a>
                                        <a href="{{ url('/register') }}" class="btn btn-default btn-lg"><span class="network-name">Register</span></a>
                                    @endif
                                </div>
                            @endif

                        <!-- <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                        </ul> -->
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->



    <!-- jQuery -->
    <script src="https://blackrockdigital.github.io/startbootstrap-landing-page/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="https://blackrockdigital.github.io/startbootstrap-landing-page/js/bootstrap.min.js"></script>

<!--
                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div> -->

    </body>
</html>
