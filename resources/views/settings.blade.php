@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{asset('/css/bar.css')}}"/>
<div id="desc">Настройки</div>
    <div class="desc__container">
        <div class="row">
           <div class="col-md-12">
                <div class="card">
                   <div class="card-body">
                        <div class="panel" style="padding-left: 180px;">
                                <div class="col-md-12 row text-center" style="margin-left: 10px;">
                                    <label for="minChargeCurrent">Minimal Charge Current</label>
                                    <div class="col-md-3">
                                        <input id="minChargeCurrent" type="text" style="border: 1px solid black">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="submit" class="btn btn-default" value="Download" style="border: 1px solid black; padding: 2px;">
                                    </div>
                                </div>                           
                            <br>
                            <form action="/monthsend" method="post">
                                @csrf
                                <div class="col-md-12 row" style="margin-left: 10px;">
                                    <input type="text" name="Month" value="Feb" hidden>
                                    <label for="minChargeCurrent" class="col-md-1">Feb</label>
                                    <div class="col-md-3">
                                        <input name="Hi" id="minChargeCurrent" type="text" style="border: 1px solid black">
                                    </div>
                                    <div class="col-md-3">
                                        <input name="Lo" id="minChargeCurrent" type="text" style="border: 1px solid black">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="submit" class="btn btn-default" value="Download" style="border: 1px solid black; padding: 2px;">
                                    </div>
                                </div>
                            </form> 

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
                            @if (\Session::has('message'))
                                <div class="alert alert-success">
                                    <ul>
                                        <li>{{\Session::get('message')}}</li>
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
