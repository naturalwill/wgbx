@extends('layouts.wg')

@section('content')
            <div class="row text-center">
                <h1>GDMU学生网管</h1>
				@if (!empty($attention))
                        <div class="form-group  has-error">
							<span class="help-block">
								<strong>请关注公众号后从微信访问</strong>
							</span>
                        </div>
				@endif
                <div class="title"><img class="img-responsive" style="max-width: 430; max-height: 430;" alt="GDMU学生网管" src="{{asset('img/qrcode-gdmuwg.jpg')}}" /></div>
            </div>
@endsection
