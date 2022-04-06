@extends('master')
@section('content')

<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Car Name</label>
    <input type="text" class="form-control"  placeholder="Car Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Car Brand</label>
    <input type="text" class="form-control"  placeholder="Car Brand">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Car Details</label>
    <input type="text" class="form-control"  placeholder="Car Details">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Car Quantity</label>
    <input type="number" class="form-control"  placeholder="Car Quantity">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Car Varient</label>
    <input type="text" class="form-control"  placeholder="Car Varient">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Car Price</label>
    <input type="number" class="form-control"  placeholder="Car Price">
  </div>
  <button type="submit" ><class="btn btn-primary mt-3" >Submit</button>
</form>




@endsection


