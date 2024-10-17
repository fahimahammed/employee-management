@extends('layout')

@section('page-content')
<div>
    create page
    
    <form method="POST" action="{{route('employee.store')}}">
        {{csrf_field()}}
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" required>
            <div class="text-danger">{{$errors->first('name')}}</div>
        </div>
        
        <div class="mb-3">
            <label for="job_title" class="form-label">Job Title</label>
            <input type="text" class="form-control" id="job_title" name="job_title" value="{{old('job_title')}}" required>
            <div class="text-danger">{{$errors->first('job_title')}}</div>
        </div>
        
        <div class="mb-3">
            <label for="joining_date" class="form-label">Joining Date</label>
            <input type="date" class="form-control" id="joining_date" name="joining_date" value="{{old('joining_date')}}"  required>
            <div class="text-danger">{{$errors->first('joining_date')}}</div>
        </div>
        
        <div class="mb-3">
            <label for="salary" class="form-label">Salary</label>
            <input type="number" step="0.01" min="10000" max="10000000" class="form-control" id="salary" name="salary" value="{{old('salary')}}" required>
            <div class="text-danger">{{$errors->first('salary')}}</div>
        </div>
        
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" required>
            <div class="text-danger">{{$errors->first('email')}}</div>
        </div>
        
        <div class="mb-3">
            <label for="mobile_no" class="form-label">Mobile No</label>
            <input type="tel" class="form-control" id="mobile_no" name="mobile_no" value="{{old('mobile_no')}}" required>
            <div class="text-danger">{{$errors->first('mobile_no')}}</div>
        </div>
        
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <textarea class="form-control" id="address" name="address" value="{{old('address')}}" required></textarea>
            <div class="text-danger">{{$errors->first('address')}}</div>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection      