@extends('layouts.account')

@section('title')
title dada
@endsection

@section('sidebar')
We Are MidTeamDev
@endsection

@section('content')
@if (session('status'))
    <h6 class="alert alert-success">{{session('status')}}</h6>
@endif

<form class="form-inline my-2 my-lg-0" action="/admin/search_admin" method="GET">
    <input class="form-control mr-sm-2" type="text" placeholder="Search" name="search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="background:  rgb(65, 89, 134); color:white; border:black">Search</button>
</form>
<hr>

<h5>
    the type of Mid is :<a href="#tap"> tap </a>
    or<a href="#leq"> leq </a>or
    <a href="#cap"> cap</a>
    </h5>
    <br>
    
<table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="col">Type</th>
        <th scope="col">Name of Mid</th>
        <th scope="col">Price of Mid</th>
        <th scope="col">Description of Mid</th>
        <th scope="col">IMG of Mid</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($mids as $mid)
    @if ($mid->type=='tap')
        <tr>
        <th scope="row">{{ $mid->type }}</th>
        <td><a href="/mid/{{$mid->id}}"><h3 id="tap">{{ $mid->name }}</h3></a></td>
        <td>{{ $mid->price }}</td>
        <td>{{ $mid->description }}</td>
        <td><img src="/imgs/mid/{{$mid->photo}}" width="150" height="150"></td>
        <td>
            <a href="/mid/{{$mid->id}}/edit">
                <button type="button" class="btn btn-primary">Edit</button>
                </a>
        </td>
        </tr>
    @endif
    @endforeach
</tbody>
<tbody>
    @foreach ($mids as $mid)
    @if ($mid->type=='leq')
        <tr>
        <th scope="row">{{ $mid->type }}</th>
        <td><a href="/mid/{{$mid->id}}"><h3 id="leq">{{ $mid->name }}</h3></a></td>
        <td>{{ $mid->price }}</td>
        <td>{{ $mid->description }}</td>
        <td><img src="/imgs/mid/{{$mid->photo}}" width="150" height="150"></td>
        <td>
            <a href="/mid/{{$mid->id}}/edit">
                <button type="button" class="btn btn-primary">Edit</button>
                </a>
        </td>
        </tr>
    @endif
    @endforeach
</tbody>
<tbody>
    @foreach ($mids as $mid)
    @if ($mid->type=='cap')
        <tr>
        <th scope="row">{{ $mid->type }}</th>
        <td><a href="/mid/{{$mid->id}}"><h3 id="cap">{{ $mid->name }}</h3></a></td>
        <td>{{ $mid->price }}</td>
        <td>{{ $mid->description }}</td>
        <td><img src="/imgs/mid/{{$mid->photo}}" width="150" height="150"></td>
        <td>
            <a href="/mid/{{$mid->id}}/edit">
                <button type="button" class="btn btn-primary">Edit</button>
                </a>
        </td>
        </tr>
    @endif
    @endforeach
</tbody>
    

</table>


@endsection