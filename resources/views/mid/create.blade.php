@extends('layouts.account')

@section('title')
Creat New Mid
@endsection

@section('sidebar')

We Are MidTeamDev

@endsection

@section('content')
@if (session('status'))
    <h6 class="alert alert-success">{{session('status')}}</h6>
@endif

<form action="/mid" method="POST" enctype="multipart/form-data">
  @csrf

  <h1 style="text-align: center">Add New Mid</h1>
  <hr>
    <div class="form-group">
      <label for="name">Name of Mid:</label>
      <input type="text" class="form-control" id="name"  name="name" placeholder="Enter the Name of Mid">
    </div>
    <div class="form-group">
      <label for="type">Type of Mid:</label>
      <input type="text" class="form-control" id="type"  name="type" placeholder="Enter Type of the Mid">
    </div>
    <div class="form-group">
      <label for="price">Price of Mid:</label>
      <input type="number" class="form-control" id="price"  name="price"  placeholder="Enter the Price of Mid">
    </div>
    <div class="form-group">
      <label for="description">Discription of Mid:</label>
      <textarea class="form-control" id="description"  name="description" placeholder="Enter the Description of Mid"></textarea>
    </div>
    <div class="form-group">
      <label for="company_id">The new Company of Mid:</label>
      <select class="form-control" name="company_id">
          @foreach ($companies as $company)
          <option value="{{$company->id}}">{{$company->name}}</option>
          @endforeach
      </select>
  </div>
  <div class="form-group">
    <input id="photo" name="photo" type="file"  class="form-control">
    <label id="upload-label" for="photo" class="font-weight-light text-muted">Choose file</label>
</div>
    <button type="submit" class="btn btn-primary">Save</button>
  </form>
@endsection