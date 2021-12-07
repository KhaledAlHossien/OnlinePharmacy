@extends('layouts.main')

@section('title')
Show Mid
@endsection

@section('sidebar')
We Are MidTeamDev
@endsection

@section('content')
<h1>{{$mid->name}}</h1>
<p>
    Description:&nbsp{{ $mid->description }}<br>
    Type:&nbsp{{ $mid->type }}<br>
    Price:&nbsp{{ $mid->price }}<br>
    Company:&nbsp{{$mid->company->name }}<br>
    <img src="/imgs/mid/{{$mid->photo}}" width="150" height="150">
</p>
<a href="/pages/{{$mid->id}}/order">
<button type="button" class="btn btn-primary">Order Now</button>
</a>
<hr>
@endsection