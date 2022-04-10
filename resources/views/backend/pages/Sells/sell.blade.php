@extends('master')
@section('content')

<form action="{{route('sell.show')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Buyer Name</label>
        <input type="text" class="form-control" placeholder="Buyer Name" name="Buyer_Name">

    <div class="form-group">
        <label for="exampleInputEmail1">Buyer Address</label>
        <input type="text" class="form-control" placeholder="Buyer Address" name="Buyer_Address">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Buyer Contact</label>
        <input type="number" class="form-control" placeholder="Buyer Contact" name="Buyer_Contact">
    </div>
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

    <button type="submit" class="btn btn-primary">Submit</button>
</form>





@endsection
