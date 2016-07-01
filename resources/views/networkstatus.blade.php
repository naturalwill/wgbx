@extends('layouts.wg')

@section('content')
		<h2>GDMU网络状况</h2>
<br>
<div class="alert alert-info" role="alert">上次更新时间: {{$created_at}}</div>

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

@endsection