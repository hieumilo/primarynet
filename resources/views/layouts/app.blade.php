<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/img/favicon.144x144.html" rel="apple-touch-icon" type="image/png" sizes="144x144">
    <link href="/img/favicon.114x114.html" rel="apple-touch-icon" type="image/png" sizes="114x114">
    <link href="/img/favicon.72x72.html" rel="apple-touch-icon" type="image/png" sizes="72x72">
    <link href="/img/favicon.57x57.html" rel="apple-touch-icon" type="image/png">
    <link href="/img/favicon.html" rel="icon" type="image/png">
    <link href="/img/favicon-2.html" rel="shortcut icon">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="/css/lib/lobipanel/lobipanel.min.css">
    <link rel="stylesheet" href="/css/separate/vendor/lobipanel.min.css">
    <link rel="stylesheet" href="/css/lib/jqueryui/jquery-ui.min.css">
    <link rel="stylesheet" href="/css/separate/pages/widgets.min.css">

    <link rel="stylesheet" href="/css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="/css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dsmorse-gridster@0.7.0/dist/jquery.gridster.css">
</head>
<body>
    @yield('content')
    <!-- Scripts -->
    <script src="/js/lib/jquery/jquery-3.2.1.min.js"></script>
    <script src="/js/lib/popper/popper.min.js"></script>
    <script src="/js/lib/tether/tether.min.js"></script>
    <script src="/js/lib/bootstrap/bootstrap.min.js"></script>
    <script src="/js/plugins.js"></script>

    <script type="text/javascript" src="/js/lib/jqueryui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/js/lib/lobipanel/lobipanel.min.js"></script>
    <script type="text/javascript" src="/js/lib/match-height/jquery.matchHeight.min.js"></script>
<<<<<<< HEAD
=======
    {{--<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>--}}
    <script>
        $(document).ready(function(){
            try {
                $('.panel').lobiPanel({
                    sortable: true
                }).on('dragged.lobiPanel', function(ev, lobiPanel){
                    $('.dahsboard-column').matchHeight();
                });
            } catch (err) {}
>>>>>>> 793f801a5531cb4c23cee4584284d88e5c525aad

    <script src="js/lib/bootstrap-table/bootstrap-table.js"></script>
	<script src="js/lib/bootstrap-table/bootstrap-table-export.min.js"></script>
	<script src="js/lib/bootstrap-table/tableExport.min.js"></script>
	<script src="js/lib/bootstrap-table/bootstrap-table-init.js"></script>


    <script src="/js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/dsmorse-gridster@0.7.0/dist/jquery.gridster.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/dsmorse-gridster@0.7.0/dist/jquery.gridster.with-extras.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/dsmorse-gridster@0.7.0/dist/jquery.gridster.with-extras.js"></script>
    <script src="/js/main.js"></script>
</body>
</html>
