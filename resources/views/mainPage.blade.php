@extends('layouts.app')
@section('content')
<default-component>
</default-component>
    <!-- <div class="container">
        <div class="card">
            <div class="card-header text-center">
                Hybrid Electrostance
            </div>
            <div class="panel">
                <div class="card-body text-center">
                    <label for="timeAtdevice">Time At Device: </label>
                    <input id="timeAtdevice" type="date" value="<?php echo date("Y-m-d");?>">
                    <label for="systemTime">System Time: </label>
                    <input id="systemTime" type="date" value="<?php echo date("Y-m-d");?>">
                </div>
            </div>
            <br>
            <div class="h3 text-center">State of the system</div>
            <br>
            <div class="panel">
                <div class="col-md-12 row">
                    <div class="col-md-3">
                        <label for="">SOC (AKB) (%)</label>
                        <input type="text" style="border: 1px solid black" value="" readonly>
                    </div>
                    <div class="col-md-3">
                        <label for="">Activate Invertor</label>
                        <input type="text" style="border: 1px solid black" value="" readonly>
                    </div>
                    <div class="col-md-3">
                        <label for="">Current Charge FE (A)</label>
                        <input type="text" style="border: 1px solid black" value="" readonly>
                    </div>
                    <div class="col-md-3">
                        <label for="">AKB Percent charge</label>
                        <input type="text" style="border: 1px solid black" readonly>
                    </div>
                </div>
            </div>

            <br>
            <br>
            <br>
            <div class="h3 text-center">System properties</div>
            <div class="panel" style="padding-left: 180px;">
                <div class="col-md-12 row text-center" style="margin-left: 10px;">
                    <label for="minChargeCurrent">Minimal Charge Current</label>
                    <div class="col-md-3">
                        <input id="minChargeCurrent" type="text" style="border: 1px solid black">
                    </div>
                    <div class="col-md-6">
                        <input type="button" class="btn btn-default" value="Download" style="border: 1px solid black; padding: 2px;">
                    </div>
                </div>
                <br>
                <div class="col-md-12 row" style="margin-left: 10px;">
                    <label for="minChargeCurrent" class="col-md-1">Jan</label>
                    <div class="col-md-3">
                        <input id="minChargeCurrent" type="text" style="border: 1px solid black">
                    </div>
                    <div class="col-md-3">
                        <input id="minChargeCurrent" type="text" style="border: 1px solid black">
                    </div>
                    <div class="col-md-4">
                        <input type="button" class="btn btn-default" value="Download" style="border: 1px solid black; padding: 2px;">
                    </div>
                </div>

                <div class="col-md-12 row" style="margin-left: 10px;">
                    <label for="minChargeCurrent" class="col-md-1">Feb</label>
                    <div class="col-md-3">
                        <input id="minChargeCurrent" type="text" style="border: 1px solid black">
                    </div>
                    <div class="col-md-3">
                        <input id="minChargeCurrent" type="text" style="border: 1px solid black">
                    </div>
                    <div class="col-md-4">
                        <input type="button" class="btn btn-default" value="Download" style="border: 1px solid black; padding: 2px;">
                    </div>
                </div>

                <div class="col-md-12 row" style="margin-left: 10px;">
                    <label for="minChargeCurrent" class="col-md-1">March</label>
                    <div class="col-md-3">
                        <input id="minChargeCurrent" type="text" style="border: 1px solid black">
                    </div>
                    <div class="col-md-3">
                        <input id="minChargeCurrent" type="text" style="border: 1px solid black">
                    </div>
                    <div class="col-md-4">
                        <input type="button" class="btn btn-default" value="Download" style="border: 1px solid black; padding: 2px;">
                    </div>
                </div>

                <div class="col-md-12 row" style="margin-left: 10px;">
                    <label for="minChargeCurrent" class="col-md-1">April</label>
                    <div class="col-md-3">
                        <input id="minChargeCurrent" type="text" style="border: 1px solid black">
                    </div>
                    <div class="col-md-3">
                        <input id="minChargeCurrent" type="text" style="border: 1px solid black">
                    </div>
                    <div class="col-md-4">
                        <input type="button" class="btn btn-default" value="Download" style="border: 1px solid black; padding: 2px;">
                    </div>
                </div>

                <div class="col-md-12 row" style="margin-left: 10px;">
                    <label for="minChargeCurrent" class="col-md-1">May</label>
                    <div class="col-md-3">
                        <input id="minChargeCurrent" type="text" style="border: 1px solid black">
                    </div>
                    <div class="col-md-3">
                        <input id="minChargeCurrent" type="text" style="border: 1px solid black">
                    </div>
                    <div class="col-md-4">
                        <input type="button" class="btn btn-default" value="Download" style="border: 1px solid black; padding: 2px;">
                    </div>
                </div>

                <div class="col-md-12 row" style="margin-left: 10px;">
                    <label for="minChargeCurrent" class="col-md-1">June</label>
                    <div class="col-md-3">
                        <input id="minChargeCurrent" type="text" style="border: 1px solid black">
                    </div>
                    <div class="col-md-3">
                        <input id="minChargeCurrent" type="text" style="border: 1px solid black">
                    </div>
                    <div class="col-md-4">
                        <input type="button" class="btn btn-default" value="Download" style="border: 1px solid black; padding: 2px;">
                    </div>
                </div>

                <div class="col-md-12 row" style="margin-left: 10px;">
                    <label for="minChargeCurrent" class="col-md-1">Jule</label>
                    <div class="col-md-3">
                        <input id="minChargeCurrent" type="text" style="border: 1px solid black">
                    </div>
                    <div class="col-md-3">
                        <input id="minChargeCurrent" type="text" style="border: 1px solid black">
                    </div>
                    <div class="col-md-4">
                        <input type="button" class="btn btn-default" value="Download" style="border: 1px solid black; padding: 2px;">
                    </div>
                </div>

                <div class="col-md-12 row" style="margin-left: 10px;">
                    <label for="minChargeCurrent" class="col-md-1">Aug</label>
                    <div class="col-md-3">
                        <input id="minChargeCurrent" type="text" style="border: 1px solid black">
                    </div>
                    <div class="col-md-3">
                        <input id="minChargeCurrent" type="text" style="border: 1px solid black">
                    </div>
                    <div class="col-md-4">
                        <input type="button" class="btn btn-default" value="Download" style="border: 1px solid black; padding: 2px;">
                    </div>
                </div>

                <div class="col-md-12 row" style="margin-left: 10px;">
                    <label for="minChargeCurrent" class="col-md-1">Sep</label>
                    <div class="col-md-3">
                        <input id="minChargeCurrent" type="text" style="border: 1px solid black">
                    </div>
                    <div class="col-md-3">
                        <input id="minChargeCurrent" type="text" style="border: 1px solid black">
                    </div>
                    <div class="col-md-4">
                        <input type="button" class="btn btn-default" value="Download" style="border: 1px solid black; padding: 2px;">
                    </div>
                </div>

                <div class="col-md-12 row" style="margin-left: 10px;">
                    <label for="minChargeCurrent" class="col-md-1">Oct</label>
                    <div class="col-md-3">
                        <input id="minChargeCurrent" type="text" style="border: 1px solid black">
                    </div>
                    <div class="col-md-3">
                        <input id="minChargeCurrent" type="text" style="border: 1px solid black">
                    </div>
                    <div class="col-md-4">
                        <input type="button" class="btn btn-default" value="Download" style="border: 1px solid black; padding: 2px;">
                    </div>
                </div>

                <div class="col-md-12 row" style="margin-left: 10px;">
                    <label for="minChargeCurrent" class="col-md-1">Nov</label>
                    <div class="col-md-3">
                        <input id="minChargeCurrent" type="text" style="border: 1px solid black">
                    </div>
                    <div class="col-md-3">
                        <input id="minChargeCurrent" type="text" style="border: 1px solid black">
                    </div>
                    <div class="col-md-4">
                        <input type="button" class="btn btn-default" value="Download" style="border: 1px solid black; padding: 2px;">
                    </div>
                </div>
                <div class="col-md-12 row" style="margin-left: 10px;">
                    <label for="minChargeCurrent" class="col-md-1">Dec</label>
                    <div class="col-md-3">
                        <input id="minChargeCurrent" type="text" style="border: 1px solid black">
                    </div>
                    <div class="col-md-3">
                        <input id="minChargeCurrent" type="text" style="border: 1px solid black">
                    </div>
                    <div class="col-md-4">
                        <input type="button" class="btn btn-default" value="Download" style="border: 1px solid black; padding: 2px;">
                    </div>
                </div>
                <form action="{{route('curr_date')}}" method="post">
                    @csrf
                    <div class="col-md-12">
                        <input type="submit" class="btn btn-default" value="Get current day report" style="border: 1px solid black; padding 3px;">
                    </div>
                </form>
                <a href="{{route('settings')}}">Settings</a>
                @if (\Session::has('message'))
                    <div class="alert alert-success">
                        <ul>
                            <li>{{\Session::get('message')}}</li>
                        </ul>
                    </div>
                @endif

            </div>
        </div>
    </div> -->
@endsection
