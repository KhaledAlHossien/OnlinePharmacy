@extends('layouts.account')

@section('title')
Edit Mid
@endsection

@section('sidebar')
We Are MidTeamDev
@endsection

@section('content')
@if (session('status'))
    <h6 class="alert alert-success">{{session('status')}}</h6>
@endif

<form action="/mid/{{$mid->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <h1 style="text-align: center">Edit  Mid</h1>
    <hr>
        <div class="form-group">
            <label for="name">The new name of Mid:</label>
            <input type="text" class="form-control" id="name"  name="name" placeholder="Enter the Name of Mid" value="{{$mid->name}}">
        </div>
        <div class="form-group">
            <label for="type">The new Type of Mid:</label>
        <input type="text" class="form-control" id="type"  name="type" placeholder="Enter Type of the Mid" value="{{$mid->type}}">
        </div>
        <div class="form-group">
            <label for="price">The new Price of Mid:</label>
            <input type="number" class="form-control" id="price"  name="price"  placeholder="Enter the Price of Mid" value="{{$mid->price}}">
        </div>
        <div class="form-group">
            <label for="description">The new Discription of Mid:</label>
            <textarea class="form-control" id="description"  name="description" placeholder="Enter the Description of Mid">{{$mid->description}}</textarea>
        </div>
        {{-- <div class="form-group">
            <label for="company_id">The new Company of Mid:</label>
            <select class="form-control" name="company_id">
                @foreach ($companies as $company)
                @if ($company->id == $mid->company_id)
                <option value="{{$company->id}}" selected>{{$company->name}}</option>
                @else
                <option value="{{$company->id}}">{{$company->name}}</option>
                @endif
                @endforeach
            </select>
        </div> --}}

        <img src="/imgs/mid/{{ $mid->photo }}" width="150" height="150">
        <div class="form-group">
            <input id="photo" name="photo" type="file"  class="form-control" value="{{ $mid->photo }}" >
            <label id="upload-label" for="photo" class="font-weight-light text-muted">Choose the new file</label>
        </div>
        
        <button type="submit" class="btn btn-primary">Save</button>
        </form>
        <a href="/mid/{{$mid->id}}/delete"><button type="button" class="btn btn-primary">Delete</button></a>
    @endsection