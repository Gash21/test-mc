<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="vendor/hopscotch/css/hopscotch.min.css" rel="stylesheet">
        <link href="css/hopscotch.css" rel="stylesheet">
        <link href="vendor/bower_components/bootstrap/dist/css/bootstrap.css" rel="stylesheet">

    </head>
    <body>      
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/">Hopscotch Test</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="/">Hopscotch</a></li>
                        <li><a href="api-call">API Call</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
        {{\Request::route()->getName() }}
        @yield('content')
        <script type="text/javascript" src="vendor/bower_components/jquery/dist/jquery.js"></script>
        <script type="text/javascript" src="vendor/bower_components/sha256/sha256.js"></script>
        <script type="text/javascript" src="vendor/bower_components/jquery.serializeJSON/jquery.serializejson.js"></script>
        <script type="text/javascript" src="vendor/bower_components/jquery-validation/dist/jquery.validate.js"></script>
        <script type="text/javascript" src="vendor/bower_components/bootstrap/dist/js/bootstrap.js"></script>
        <script type="text/javascript" src="vendor/hopscotch/js/hopscotch.js"></script>
        <script type="text/javascript" src="js/hopscotch.js"></script>
    </body>
</html>