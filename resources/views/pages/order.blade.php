@extends('layouts.main')

@section('title')
Order Mid
@endsection

@section('sidebar')
We Are MidTeamDev
@endsection

@section('content')

@if (session('status'))
    <h6 class="alert alert-success">{{session('status')}}</h6>
@endif

<form action="/order" method="POST">
  @csrf
  <h1 style="text-align: center">Order Mid</h1>
  <hr>
    <div class="form-group">
      <label for="name">Name of Mid:</label>
      <input type="text" class="form-control" id="name"  name="name" placeholder="Enter the Name of Mid" value="{{$mid->name}}">
    </div>
    <div class="form-group">
      <label for="type">Type of Mid:</label>
      <input type="text" class="form-control" id="type"  name="type" placeholder="Enter Type of the Mid" value="{{$mid->type}}">
    </div>
    <div class="form-group">
      <label for="price">Price of Mid:</label>
      <input type="number" class="form-control" id="price"  name="price"  placeholder="Enter the Price of Mid" value="{{$mid->price}}">
    </div>
    <div class="form-group">
      <label for="description">Discription of Mid:</label>
      <textarea class="form-control" id="description"  name="description" placeholder="Enter the Description of Mid">{{$mid->description}}</textarea>
    </div>
    <div class="form-group">
        <label for="name_clint">Name of Clint:</label>
        <input type="text" class="form-control" id="name_clint"  name="name_clint" placeholder="Enter the Name of Mid" ">
      </div>
      <div class="form-group">
        <label for="phon">Clint Phon:</label>
        <input type="number" class="form-control" id="phon"  name="phon" placeholder="Enter Type of the Mid" >
      </div>
      <img src="/imgs/mid/{{ $mid->photo }}" width="150" height="150">
      <br><br>
    {{-- <div class="form-group">
      <label for="company_id">The new Company of Mid:</label>
      <select class="form-control" name="company_id">
          @foreach ($companies as $company)
          <option value="{{$company->id}}">{{$company->name}}</option>
          @endforeach
      </select> --}}
      <button type="submit" class="btn btn-primary">Order Now</button>
  </div>
  </form>
@endsection