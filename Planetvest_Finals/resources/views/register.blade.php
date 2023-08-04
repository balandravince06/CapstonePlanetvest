<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login to PlanetVest</title>
  <link rel="stylesheet" href="{{ asset('assets/css/register.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
</head>
<body>

@extends('layout')
@section('contents')

      <!----------------------- Main Container -------------------------->
     <div class="container d-flex justify-content-center align-items-center min-vh-100">
    <!----------------------- Login Container -------------------------->
       <div class="row border rounded-5 p-3 bg-white shadow box-area">
    <!--------------------------- Left Box ----------------------------->
       <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #0e7c49;">
           <div class="featured-image mb-3">
            <img src=" {{ asset('assets/images/farmer.png')}}" class="img-fluid" style="width: 250px;">
           </div>
           <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Join Us</p>
           <small class="text-white text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">A crowdfunding platform for farmers.</small>
       </div> 
    <!-------------------- ------ Right Box ---------------------------->
        
       <div class="col-md-6 right-box">
          <div class="row align-items-center">
                <div class="header-text mb-4">
                     <h2>Register to PlanetVest!</h2>
                </div>
                <form action="{{ route('register-user') }}" method="POST">
                  @if(Session()->has('success'))
                  <div class="alert alert-success">{{Session()->get('success')}}</div>
                  @endif
                  @if(Session()->has('fail'))
                  <div class="alert alert-danger">{{Session()->get('fail')}}</div>
                  @endif
                  @csrf
                <div class="input-group mb-2">
                    <input type="email" class="form-control form-control-lg bg-light fs-6" placeholder="Email address" name="email" required/>
                </div>
                <div class="input-group mb-2">
                    <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="First Name" name="fname" required/>
                </div>
                <div class="input-group mb-2">
                    <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Last Name" name="lname" required/>
                </div>
                <div class="input-group mb-2">
                    <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password" name="password" id="passwrd" required/>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Confirm Password" name="confirm_password" id="passwrd"  required/>
                </div>
                <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="showPasswordCheckbox" onchange="togglePasswordVisibility()"/>
                        <label for="formCheck" class="form-check-label text-secondary"><small>Show Password</small></label>
                    </div>
                <div class="input-group mb-3">
                    <button type="submit" class="btn btn-lg btn-success w-100 fs-6">Register</button>
                </div>
                </form>
                <div class="input-group mb-3">
                    <button class="btn btn-lg btn-light w-100 fs-6"><img src=" {{ asset('assets/images/google.png')}} " style="width:20px" class="me-2"><small>Sign Up with Google</small></button>
                </div>
                <div class="row">
                    <small>Already have an account?<a href="login">Sign In</a></small>
                </div>
          </div>
       </div> 
      </div>
    </div>
@endsection

<script>
    function togglePasswordVisibility() {
      const passwordInput = document.getElementById('password');
      const showPasswordCheckbox = document.getElementById('showPasswordCheckbox');
      
      if (showPasswordCheckbox.checked) {
        passwordInput.type = 'text';
      } else {
        passwordInput.type = 'password';
      }
    }
  </script>
</body>
</html>