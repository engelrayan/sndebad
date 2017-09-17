<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"></meta>
    <!-- for internet explorere -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--(the most important line) for mobile first -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Main Page</title>
    <link rel="SHORTCUT ICON" href="/images/received_1295010620582885.png" type="image/x-icon"/>
    <!-- you don't need to add normalize.css in because it's included in bootstrap -->
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet"href="/css/animate.css">
    <!--[if lt IE 9]>
    <script src="/js/html5shiv.min.js"></script>
    <script src="/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<nav class="navbar navbar-fixed-top wow slideInDown" data-wow-duration="2s">

    <a href="{{route('index')}}"> <img class="logo wow zoomInRight"data-wow-duration="2s"  src="images/received_1295010620582885.png" alt="logo"></a>

    <div class="buttons">
        <a href="{{route('get_delegate_register')}}"><button class="btn btn-danger   wow slideInDown" style="font-size: 15px" >Join us</button></a>
        <a href="{{route('company_register')}}"><button class="btn btn-primary wow slideInDown" data-wow-delay="1s" style="font-size: 15px">Create profile</button>
        </a>
    </div>

</nav>
@if ($error = $errors->first('password'))
    <br><br>
    <div class="alert alert-danger">
        {{ $error }}
    </div>
@endif
<div class="container">
{{--<div align="center" class="embed-responsive embed-responsive-16by9">--}}
<div class="embed-responsive embed-responsive-16by9" data-wow-duration="5s" id="Log_in" >
    <video autoplay loop class="embed-responsive-item">
        <source src="/video/video.mp4" type="video/mp4">

        Your browser does not suupport video technology
    </video>
</div>
</div>
<div class="on_video col-lg-3 col-md-4 col-sm-6 col-xs-4 col-lg-push-5 wow flipInY" data-wow-duration="5s"data-wow-delay="1s">
    <h1 class="text-center">What do you love?</h1>
    <h1 class="text-center">Do more</h1>
    <a href="#Log_in"><button class="btn btn-success col-lg-12 col-md-12 col-sm-12 col-xs-12" data-wow-duration="2s" style="font-family:Dialog; font-size: 20px">Login</button></a>
<br><br><br><br><br>
    <a href=""><button class="btn btn-primary col-lg-12 col-md-12 col-sm-12 col-xs-12" data-wow-duration="2s" style="font-family:Dialog; font-size: 20px" >Skip</button></a>

</div>


<div class="Log_in col-lg-12 wow flipInX" data-wow-duration="5s">
    <span class="close">close</span>
    <form class="col-lg-4 col-lg-push-4" method="post" action="{{route('user_login')}}">
        {{csrf_field()}}
        <div class="form-group text-center wow flipInX" data-wow-duration="5s" data-wow-delay="2s">
            <h1>Log in</h1>
        </div>

        <div class="form-group wow flipInX {{ $errors->has('email') ? ' has-error' : '' }}" data-wow-duration="5s" data-wow-delay="3s">
            <label for="exampleInputEmail"><span>Email address</span></label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail" placeholder="Email" value="{{ old('email') }}" required>

        </div>

        <div class="form-group wow flipInX {{ $errors->has('password') ? ' has-error' : '' }}" data-wow-duration="5s" data-wow-delay="4s">
            <label for="exampleInputPassword"><span>Password</span></label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="Password" required>

        </div>
        <div class="checkbox col-xs-12" style="color: white;font-size: 15px">

            <label>
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} > Remember me
            </label>

            <a href="#" class="forget-mail" style="color: white; margin-left: 90px; font-size: 16px">Forget your password ?
            </a>

        </div>
        <button type="submit" class="btn btn-primary col-lg-12 " data-wow-duration="5s" data-wow-delay="5s">Sign in</button>

        <br><br><br><br><br>
      <p style="font-size: 20px;color: white; text-align: center; font-family: 'Arial Black' ">  Or have a new account </p>
       <a href="{{route('get_user_register')}}"> <button type="button" class="btn btn-primary col-lg-12 " >Sign Up</button></a>


    </form>
</div>

<script src="/js/jquery-1.12.0.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.nicescroll.min.js"></script>
<script src="/js/script.js"></script>
<script>new WOW().init();</script>
</body>
</html>