<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <title>MAP</title>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/jumbotron-narrow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" >
    <link rel="stylesheet" type="text/css" href="carousel.css">
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="{{ asset('assets/js/ie-emulation-modes-warning.js') }}"></script>
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<style>
#map {
    height: 700px;
}
html, body {
    height: 100%;
    margin: 0;
    padding: 0;
}
</style>
</head>

<body>
    <div class="container">
        <div class="nav navbar">
            <div class="header ">
                <nav>
                    <ul class="nav nav-pills pull-right">
                        <li role="presentation" ><a href="{{url('/')}}">Home</a></li>
                        <li role="presentation"><a href="{{ url ('/nmap')}}">Map</a></li>
                    </ul>
                </nav>
                <h3 class="text-muted"><a href="#">ADS</a></h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    @yield('isi')
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/map/jquery-1.9.1.min.js') }}"></script>
    <script src="{{ asset('assets/map/jquery.addressPickerByGiro.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAogXD-AHrsmnWinZIyhRORJ84bgLwDPpg&sensor=false&language=id"></script>
    <script src="{{ asset('assets/js/ie10-viewport-bug-workaround.js') }}"></script>
    @yield('script')
</body>
</html>

