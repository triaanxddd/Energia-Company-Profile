<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

    <link href="{{ asset('template-company') }}/css/bootstrap.min.css" rel="stylesheet">

    <link href="{{ asset('template-company') }}/css/bootstrap-icons.css" rel="stylesheet">

    <link href="{{ asset('template-company') }}/css/templatemo-tiya-golf-club.css" rel="stylesheet">
    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
            }
        .h-custom {
            height: calc(100% - 73px);
        }
        @media (max-width: 450px) {
        .h-custom {
            height: 100%;
        }
        }
    </style>
</head>
<body>
<section class="vh-100">
  <div class="container-fluid h-custom">

    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="/login" method="post">
            @csrf
            @if(session()->has('danger'))
                <div class="alert alert-danger" role="alert">
                    {{ session('danger') }}
                </div>
            @endif
          <!-- Email input -->
          <div class="form-outline mb-4">
                <input type="email" id="form3Example3" class="form-control form-control-lg" @if(isset($_COOKIE["email"])) value="{{ $_COOKIE['email'] }}" @endif
                placeholder="Enter a valid email address" name="email"/>
                <label class="form-label @error('email') is-invalid @enderror" for="form3Example3">Email address</label>
                @error('email')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                @enderror
            </div>

            <!-- Password input -->
            <div class="form-outline mb-3">
                <input type="password" id="form3Example4" class="form-control form-control-lg" @if(isset($_COOKIE["password"])) value="{{ $_COOKIE['password'] }}" @endif
                placeholder="Enter password" name="password"/>
                <label class="form-label @error('password') is-invalid @enderror" for="form3Example4" >Password</label>
                @error('password')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="d-flex justify-content-between align-items-center">
                <!-- Checkbox -->
                <div class="form-check mb-0">
                <input class="form-check-input me-2" type="checkbox" value="true" name="remember" @if(isset($_COOKIE["email"])) checked @endif id="form2Example3" />
                <label class="form-check-label" for="form2Example3">
                    Remember me
                </label>
                </div>
                <!-- <a href="#!" class="text-body">Forgot password?</a> -->
            </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
          </div>

        </form>
      </div>
    </div>
  </div>
  <div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      Copyright © 2020. All rights reserved.
    </div>
    <!-- Copyright -->

  </div>
</section>
</body>
</html>