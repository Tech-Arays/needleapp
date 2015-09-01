@extends('layouts.admin-login')
@section('content')
<div class="login-box">
	<div class="login-logo">
	  <a href="{{url('/')}}"><b>NeedleFree</b>Admin</a>
	</div><!-- /.login-logo -->
	<div class="login-box-body">
	  <p class="login-box-msg">Sign in to start your session</p>
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

	  <form action="{{url('/admin/login')}}" method="post">
	    <div class="form-group has-feedback">
	      <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}"/>
	      <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
	    </div>
	    <div class="form-group has-feedback">
	      <input type="password" name="password" class="form-control" placeholder="Password"/>
		  <input type="hidden" name="_token" value="{{ csrf_token() }}">
	      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
	    </div>
	    <div class="row">
	      <div class="col-xs-6">    
	        <div class="checkbox icheck">
	          <label>
	            <input type="checkbox" name="remember"> Remember Me
	          </label>
	        </div>                        
	      </div>
	      <!-- /.col -->
	      <div class="col-xs-6">
	        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
	      </div><!-- /.col -->
	    </div>
	  </form>

	  <!-- <a href="">I forgot my password</a><br> -->

</div><!-- /.login-box-body -->
</div><!-- /.login-box -->

@endsection