@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			@if(session('status'))
				<div class="alert alert-danger">
					{{session('status')}}
				</div>
			@endif
			<div class="panel panel-default">
				<div class="panel-heading form-top">Login</div>
				<div class="panel-body" style="padding: 40px;">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-Mail Address">
						</div>

						<div class="form-group">
							<input type="password" class="form-control" name="password" placeholder="Password">
						</div>

						<div class="form-group">
							<div class="checkbox">
								<label>
									<input type="checkbox" name="remember"> Remember Me
								</label>
							</div>
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-primary">Login</button>

							<a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
