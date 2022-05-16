<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <!--========== Material Icons ==========-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="{{asset('public/be/css/login.css')}}">   
</head>
<body>
    <div class="form">
      <div class="text-center">
        <label for="reg-log"></label>
        <div class="card-3d-wrap">
          <div class="card-3d-wrapper">
            <!-- card front -->
            <div class="card-front">
              <div class="center-wrap">
                <h4 class="heading">Log In</h4>
                <div class="form-group">
                  <input type="text" class="form-style" placeholder="Username">
                  <i class="input-icon material-icons">alternate_email</i>
                </div>
                <div class="form-group">
                  <input type="password" class="form-style" placeholder="Password">
                  <i class="input-icon material-icons">lock</i>
                </div>
                <a href="#" class="btn">Login</a>
                <p class="text-center"><a href="{{URL::to('/forgot-password')}}" class="link">Forgot your password</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>