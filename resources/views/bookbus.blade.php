<!DOCTYPE html>
<html lang="en" ng-app="seats">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Online Ticket Booking</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ URL::asset('css/custom.css') }}" rel="stylesheet">

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
            <a class="navbar-brand" href="./index.php">Online Booking</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->

        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Page Content -->
<div class="container">
    <!-- Title -->
    <div class="row">
        <div class="col-lg-12 text-center text-danger">
            <h1>Seat Reservation &amp; Ticketing</h1>
        </div>
        <div class="col-lg-12 text-muted text-center">
            Select number of passengers and click on 'Select Seats' button to continue.
        </div>
    </div>
    <!-- /.row -->

    <!-- Page Features -->
    <div class="row text-center">
        <div class="col-xs-6 col-sm-3">
            <div>
                <label id="lblMovie">Name</label>
            </div>
            <div>
                <input id="txtName" placeholder="Enter Your Name"/>
            </div>
        </div>
        <div class="col-xs-6 col-sm-3">
            <div>
                <label id="lblMovie">ID No.</label>
            </div>
            <div>
                <input id="identification" placeholder="Identification number"/>
            </div>
        </div>
        <div class="col-xs-6 col-sm-3">
            <div>
                <label id="lblMovie">Phone No.</label>
            </div>
            <div>
                <input id="phoneNo" placeholder="Phone number"/>
            </div>
        </div>
        <div class="col-xs-6 col-sm-3">
            <div>
                <label id="lblSeatsNo">Number of seats:</label>
            </div>
            <div>
                <select id="ddlSeats">
                    <option value="select">Select</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <div class="row text-center">
        <div class="col-lg-12">
            <button id="btnSelectSeats" class="btn btn-primary" disabled="disabled">Select Seats</button>
        </div>
    </div>
    <div class="row" id="seatsReserve">
        <div id="seatsDiagram" class="col-lg-offset-2 col-lg-6" >
            <table class="tblSeats">
                <tbody>
                <tr>
                    <td class="seatRow">A</td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                </tr>
                <tr>
                    <td class="seatRow">B</td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                </tr>
                <tr>
                    <td class="seatRow">M</td>
                    <td><div class="empty"></div></td>
                    <td><div class="empty"></div></td>
                    <td><div class="empty"></div></td>
                    <td><div class="empty"></div></td>
                    <td><div class="empty"></div></td>
                    <td><div class="empty"></div></td>
                    <td><div class="empty"></div></td>
                    <td><div class="empty"></div></td>
                    <td><div class="empty"></div></td>
                    <td><div class="empty"></div></td>
                    <td><div class="empty"></div></td>
                    <td><div class="seat"></div></td>
                </tr>
                <tr>
                    <td class="seatRow">C</td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                </tr>
                <tr>
                    <td class="seatRow">D</td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                </tr>
                <!--<tr>
                    <td class="seatRow">C</td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="empty"></div></td>
                    <td><div class="empty"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="empty"></div></td>
                    <td><div class="empty"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                </tr>
                <tr>
                    <td class="seatRow">B</td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="empty"></div></td>
                    <td><div class="empty"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="empty"></div></td>
                    <td><div class="empty"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                </tr>
                <tr>
                    <td class="seatRow">A</td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seatDiv red"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="empty"></div></td>
                    <td><div class="empty"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="empty"></div></td>
                    <td><div class="empty"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                </tr>-->
                <tr>
                    <td class="seatRow"></td>
                    <td><div class="empty">1</div></td>
                    <td><div class="empty">2</div></td>
                    <td><div class="empty">3</div></td>
                    <td><div class="empty">4</div></td>
                    <td><div class="empty">5</div></td>
                    <td><div class="empty">6</div></td>
                    <td><div class="empty">7</div></td>
                    <td><div class="empty">8</div></td>
                    <td><div class="empty">9</div></td>
                    <td><div class="empty">10</div></td>
                    <td><div class="empty">11</div></td>
                    <td><div class="empty">12</div></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col-lg-12">
            <p class="text-center screen">Screen</p>
        </div>
        <div class="col-lg-1 col-lg-offset-2">
            <div class="seatDiv white"></div>
        </div>
        <div class="col-lg-2">
            <p>Available Seat</p>
        </div>
        <div class="col-lg-1">
            <div class="seatDiv green"></div>
        </div>
        <div class="col-lg-2">
            <p>Selected Seat</p>
        </div>
        <div class="col-lg-1">
            <div class="seatDiv red"></div>
        </div>
        <div class="col-lg-2">
            <p>Unavailable Seat</p>
        </div>

        <div class="col-lg-12">
            <p><b class="text-uppercase">Selected Seats:</b></p>
            <p class="selectedSeatsList text-primary"></p>
        </div>
        <div class="row text-center">
            <div class="col-lg-12">
                <button id="btnReserve" class="btn btn-primary" disabled="disabled">Make Reservation</button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="tblReserve col-lg-4 col-lg-offset-4">
            <table class="tblReserve">
                <tbody>
                <th>Name</th>
                <th>ID Number</th>
                <th>Phone Number</th>
                <th>No. of seats</th>
                <th>Seats Number(s)</th>
                <th>Cost</th>
                </tbody>
            </table>
            <div class="row text-center" style="margin-top: 10px;">
                <div class="col-lg-12">
                    <p>Pay <script type="text/javascript">reservedUser.count</script>x 700</p>
                    <a href="#" id="payForSeat" class="btn btn-primary">Proceed To Payment</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-offset-1">

        </div>
    </div>
    
    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; Clint Arianda</p>
            </div>
        </div>
    </footer>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="{{ URL::asset('js/jquery.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('js/booking.js') }}"></script>

</body>

</html>
