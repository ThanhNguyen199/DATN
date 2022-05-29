<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
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
                        <!-- card front -->
                        <div class="card-front">
                            <div class="center-wrap">
                                <h4 class="heading">Đăng nhập</h4>
                                <form class="login" method="POST" action="{{ URL::to(route('admin_login')) }}">
                                    {!! csrf_field() !!}
                                    <div class="form-group">
                                        <input type="text" name="username" class="form-style" placeholder="Tài khoản">
                                        <i class="input-icon material-icons">perm_identity</i>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-style" placeholder="Mật khẩu">
                                        <i class="input-icon material-icons">lock</i>
                                    </div>
                                    <button class="btn">Đăng nhập</button>
                                </form>
                                <p class="text-center"><a href="{{ URL::to(route('screen_admin_forgot_password')) }}" class="link">Quên mật khẩu</a></p>
                                @if (session('message'))
                                <p>{{session('message')}}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- partial -->
</body>

</html>