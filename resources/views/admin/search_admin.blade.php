@extends('layouts.account')

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
            <tr>
            <th scope="row">{{ $mid->name }}</th>
              <td>{{ $mid->type }}</td>
              <td>{{ $mid->price }}</td>
              <td>{{ $mid->description }}</td>
              <td><img src="/imgs/mid/{{$mid->photo}}" width="100" height="100"></td>
              <td>
                <a href="/mid/{{$mid->id}}/edit">
                  <button type="button" class="btn btn-primary">Edit</button>
                  </a></td>
        </tr>
            
        </tbody>
</table>

@endsection