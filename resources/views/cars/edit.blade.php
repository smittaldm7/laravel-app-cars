@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Car
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
      <form method="post" action="{{ route('cars.update', $car->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">Car Make:</label>
          <input type="text" class="form-control" name="car_make" value={{ $car->make }} />
        </div>
        <div class="form-group">
          <label for="price">Car Model :</label>
          <input type="text" class="form-control" name="car_model" value={{ $car->model }} />
        </div>
        <div class="form-group">
          <label for="quantity">Car Produced On:</label>
          <input type="text" class="form-control" name="car_produced_on" value={{ $car->produced_on }} />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection