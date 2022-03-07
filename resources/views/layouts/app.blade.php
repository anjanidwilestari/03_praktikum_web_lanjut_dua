
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>Educastudio Modify @yield('tittle')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="{{ asset('style/css/bootstrap.min.css') }}">
        <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="{{ asset('style/css/font-awesome.min.css') }}">
        <!-- Normailize Stylesheet -->
    <link rel="stylesheet" href="{{ asset('style/css/normalize.min.css') }}">
    <!-- Main Styles -->
    <link rel="stylesheet" href="{{ asset('style/css/templatemo-style.css') }}">
    <script src="{{ asset('style/js/vendor/modernizr-2.6.2.min.js') }}"></script>
</head>

<body>
    <!-- HEADER -->
    <div class="site-header">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-default navbar-static-top">
                    <div class="navbar-header">
                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#main-menu">
                            <span class="sr-only">Toggle navigation</span>
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="/home">Educastudio Modify</a>
                    </div>
                    <div class="collapse navbar-collapse" id="main-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li ><a href="/home">Home</a></li>
                            <li ><a href="/product">Products</a></li>
                            <li ><a href="/program">Program</a></li>
                            <li ><a href="/news">News</a></li>
                            <li ><a href="/about">About</a></li>
                            <li ><a href="/contact">Contact</a></li>
                        </ul>
                    </div>
                </nav>         
            </div>
        </div>
    </div> <!-- .site-header -->
    
    @yield('content')

    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul class="social">
                        <li class="twitter"><a href="https://twitter.com/educastudio" class="fa fa-twitter"></a></li>
                        <li class="facebook"><a href="https://www.facebook.com/educastudio" class="fa fa-facebook"></a></li>
                        <li class="rss"><a href="https://educastudio.com/" class="fa fa-rss"></a></li>
                        <li class="linkedin"><a href="https://id.linkedin.com/company/educastudio" class="fa fa-linkedin"></a></li>
                    </ul>
                    <p>Copyright &copy; 2022 Educastudio Modify</p>
                    @yield('footer')
                </div>
            </div>
        </div>
    </footer>
    
	<script src="{{ asset('style/js/vendor/jquery-1.10.1.min.js') }}"></script>
    <script src="{{ asset('style/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('style/js/plugins.js') }}"></script>
    <script src="{{ asset('style/js/main.js') }}"></script>    
    
</body>
</html>