<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>GDMU网络故障申报</title>
		<link rel="stylesheet" href="https://libs.orgtree.cn/bootstrap/3.3.6/css/bootstrap.min.css">
	</head>
    <body>
	<div class="container">
<br>
		<h2>GDMU网络状况</h2>
<br>
<div class="alert alert-info" role="alert">上次检查时间: {{$created_at}}</div>

@foreach ($info as $data)

<div class="panel panel-default">
  <div class="panel-heading">{{$data->place}} </div>
  <div class="panel-body">
  @foreach ($data->duidie as $dd)
    @if ($dd->errcode === 0)
	    <div class="alert alert-success" role="alert">{{$dd->ddname}}: {{$dd->status}}</div>
	@else
	    <div class="alert alert-danger" role="alert">{{$dd->ddname}}: {{$dd->status}}</div>
	@endif
  @endforeach
  </div>
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
		<script src="https://libs.orgtree.cn/jquery/2.2.4/jquery.min.js"></script>
		<script src="https://libs.orgtree.cn/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		
    </body>
</html>