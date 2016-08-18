<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>SB Admin - Bootstrap Admin Template</title>

        <!-- Bootstrap Core CSS -->
        <link href="{{ url('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="{{url('sb-admin.css')}}" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="{{url('bootstrap/css/plugins/morris.css')}}" rel="stylesheet">
        <link href="{{url('reset.css')}}" rel="stylesheet">
        <link href="{{url('style.css')}}" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="{{url('bootstrap/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

    </head>

    <body style="background-color:#fff;">


        <div class="container-fluid">

            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                        <form class="login" action="{{ url('login') }}" method="POST">
                        {!! csrf_field() !!}
                            <fieldset>

                                <legend class="legend">Login</legend>

                                <div class="input">
                                    <input  name="email" type="email" placeholder="Email" required />
                                    <span><i class="fa fa-envelope-o"></i></span>
                                </div>

                                <div class="input">
                                    <input name="password" type="password" placeholder="Password" required />
                                    <span><i class="fa fa-lock"></i></span>
                                </div>

                                <button type="submit" class="submit"><i class="fa fa-long-arrow-right"></i></button>
                                <br><br>

                                <div class="text-center">
                                    <label>Creat an account <a href="register.html" style="text-decoration:none">Register Now</a></label>
                                </div>


                            </fieldset>

                            <div class="feedback">
                                login successful <br />
                                redirecting...
                            </div>

                        </form>
                    </div>
                </div>
            </div>



        </div>
        <!-- /.container-fluid -->


        <!-- jQuery -->
        <script src="{{url('bootstrap/js/jquery.js')}}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{url('js/bootstrap.min.js')}}"></script>

        <!-- Morris Charts JavaScript -->
        <script src="{{url('bootstrap/js/plugins/morris/raphael.min.js')}}"></script>
        <script src="{{url('bootstrap/js/plugins/morris/morris.min.js')}}"></script>
        <script src="{{url('bootstrap/js/plugins/morris/morris-data.js')}}"></script>

        <script src="{{url('bootstrap/js/index.js')}}"></script>

    </body>

</html>
