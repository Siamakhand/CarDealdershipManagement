@extends('master')
@section('content')
<div class="container">
    <h3>Update your car</h3>
</div>
<form action ="{{route('car.edit',$car->id)}}" method="POST">
    @method('PUT')
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Car Name</label>
    <input type="text" class="form-control"  placeholder="Car Name" name="car_name">

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Car Brand</label>
    <input type="text" class="form-control"  placeholder="Car Brand" name="car_brand">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Car Details</label>
    <input type="text" class="form-control"  placeholder="Car Details" name="car_details">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Car Quantity</label>
    <input type="number" class="form-control"  placeholder="Car Quantity" name="car_quantity">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Car Varient</label>
    <input type="text" class="form-control"  placeholder="Car Varient" name="car_varient">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Car Price</label>
    <input type="number" class="form-control"  placeholder="Car Price" name="car_price">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>




@endsection