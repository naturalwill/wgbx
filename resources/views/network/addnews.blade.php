@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">发布最新动态</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/network/news/add') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('subject') ? ' has-error' : '' }}">
                            
                            <label for="subject" class="col-md-4 control-label">标题</label>

                            <div class="col-md-6">
	                            
				                <input class="form-control" name="subject" type="text"  value="{{ old('subject') }}">
								@if ($errors->has('subject'))
									<span class="help-block">
										<strong>{{ $errors->first('subject') }}</strong>
									</span>
								@endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('playtype') ? ' has-error' : '' }}">
                            
                            <label for="playtype" class="col-md-4 control-label">展示状态</label>

                            <div class="col-md-6">
                            
				                <select class="form-control" name="playtype" id="sushe">
									<option selected="selected" value="alert-info">info</option>
									<option value="alert-success">success</option>
									<option value="alert-warning">warning</option>
									<option value="alert-danger">danger</option>
								</select>
								@if ($errors->has('"playtype"'))
									<span class="help-block">
										<strong>{{ $errors->first('playtype') }}</strong>
									</span>
								@endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('msg') ? ' has-error' : '' }}">
                            <label for="msg" class="col-md-4 control-label">内容</label>

                            <div class="col-md-6">
                                
								<textarea name="msg"  rows="8"  class="form-control" placeholder="" >{{ old('msg') }}</textarea>
								@if ($errors->has('msg'))
									<span class="help-block">
										<strong>{{ $errors->first('msg') }}</strong>
									</span>
								@endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> 发布
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
