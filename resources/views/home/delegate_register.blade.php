<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"></meta>
    <!-- for internet explorere -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--(the most important line) for mobile first -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sign Up</title>
    <link rel="SHORTCUT ICON" href="/images/received_1295010620582885.png" type="image/x-icon"/>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet"href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet"href="css/animate.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<nav class="navbar navbar-fixed-top wow slideInDown" data-wow-duration="2s">
    <a href="{{route('index')}}"> <img class="logo wow zoomInRight"data-wow-duration="2s"  src="images/received_1295010620582885.png" alt="logo"></a>
</nav>
<div class="step1 col-lg-12">
    <div class="container">
        <div class="row">
            @if(count($errors))
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.
                    <br/>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li style="color: red">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="flash-message">
                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                    @if(Session::has('alert-' . $msg))<p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                    @endif

                @endforeach
            </div> <!-- end .flash-message -->
                <p style="text-align: center; font-size: 25px; font-family: Avenir "> Register as a Delegate</p>
                <br>
            <form  method="post" action="{{route('store_delegate')}}" class="col-md-10 col-xs-push-2" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="row">
                    <div class="form-group col-xs-5 wow flipInX {{ $errors->has('email') ? 'has-error' : '' }}" data-wow-duration="2s" data-wow-delay="1s">
                        <label for="exampleInputName">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputNmae" placeholder="Email" value="{{ old('email') }}" required>

                    </div>
                    <div class="form-group col-xs-5 wow flipInX {{ $errors->has('username') ? 'has-error' : '' }} " data-wow-duration="2s" data-wow-delay="2s">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text"  name="username" class="form-control" id="exampleInputEmail1" placeholder="Username" value="{{ old('username') }}"required>
                    </div>

                </div>

                <div class="row">
                    <div class="form-group col-xs-5 wow flipInX {{ $errors->has('password') ? 'has-error' : '' }}" data-wow-duration="2s" data-wow-delay="1s">

                        <label for="exampleInputName">Password</label>

                        <input type="password" name="password" class="form-control" id="exampleInputNmae" placeholder="password" required>
                    </div>

                    <div class="form-group col-xs-5 wow flipInX {{ $errors->has('confirm_password') ? 'has-error' : '' }}" data-wow-duration="2s" data-wow-delay="3s">
                        <label for="exampleInputPassword1">Confirm Password</label>
                        <input type="password" name="confirm_password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password"  required>

                    </div>
                </div>

                <div class="row">

                    <div class="form-group col-xs-10 wow flipInX" data-wow-duration="2s" data-wow-delay="3s">
                        <label for="exampleInputAge {{ $errors->has('name') ? 'has-error' : '' }}">Full name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputAge" placeholder="your full name as its on your identity card" >
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-xs-5 wow flipInX {{ $errors->has('phone') ? 'has-error' : '' }}" data-wow-duration="2s" data-wow-delay="3s">
                        <label for="exampleInputPassword1">Phone number</label>
                        <input type="number" name="phone" class="form-control" id="exampleInputPassword1" placeholder="Phone" value="{{ old('phone') }}"  required>

                    </div>
                    <div class="form-group col-xs-5 wow flipInX" data-wow-duration="2s" data-wow-delay="3s">
                        <label for="exampleInputAge">Bank number</label>
                        <input type="number" name="bank_number" class="form-control" id="exampleInputAge" placeholder="Bank number" >
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-xs-5 wow flipInX {{ $errors->has('country') ? 'has-error' : '' }}" data-wow-duration="2s" data-wow-delay="3s">
                        <label for="exampleInputPassword1">country</label>
                        <input type="text" name="country" class="form-control" id="exampleInputPassword1" placeholder="Country" value="{{ old('country') }}"  required>

                    </div>
                    <div class="form-group col-xs-5 wow flipInX {{ $errors->has('city') ? 'has-error' : '' }}" data-wow-duration="2s" data-wow-delay="3s">
                        <label for="exampleInputAge">city</label>
                        <input type="text" name="city" class="form-control" id="exampleInputAge" placeholder="City" value="{{ old('city') }}" required>

                    </div>
                </div>

<br><br><br>
                <div class="row">
                    <div class="form-group col-xs-10 wow flipInX" data-wow-duration="2s">
                        <button type="submit" name="submit" class="btn btn-danger col-xs-12">Register</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>



<script src="/js/jquery-1.12.0.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.nicescroll.min.js"></script>
<script src="/js/script.js"></script>
{{--<script src="/js/wow.min.js"></script>--}}
{{--<script>new WOW().init();</script>--}}
</body>
</html>