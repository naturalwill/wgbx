<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>GDMU学生网管</title>
		<link rel="stylesheet" href="/libs/bootstrap/3.3.6/css/bootstrap.min.css">
	</head>
    <body>
	<div class="container">
<br>
		<h2>最新动态</h2>
<br>
@foreach ($info as $data)

<div class="panel panel-default">
  <div class="panel-heading">{{$data->subject}} </div>
  <div class="panel-body {{$data->playtype}}">
<!-- 	    <div class="alert {{$data->playtype}} " role="alert"> -->
	    	{{$data->msg}}
	    <br /><span class="help-block text-right">
						
	        更新时间：{{$data->updated_at}}
					</span>
	    </div>
<!--   </div> -->
</div>
@endforeach

         <div class="row text-center">
         &copy; 2016 <a style="text-decoration: none;" href="{{url('/')}}">GDMU学生网管</a> 
<br />
 Power by <a style="text-decoration: none;" href="http://about.dawnlightning.com">破晓技术团队</a>
         </div>
         
<br>
<br>
        </div>
		<script src="/libs/jquery/2.2.4/jquery.min.js"></script>
		<script src="/libs/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		
    </body>
</html>