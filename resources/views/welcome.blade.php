<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link rel="stylesheet" href="/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="/css/bootstrap-material-design.min.css">
        <link rel="stylesheet" href="/css/ripples.min.css">
        <link rel="stylesheet" href="/css/sweetalert.css" />
    </head>
    <body>
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="/">Laraforex</a>
            </div>
          </div>
        </nav>
        <div class="container">
            <div class="content">
                @yield('content')
            </div>
        </div>
        <script src="/js/jquery.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/sweetalert.min.js"></script>
        <script src="/js/ripples.min.js"></script>
        <script src="/js/material.min.js"></script>
    </body>
</html>
