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
		<h2>GDMU网络报修</h2>
            <form action="{{url('baoxiu')}}" method="post">
            {{ csrf_field() }}
<br>
<br>
                <input class="form-control" name="stunum" type="text" placeholder="学号">
<br>
<br>
                <input class="form-control" name="stuname" type="text" placeholder="姓名">
<br>
<br>
                <input class="form-control" name="phone" type="text" placeholder="联系电话">
<br>
<br>
                <input class="form-control" name="phone2" type="text" placeholder="短号（可选）">
<br>
<br>
                <select class="form-control" name="sushe">
					<option selected="selected" value="0">宿舍楼</option>
					<option value="东莞1栋">东莞1栋</option>
					<option value="东莞2栋">东莞2栋</option>
					<option value="东莞3栋">东莞3栋</option>
					<option value="东莞4栋">东莞4栋</option>
					<option value="东莞5栋">东莞5栋</option>
					<option value="东莞6栋">东莞6栋</option>
					<option value="东莞7栋">东莞7栋</option>
					<option value="东莞8栋">东莞8栋</option>
					<option value="东莞9栋">东莞9栋</option>
					<option value="东莞10栋">东莞10栋</option>
					<option value="东莞11栋">东莞11栋</option>
					<option value="东莞12栋">东莞12栋</option>
					<option value="东莞13栋">东莞13栋</option>
					<option value="东莞14栋">东莞14栋</option>
					<option value="东莞15栋">东莞15栋</option>
					<option value="东莞留1">东莞留1</option>
					<option value="东莞留2">东莞留2</option>
					<option value="湛江1栋">湛江1栋</option>
					<option value="湛江2栋">湛江2栋</option>
					<option value="湛江医务楼">湛江医务楼</option>
					<option value="东莞16栋">东莞16栋</option>
					<option value="湛江3栋">湛江3栋</option>
					<option value="湛江4栋">湛江4栋</option>
					<option value="湛江5栋">湛江5栋</option>
					<option value="湛江6栋">湛江6栋</option>
					<option value="湛江7栋">湛江7栋</option>
					<option value="湛江8栋">湛江8栋</option>
				</select>
<br>
<br>

				<div class="row">
	                <div class="col-xs-8" >
	                <input class="form-control" name="fangjian" type="text" placeholder="房间号（3位数字）">
	                </div><div class="col-xs-4" >
	                <select class="form-control" name="port" >
						<option selected="selected" value="0">端口号</option>
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="C">C</option>
						<option value="D">D</option>
	                </select></div>
	        	</div>
<br>
<br>
				
				<textarea name="info"  rows="8"  class="form-control" placeholder="故障情况描述，简要介绍一下故障情况，如：错误代码等"></textarea>
<br>
<br>
				
				<input class="form-control btn btn-default" type="submit">
<br>
<br>
                
            </form>
<br>
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