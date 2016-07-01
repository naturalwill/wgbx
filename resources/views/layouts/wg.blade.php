<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<!--
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
 	 -->
 	 	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    
    <title>GDMU学生网管</title>
	<link rel="stylesheet" href="/libs/bootstrap/3.3.6/css/bootstrap.min.css">
    
    @yield('head')

</head>
<body id="app-layout">
	
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    GDMU-WG
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/network/news') }}">动态</a></li>
                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ url('/baoxiu') }}">报修</a></li>
                    <li><a href="{{ url('/network/status') }}">状态</a></li>
                    <li><a href="{{ url('/network/talk') }}">吐槽</a></li>
                </ul>

            </div>
        </div>
    </nav>

	<div class="container">
    @yield('content')

<br>
<br>
         <div class="row text-center">
         &copy; 2016 <a style="text-decoration: none;" href="{{url('/')}}">GDMU学生网管</a> 
<br />
 Power by <a style="text-decoration: none;" href="http://about.dawnlightning.com">破晓技术团队</a>
         </div>
         
<br>
<br>
        </div>
    <!-- JavaScripts -->
    <script src="/libs/jquery/2.2.4/jquery.min.js" integrity="sha384-rY/jv8mMhqDabXSo+UCggqKtdmBfd3qC2/KvyTDNQ6PcUJXaxK1tMepoQda4g5vB" crossorigin="anonymous"></script>
    <script src="/libs/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
   
    </body>
</html>
