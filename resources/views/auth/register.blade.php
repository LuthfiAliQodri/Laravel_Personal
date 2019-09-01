<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register - Blog_Luthfi</title>
    <meta charset="UTF-8">
    <!-- css -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link href="img/icon.png" rel="shortcut icon"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/login_kedua.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
<!--===============================================================================================-->
</head>
<body>
    
    <div class="limiter">
        <div class="container-login100" style="background-image: url('img/back.jpg');">
            <div class="wrap-login100">
                <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                @csrf
                    <span class="login100-form-logo">
                        <img src="img/island.png" alt="" width="120">
                    </span>

                    <span class="login100-form-title p-b-34 p-t-27">
                        Register
                    </span>

                    <div class="wrap-input100 validate-input" data-validate = "Enter username">
                        <input id="name" type="text" class="input100 form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder=" Gofar Haliman">
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                        
                        @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter email">
                        <input id="email" type="email" class="input100 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder=" Gofar@gmail.com">
                        <span class="focus-input100" data-placeholder="&#128386;"></span>
                        
                        @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                  </span>
                                @endif
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">

                        <input id="password" type="password" class="input100 form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder=" Input Password">
                        <span class="focus-input100" data-placeholder="&#xf191;"></span>
                        
                        @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                    </div>

                    <div class="wrap-input100 validate-input">

                    <input id="membership" type="hidden" value="1" name="membership" required>
                        
                        
                        @if ($errors->has('membership'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('membership') }}</strong>
                                    </span>
                                @endif
                    </div>

                     <div class="wrap-input100 validate-input" data-validate="Confirm Password">
                        <input id="password-confirm" type="password" class="input100 form-control" name="password_confirmation" required placeholder=" Confirm Password">
                        <span class="focus-input100" data-placeholder="&#xf191;"></span>
                    </div>


                    <div class="container-login100-form-btn">
                    <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>   
                    </div>
                    </div>
                    

                </form>
            </div>
        </div>
    </div>
    

    <div id="dropDownSelect1"></div>
    
<!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="js/main.js"></script>
    <script src="js/mainn.js"></script>

</body>
</html>