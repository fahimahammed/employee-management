@extends('layout')

@section('page-content')
<div>
    <h3 class="text-secondary">Details - {{$employee->id}}</h3>
    <hr>
    <table class="table table-responsive">
        <tr>
            <td>Name: </td>
            <th>{{$employee->name}}</th>
            <td></td>
            <th></th>
        </tr>
        <tr>
            <td>Email: </td>
            <th>{{$employee->email}}</th>
            <td>Phone: </td>
            <th>{{$employee->mobile_no}}</th>
        </tr>
        <tr>
            <td>Job Title: </td>
            <th>{{$employee->job_title}}</th>

            <td>Joining Date: </td>
            <th>{{$employee->joining_date}}</th>
        </tr>
        <tr>
            <td>Salary</td>
            <th>{{$employee->salary}}</th>

            <td></td>
            <th></th>
        </tr>
        <tr>
            <td>Address: </td>
            <th>{{$employee->address}}</th>

            <td></td>
            <th></th>
        </tr>

        <tr>
            <td>Created At: </td>
            <th>{{$employee->created_at}}</th>

            <td>Updated At</td>
            <th>{{$employee->updated_at}}</th>
        </tr>
    </table>
</div>
@endsection