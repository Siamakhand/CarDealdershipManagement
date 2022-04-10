@extends('master')
@section('content')

<h3 class="text-center text-primary text-bold">All Car List</h3>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Car Name</th>
            <th scope="col">Car Brand</th>
            <th scope="col">Car Details</th>
            <th scope="col">Car Quantity</th>
            <th scope="col">Car Varient</th>
            <th scope="col">Car Price</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($car as $data)
        <tr>
            <th scope="row">{{$data->id}}</th>
            <td scope="row">{{$data->car_name}}</td>
            <td scope="row">{{$data->car_brand}}</td>
            <td scope="row">{{$data->car_details}}</td>
            <td scope="row">{{$data->car_quantity}}</td>
            <td scope="row">{{$data->car_varient}}</td>
            <td scope="row">{{$data->car_price}}</td>
            <td>
                <a href="" class="btn btn-primary">view</a>
                <a href="{{route('car.form',$data->id)}}" class="btn btn-success">edit</a>
                <a href="{{route('car.delete',$data->id)}}" class="btn btn-danger">delete</a>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>


@endsection
