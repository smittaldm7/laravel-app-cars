@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Car
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('cars.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Car Make:</label>
              <input type="text" class="form-control" name="car_make"/>
          </div>
          <div class="form-group">
              <label for="price">Car Model :</label>
              <input type="text" class="form-control" name="car_model"/>
          </div>
          <div class="form-group">
              <label for="quantity">Car Date:</label>
              <input type="date" class="form-control" name="car_produced_on"/>
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection