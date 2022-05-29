<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Forgot password</title>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'>
    <!--========== Material Icons ==========-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="{{asset('public/be/css/login.css')}}">

</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="form">
        <div class="text-center">
            <label for="reg-log"></label>
            <div class="card-3d-wrap">
                <div class="card-3d-wrapper">
                    <!-- card back -->
                    <div class="card-front">
                        <div class="center-wrap">
                            <form class="login" method="POST" action="{{ URL::to(route('admin_forgot_password')) }}">
                                {!! csrf_field() !!}
                                <h4 class="heading">Admin</h4>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-style" placeholder="Your Email">
                                    <i class="input-icon material-icons">alternate_email</i>
                                </div>
                                <a href="{{ URL::to(route('screen_admin_login')) }}" class="button login__submit btn">
                                    <i class="button__icon fas fa-chevron-left"></i>
                                </a>
                                <button type="submit" class="button login__submit btn">
                                    <span class="button__text">Send mail</span>
                                </button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- partial -->


</body>

</html>