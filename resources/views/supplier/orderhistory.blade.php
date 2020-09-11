@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="head">
            <h3 style="color: #04A586"> Order History </h3>
            <hr style="height:3px;border-width:0;color: #e5e5e5;background-color:#e5e5e5">
            <br>
            <br>
        </div>
        <div class="body">
            <div class="container">
                <div class="row">
                    <div class="col-md-7"></div>
                    <div class="col-md-4">
                        <div class="form-group has-search">
                            <span class="fa fa-search form-control-feedback"></span>
                            <input type="text" class="form-control" placeholder="Type Supplier's ID or Name">
                        </div>
                    </div>
                    <div class="col-md-1">
                        <input type="button" class="btn btn-success" name="search" value="Search"
                            style="background-color: #8FD04E; border-color: #8FD04E; color: #ffffff;">
                    </div>
                </div>
                <br>

                <x-alert />
                @csrf
                <table class="table table-hover table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Order ID</th>
                            <th scope="col">Supplier Name</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <td> {{ $order->id }} </td>
                                <td> {{ $order->supplier_id }} </td>
                                <td> {{ $order->item_name }} </td>
                                <td> {{ $order->quantity }} </td>
                                <td> {{ $order->message }} </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
