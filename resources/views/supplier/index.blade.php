@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="head">
            <h3 style="color: #04A586"> Supplier Details </h3>
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
                            <th scope="col">Supplier ID</th>
                            <th scope="col">Supplier Name</th>
                            <th scope="col">Product Type</th>
                            <th scope="col">Address</th>
                            <th scope="col">Email</th>
                            <th scope="col">Number</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($suppliers as $supplier)
                            <tr>
                                <td> {{ $supplier->id }} </td>
                                <td> {{ $supplier->first_name }} {{ $supplier->last_name }} </td>
                                <td> {{ $supplier->product_id }} </td>
                                <td> {{ $supplier->address }} </td>
                                <td> {{ $supplier->email }} </td>
                                <td> {{ $supplier->contact_number }} </td>
                                <td>
                                    <a href="{{ 'supplier/' . $supplier->id . '/edit' }}"><i
                                            class="fa fa-edit fa-lg"></i></a>
                                    <span class="fa fa-trash fa-lg cursor-pointer" style="color: red" onclick="event.preventDefault();
                                        if(confirm('Are you really want to delete?')){
                                            document.getElementById('form-delete-{{ $supplier->id }}').submit()
                                        }
                                        "></span>
                                    <form style="display: none" method="post" action="{{ 'supplier/' . $supplier->id }}"
                                        id="{{ 'form-delete-' . $supplier->id }}">
                                        @csrf
                                        @method('delete')

                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {{ $suppliers->links() }}
            </div>
        </div>
    </div>
@endsection
