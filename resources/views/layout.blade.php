<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="keywords" content="">
    <meta charset="utf-8">
    <meta name="author" content="telmed.mn">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <title>The first national congress of blood service nurses</title>
    <link href="images/favicon.png" rel="shortcut icon" type="image/png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
    <script type="text/javascript" src="/js/jquery.min.js"></script>
</head>

<body>
    @include('components.toast')
    <header>
        <div class="section_container">
            <div class="header_main">
                <a href="/" class="logo"><span></span></a>
                <div class="header_menu">
                    <ul>
                        <li><a href="#home" class="page-scroll">Home</a></li>
                        <li><a href="#invitation" class="page-scroll">Invitation</a></li>
                        <li><a href="#program" class="page-scroll">Program</a></li>
                        <li><a href="#speakers" class="page-scroll">Speakers</a></li>
                    </ul>
                </div>
                <div class="dfc jce"><a href="/register" class="n_button __primary">Register</a></div>
            </div>
        </div>
    </header>
    <div class="body_wrap">
        @yield('content')
    </div>

    <footer class="footer_wrap">
        <div class="section_container">
            <div class="footer_content"><p>&copy; 2025. National center for transfusion medicine</p></div>
        </div>
    </footer>
</body>

<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/inputmask.bundle.js"></script>
<script type="text/javascript" src="/js/main.js"></script>

</html>