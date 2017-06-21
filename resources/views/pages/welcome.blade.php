@extends('main')
@section('title','Home')
@section('content')

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
                    <img src="{{ URL::asset('images/pk.jpg') }}" alt="">
                    <div class="caption">
                        <h3>Kisumu</h3>
                        <p>Departure- 5:00 PM</p>
                        <p>
                            <a href="./index.php/bookbus" class="btn btn-primary">Book!</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="{{ URL::asset('images/pk.jpg') }}" alt="">
                    <div class="caption">
                        <h3>Malaba</h3>
                        <p>Departure- 6:00 PM</p>
                        <p>
                            <a href="./index.php/bookbus" class="btn btn-primary">Book!</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="{{ URL::asset('images/pk.jpg') }}" alt="">
                    <div class="caption">
                        <h3>Busia</h3>
                        <p>Departure- 7:00 PM</p>
                        <p>
                            <a href="./index.php/bookbus" class="btn btn-primary">Book!</a>
                        </p>
                    </div>
                </div>
            </div>


        </div>
        <!-- /.row -->

        <hr>
        @endsection