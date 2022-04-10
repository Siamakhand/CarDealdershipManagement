@extends('master')
@section('content')

<h3 class="text-center text-primary text-bold">All Sells List</h3>

<table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
            <th scope="col">Buyer Name</th>
            <th scope="col">Buyer Address</th>
            <th scope="col">Buyer Contact</th>
            <th scope="col">Car Name</th>
            <th scope="col">Car Brand</th>
            <th scope="col">Car Details</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($sell as $data)
        <tr>
            <th scope="row">{{$data->id}}</th>
            <td scope="row">{{$data->Buyer_Name}}</td>
            <td scope="row">{{$data->Buyer_Address}}</td>
            <td scope="row">{{$data->Buyer_Contact}}</td>
            <td scope="row">{{$data->car_name}}</td>
            <td scope="row">{{$data->car_brand}}</td>
            <td scope="row">{{$data->car_details}}</td>
            <td>
                <a href="" class="btn btn-primary">view</a>
                <a href="" class="btn btn-success">edit</a>
                <a href="" class="btn btn-danger">delete</a>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>
@endsection