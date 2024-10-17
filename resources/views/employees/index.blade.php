@extends('layout')

@section('page-content')
<h1>Employees</h1>
<div class="text-end my-3">
    <a href="{{route('employee.create')}}">
        <button class="btn btn-primary">Create</button>
    </a>
</div>
<table class="table table-striped table-border table-hover">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Job Title</th>
        <th>Action</th>
    </tr>
    @foreach ($employees as $employee)
    <tr>
        <td>{{$employee->id}}</td>
        <td>{{$employee->name}}</td>
        <td>{{$employee->job_title}}</td>
        <td>
            <a href="{{route('employee.show', $employee->id)}}">
                <button class="btn btn-primary">Show</button>
            </a>
            
        </td>
    </tr>        
    @endforeach
</table>
{{$employees->links()}}
@endsection