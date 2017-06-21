<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bus Booking System">
    <meta name="author" content="Clint Arianda">

    <title>Online Ticket Booking</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo e(URL::asset('css/bootstrap.min.css')); ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo e(URL::asset('css/custom.css')); ?>" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo e(route('welcome')); ?>">Online Booking</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            <h1>Welcome To Ticket Booking</h1>
            <p>Conveniently book a seat to your preferred destination from your phone or computer.</p>
        </header>

        <hr>

        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>Destinations</h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">

            <div class="col-md-4 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="<?php echo e(URL::asset('images/pk.jpg')); ?>" alt="">
                    <div class="caption">
                        <h3>Kisumu</h3>
                        <p>Departure- 5:00 PM</p>
                        <p>
                            <a href="<?php echo e(route('bookbus')); ?>" class="btn btn-primary">Book!</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="<?php echo e(URL::asset('images/pk.jpg')); ?>" alt="">
                    <div class="caption">
                        <h3>Malaba</h3>
                        <p>Departure- 6:00 PM</p>
                        <p>
                            <a href="<?php echo e(route('bookbus')); ?>" class="btn btn-primary">Book!</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="<?php echo e(URL::asset('images/pk.jpg')); ?>" alt="">
                    <div class="caption">
                        <h3>Busia</h3>
                        <p>Departure- 7:00 PM</p>
                        <p>
                            <a href="<?php echo e(route('bookbus')); ?>" class="btn btn-primary">Book!</a>
                        </p>
                    </div>
                </div>
            </div>


        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Clint Arianda. 2017.</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="<?php echo e(URL::asset('js/jquery.js')); ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo e(URL::asset('js/bootstrap.min.js')); ?>"></script>

</body>

</html>