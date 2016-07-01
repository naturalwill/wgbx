@extends('layouts.wg')

@section('content')
		<h2>畅所欲言</h2>
<br>
<!-- 多说评论框 start -->
	<div class="ds-thread" data-thread-key="network/talk" data-title="畅所欲言" data-url="https://wg.gdmu.orgtree.cn/network/talk"></div>
<!-- 多说评论框 end -->
<!-- 多说公共JS代码 start (一个网页只需插入一次) -->
<script type="text/javascript">
var duoshuoQuery = {short_name:"gdmuwg"};
	(function() {
		var ds = document.createElement('script');
		ds.type = 'text/javascript';ds.async = true;
		ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
		ds.charset = 'UTF-8';
		(document.getElementsByTagName('head')[0] 
		 || document.getElementsByTagName('body')[0]).appendChild(ds);
	})();
	</script>
<!-- 多说公共JS代码 end -->

@endsection