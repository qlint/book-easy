@extends('main')
@section('title','Book Bus')
@section('content')

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
                <input id="txtName" placeholder="Enter Your Name"/>
            </div>
        </div>
        <div class="col-xs-6 col-sm-3">
            <div>
                <label id="lblMovie">ID No.</label>
                <input placeholder="Identification number"/>
            </div>
        </div>
        <div class="col-xs-6 col-sm-3">
            <div>
                <label id="lblMovie">Phone No.</label>
                <input placeholder="Phone number"/>
            </div>
        </div>
        <div class="col-xs-6 col-sm-3">
            <div>
                <label id="lblSeatsNo">Number of seats:</label>
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
                    <td class="seatRow">G</td>
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
                    <td class="seatRow">F</td>
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
                    <td class="seatRow">E</td>
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
                    <td class="seatRow">D</td>
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
                    <td class="seatRow"></td>
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
                    <td><div class="empty"></div></td>
                    <td><div class="empty"></div></td>
                    <td><div class="empty"></div></td>
                    <td><div class="empty"></div></td>
                    <td><div class="empty"></div></td>
                    <td><div class="empty"></div></td>
                    <td><div class="empty"></div></td>
                    <td><div class="empty"></div></td>
                    <td><div class="empty"></div></td>
                </tr>
                <tr>
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
                </tr>
                <tr>
                    <td class="seatRow"></td>
                    <td><div class="empty">1</div></td>
                    <td><div class="empty">2</div></td>
                    <td><div class="empty">3</div></td>
                    <td><div class="empty">4</div></td>
                    <td><div class="empty">5</div></td>
                    <td><div class="empty">6</div></td>
                    <td><div class="empty"></div></td>
                    <td><div class="empty"></div></td>
                    <td><div class="empty">7</div></td>
                    <td><div class="empty">8</div></td>
                    <td><div class="empty">9</div></td>
                    <td><div class="empty">10</div></td>
                    <td><div class="empty"></div></td>
                    <td><div class="empty"></div></td>
                    <td><div class="empty">11</div></td>
                    <td><div class="empty">12</div></td>
                    <td><div class="empty">13</div></td>
                    <td><div class="empty">14</div></td>
                    <td><div class="empty">15</div></td>
                    <td><div class="empty">16</div></td>
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
        <div class="col-lg-4 col-lg-offset-4">
            <table class="tblReserve">
                <tbody>
                <th>Name</th>
                <th>No. of seats</th>
                <th>Seats Number(s)</th>
                </tbody>
            </table>
        </div>
        <div class="col-lg-4 col-md-offset-1">

        </div>
    </div>
    @endsection