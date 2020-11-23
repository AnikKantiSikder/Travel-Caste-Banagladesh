@extends('Frontend.Layouts.master')
@section('content')
	<style type="text/css">
		body {
		  margin: 0;
		  padding: 0;
		  background: -webkit-linear-gradient(left, #78e4d0, #ace5da);
		  height: auto;
		}
		#login .container #login-row #login-column #login-box {
		  margin-top: 40px;
		  margin-bottom: 100px;
		  max-width: 600px;
		  height: auto;
		  border: 1px solid #9C9C9C;
		  background-color: #EAEAEA;
		}
		#login .container #login-row #login-column #login-box #login-form {
		  padding: 20px;
		}
		#login .container #login-row #login-column #login-box #login-form #register-link {
		  margin-top: -85px;
		}
	</style>

	<body>
        <div id="login">
	        <div class="container">
	            <div id="login-row" class="row justify-content-center align-items-center">
	                <div id="login-column" class="col-md-6">
	                    <div id="login-box" class="col-md-12">
	                        <form id="login-form" class="form" action="{{ route('login') }}" method="post">
	                        	@csrf

	                        	@if ($errors->any())
                                <div class="alert alert-danger alert-dismissible">
                                   <button type="button" class="close" data-dismiss="alert">&times;</button>
                                   @foreach ($errors->all() as $error)
                                       <strong>{{$error}}</strong><br>
                                   @endforeach
                                   
                                </div>
                            	@endif

	                            @if (Session::get('message'))
	                                <div class="alert alert-danger alert-dismissible">
	                                   <button type="button" class="close" data-dismiss="alert">&times;</button>
	                                   <strong>{{Session::get('message')}}</strong>
	                                </div>
	                            @endif

	                            <h3 class="text-center text-info">Login</h3>

	                            <div class="form-group">
	                                <label for="email" class="text-info">Email:</label><br>
	                                <input type="email" name="email" id="email" class="form-control">
	                            </div>
	                            <div class="form-group">
	                                <label for="password" class="text-info">Password:</label><br>
	                                <input type="password" name="password" id="password" class="form-control">
	                            </div>

	                            
	                            <div class="form-group">
	                                <input type="submit" name="submit" class="btn btn-info btn-md"
	                                value="Log in"><br><br>
	                                <i class="fa fa-user"></i> No account yet?
	                                <a href="{{ route('customer.signup') }}"><span>Create account</span></a>
	                            </div><br>
	                        </form>
	                    </div>
	                </div>
	            </div>
	        </div>
        </div>
</body>

@endsection