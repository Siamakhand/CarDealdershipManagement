@extends('master')
@section('content')

<h3 class="text-center text-primary text-bold">All Employee List</h3>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Employee Name</th>
            <th scope="col">Employee Date of Birth</th>
            <th scope="col">Employee Address</th>
            <th scope="col">Employee Rank</th>
            <th scope="col">Employee Salary</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($employee as $data)
        <tr>
            <th scope="row">{{$data->id}}</th>
            <td scope="row">{{$data->employee_Name}}</td>
            <td scope="row">{{$data->employee_Date_of_Birth}}</td>
            <td scope="row">{{$data->employee_Address}}</td>
            <td scope="row">{{$data->employee_Rank}}</td>
            <td scope="row">{{$data->employee_Salary}}</td>
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