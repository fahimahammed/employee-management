@extends('layout')

@section('page-content')
<h1>Employees</h1>
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
            <button>Show</button>
        </td>
    </tr>        
    @endforeach
</table>
{{$employees->links()}}
@endsection