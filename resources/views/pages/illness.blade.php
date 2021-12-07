@extends('layouts.main')

@section('title')
Search Mid
@endsection

@section('sidebar')
We Are MidTeamDev
@endsection

@section('content')

<table class="table">
    <thead class="thead-dark">
        <tr>
          <th scope="col">Name of Mid</th>
          <th scope="col">Type of Mid</th>
          <th scope="col">Price of Mid</th>
          <th scope="col">Description of Mid</th>
          <th scope="col">Photo of Mid</th>
          
          
        </tr>
    </thead> 
        <tbody>
            @foreach ($mids as $mid)
            <tr>
            <th scope="row">{{ $mid->name }}</th>
              <td>{{ $mid->type }}</td>
              <td>{{ $mid->price }}</td>
              <td>{{ $mid->description }}</td>
              <td><img src="/imgs/mid/{{$mid->photo}}" width="100" height="100"></td>
              <td>
              <a href="/pages/{{$mid->id}}/order">
                <button type="button" class="btn btn-primary">Order Now</button>
            </a></td>
        </tr>
            @endforeach
        </tbody>
</table>

@endsection