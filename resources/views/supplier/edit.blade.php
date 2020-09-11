@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="head">
            <h3 style="color: #04A586"> Update Supplier </h3>
            <hr style="height:3px;border-width:0;color: #e5e5e5;background-color:#e5e5e5">
            <br>
            <br>
        </div>
        <div class="body">
            <x-alert />
            <form method="POST" action="/supplier/{{ $supplier->id }}">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-2"> Supplier Name </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control" name="first_name" value="{{ $supplier->first_name }}"
                            placeholder="Enter First Name">
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control" name="last_name" value="{{ $supplier->last_name }}"
                            placeholder="Enter Last Name">
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-md-2"> Product Type </div>
                    <div class="col-md-2">
                        <input type="radio" id="1" name="product_id" value="1">
                        <label for="drugs"> Drugs </label>
                    </div>
                    <div class="col-md-2">
                        <input type="radio" id="2" name="product_id" value="2">
                        <label for="equipment"> Equipment </label>
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-md-2"> Address </div>
                    <div class="col-md-6">
                        <textarea class="form-control" id="validationTextarea" name="address"
                            value="{{ $supplier->address }}" placeholder="Required example textarea"></textarea>
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-md-2"> Email </div>
                    <div class="col-md-5">
                        <input type="text" class="form-control" name="email" value="{{ $supplier->email }}"
                            placeholder="Enter Email Address">
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-md-2"> Number </div>
                    <div class="col-md-5">
                        <input type="number" class="form-control" name="contact_number"
                            value="{{ $supplier->contact_number }}" placeholder="Enter Number">
                    </div>
                </div>
                <br>

                <input type="submit" name="Submit"
                    style="background-color: #8FD04E; border-color: #8FD04E; border-radius: 20px; width: 200px; height: 45px; color: #ffffff;">
            </form>
        </div>
    </div>
@endsection
