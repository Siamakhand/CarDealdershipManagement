@extends('master')
@section('content')

<form action ="{{route('car.show')}}" method="POST">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Employee Name</label>
    <input type="text" class="form-control"  placeholder="Employee Name" name="employee_Name">

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Employee Date of Birth</label>
    <input type="number" class="form-control"  placeholder="Employee Date of Birth" name="employee_Date_of_Birth">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Employee Address</label>
    <input type="text" class="form-control"  placeholder="Employee Address" name="employee_Address">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Employee Rank</label>
    <input type="number" class="form-control"  placeholder="Employee Rank" name="employee_Rank">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Employee Salary</label>
    <input type="number" class="form-control"  placeholder="Employee Salary" name="employee_Salary">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>






@endsection


