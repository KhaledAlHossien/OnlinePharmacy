@extends('layouts.account')

@section('title')
Admin Page
@endsection

@section('sidebar')
<h3>Welcome Admin :{{$user->name}}</h3>
@endsection

@section('content')
<br>
<table class="table">
    <thead class="thead-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name of Mid</th>
          <th scope="col">Type of Mid</th>
          <th scope="col">Price of Mid</th>
          <th scope="col">Description of Mid</th>
          <th scope="col">Name of Clint</th>
          <th scope="col">Phone of Clint</th>
        </tr>
    </thead>
    @foreach ($orders as $order) 
        <tbody>
            <tr>
            <th scope="row">{{ $order->id }}</th>
              <td>{{ $order->name }}</td>
              <td>{{ $order->type }}</td>
              <td>{{ $order->price }}</td>
              <td>{{ $order->description }}</td>
              <td>{{ $order->name_clint }}</td>
              <td>{{ $order->phon }}</td>
              <td>
              <a href="/pages/{{ $order->id }}/delete">
                <button type="button" class="btn btn-primary">Delet Order</button>
                </a></td>
            </tr>
            
            
        </tbody>
        
        @endforeach

</table>

@endsection