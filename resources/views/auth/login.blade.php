<!DOCTYPE html>
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
    <title>Admin login</title>
<style type="text/css">
        body {
          margin: 0;
          padding: 0;
          background-color: #17a2b8;
          height: 100vh;
        }
        #login .container #login-row #login-column #login-box {
          margin-top: 120px;
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
</head>

<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">Travel Caste Bangladesh</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" method="POST" action="{{ route('login') }}">
                              @csrf

                            <h3 class="text-center text-info">Login</h3>

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

                            <!--User name-->
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus>

                            </div>

                            <!--Password-->
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="current-password">

                            </div>

                            <!--Remember me-->
                            <div class="form-group">
                                
                            <!--Submit-->
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                            <!--Submit-->
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>