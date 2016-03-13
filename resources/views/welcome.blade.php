<!DOCTYPE html>
<html lang="en" class=" is-copy-enabled is-u2f-enabled">
<head>

    <title>Mesour DataGrid sandbox</title>

    <link rel="shortcut icon" href="{$basePath}/favicon.png">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/mesour.grid.min.css">

</head>

<body>

<script>
    var mesour = !mesour ? {} : mesour;
    mesour.parameters = !mesour.parameters ? [] : mesour.parameters;
    mesour.parameters.push(["set", "_token", "{{ csrf_token() }}"]);
</script>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand">Mesour DataGrid 3.0 - Sandbox for Laravel framework</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#" onclick="return false;">Sandbox</a></li>
                <li><a href="http://grid.mesour.com" target="_blank">Docs</a></li>
                <li><a href="http://apis.mesour.com/api/Componets-3.0.1/" target="_blank">API</a></li>
                <li><a href="https://github.com/mesour/DataGrid/tree/devel" target="_blank">GitHub</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container" style="margin-top: 50px;">

    <div id="banner">
        <h1 n:block=title>Congratulations!</h1>
    </div>

    <h2>Successfully implemented Mesour DataGrid on Laraver Framework project.</h2>

    {!! $grid !!}

    <script src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.min.js"></script>

    <script src="https://nette.github.io/resources/js/netteForms.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
            integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <script src="/js/mesour.grid.min.js"></script>

</div>
</body>
</html>