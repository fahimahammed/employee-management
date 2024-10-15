@extends('layout')

@section('page-content')
<div>
    <a href="{{route('employee.index')}}">back</a>
    <h3>Details</h3>
    {{$employee}}
    <h4>{{$employee->id}}</h4>
</div>
@endsection