<!DOCTYPE HTML>
<html class="no-js">
<head>
    <!-- Basic Page Needs
      ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>{{trans('app.name')}} - @yield('title')</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <!-- Mobile Specific Metas
      ================================================== -->
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="format-detection" content="telephone=no">

    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>

    <!-- Latest compiled and minified CSS -->
    {!! HTML::style('css/bootstrap.min.css') !!}
    <!-- Optional theme -->
    {!! HTML::style('css/bootstrap-theme.min.css') !!}
    <!-- Font awesome-->
    {!! HTML::style('css/font-awesome.min.css') !!}

    <!-- Styles-->
    {!! HTML::style('css/all.css') !!}

</head>
<body>

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
            <a class="navbar-brand" href="#">{{trans('app.name')}}</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <form class="navbar-form navbar-right">
                <div class="form-group">
                    <input type="text" placeholder="Email" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Password" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">{{trans('user.sign_in')}}</button>
            </form>
        </div>
        <!--/.navbar-collapse -->
    </div>
</nav>

<div class="container">
        <div class="row">
            <div class="col-sm-9">
                @yield('content')
            </div>
            <!-- .aside -->
                @include('blocks.aside')
    </div>
</div>
<!-- .container -->

<!-- #footer -->
@include('blocks.footer')


<!-- Latest  -->
{!! HTML::script('js/jquery.min.js') !!}
{!! HTML::script('js/bootstrap.min.js') !!}

<script type="text/javascript">
    var _globalObj = {!! json_encode(array('_token' => csrf_token()))  !!}
</script>
@yield('js')
</body>
</html>
