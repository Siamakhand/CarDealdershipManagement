@extends('master')
@section('content')
<div class="container">
    <h3>Update your Employee</h3>
</div>
<form action="{{route('employee.edit',$employee->id)}}" method="POST">
    @method('PUT')
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Update Employee Name</label>
        <input type="text" class="form-control" placeholder="Employee Name" name="employee_Name">

    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Update Employee Date of Birth</label>
        <input type="date" class="form-control" placeholder="Employee Date of Birth" name="employee_Date_of_Birth">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Update Employee Address</label>
        <input type="text" class="form-control" placeholder="Employee Address" name="employee_Address">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Update Employee Rank</label>
        <input type="number" class="form-control" placeholder="Employee Rank" name="employee_Rank">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Update Employee Salary</label>
        <input type="number" class="form-control" placeholder="Employee Salary" name="employee_Salary">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
