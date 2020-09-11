@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="head">
            <h3 style="color: #04A586"> Request Order </h3>
            <hr style="height:3px;border-width:0;color: #e5e5e5;background-color:#e5e5e5">
            <br>
            <br>
        </div>
        <div class="body">
            <x-alert />
            <form method="POST" action="/order">
                @csrf
                <div class="row">
                    <div class="col-md-2"> Supplier Name </div>
                    <div class="col-md-4">
                        <select id="supplier_id" name="supplier_id" class="form-control">
                            <option value="0" selected>Select Supplier Name...</option>
                            @foreach ($suppliers as $supplier)
                                <option value="{{ $supplier->id }}">{{ $supplier->first_name }} {{ $supplier->last_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-md-2"> Item Name </div>
                    <div class="col-md-3">
                        <select id="item_name" name="item_name" class="form-control">
                            <option value="0" selected>Select Item Name...</option>
                            @foreach ($suppliers as $supplier)
                                <option value="{{ $supplier->first_name }}">{{ $supplier->first_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-md-2"> Quantity </div>
                    <div class="col-md-5">
                        <input type="number" class="form-control" name="quantity" placeholder="Enter Quantity">
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-md-2"> Message </div>
                    <div class="col-md-6">
                        <textarea class="form-control" id="message" name="message"
                            placeholder="Enter Message"></textarea>
                    </div>
                </div>
                <br>

                <input type="submit" name="Request"
                    style="background-color: #8FD04E; border-color: #8FD04E; border-radius: 20px; width: 200px; height: 45px; color: #ffffff;">
            </form>
        </div>
    </div>
@endsection
