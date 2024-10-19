<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $employees = Employee::all();
        $employees = Employee::paginate(10);
        return view('employees.index')->with('employees', $employees);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // Validate the request data with custom error messages
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'job_title' => 'required|string|max:100',
            'joining_date' => 'required|date',
            'salary' => 'required|numeric|min:10000|max:100000',
            'email' => 'nullable|email|unique:employees,email|max:255',
            'mobile_no' => 'required|numeric|digits_between:10,15|unique:employees,mobile_no',
            'address' => 'required|string|max:500',
        ], [
            'name.required' => 'The name field is required.',
            'name.max' => 'The name may not be greater than 255 characters.',

            'job_title.required' => 'The job title field is required.',
            'job_title.max' => 'The job title may not be greater than 100 characters.',

            'joining_date.required' => 'The joining date field is required.',
            'joining_date.date' => 'The joining date must be a valid date.',

            'salary.required' => 'The salary field is required.',
            'salary.numeric' => 'The salary must be a valid number.',
            'salary.min' => 'The salary must be at least 10,000.',
            'salary.max' => 'The salary may not be greater than 100,000.',

            'email.email' => 'The email must be a valid email address.',
            'email.unique' => 'The email has already been taken.',
            'email.max' => 'The email may not be greater than 255 characters.',

            'mobile_no.required' => 'The mobile number field is required.',
            'mobile_no.numeric' => 'The mobile number must be a valid number.',
            'mobile_no.digits_between' => 'The mobile number must be between 10 and 15 digits.',
            'mobile_no.unique' => 'The mobile number has already been taken.',

            'address.required' => 'The address field is required.',
            'address.max' => 'The address may not be greater than 500 characters.',
        ]);

        // Create a new employee instance
        $employee = new Employee();
        $employee->name = $validatedData['name'];
        $employee->job_title = $validatedData['job_title'];
        $employee->joining_date = $validatedData['joining_date'];
        $employee->salary = $validatedData['salary'];
        $employee->email = $validatedData['email'];
        $employee->mobile_no = $validatedData['mobile_no'];
        $employee->address = $validatedData['address'];

        // Save the employee to the database
        $employee->save();

        return redirect()->route('employee.show', $employee->id);
    }

    /**
     * Display the specified resource.
     */
    public function show($employeeId)
    {
        $employee = Employee::find($employeeId);
        return view('employees.show')->with('employee', $employee);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($employeeId)
    {
        $employee = Employee::find($employeeId);
        return view('employees.edit')->with('employee', $employee);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $employeeId)
    {
        $rules = [
            "name" => "required|string|max:255",
            "job_title" => "required|string|max:100",
            "joining_date" => "required|date",
            "salary" => "required|numeric|min:0",
            "email" => "nullable|email|max:255",
            "mobile_no" => "required|string|max:15",
            "address" => "nullable|string",
        ];

        $validatedData = $request->validate($rules);

        $employee = Employee::findOrFail($employeeId);

        $employee->update($validatedData);

        return redirect()->route("employee.show", $employeeId);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $employeeId)
    {
        $employee = Employee::findOrFail($employeeId);
        $employee->delete();
        return redirect()->route("employee.index");
    }

    public function search(Request $request)
    {
        $text = '%' . $request->search . '%';
        $employees = Employee::where('name', 'LIKE', $text)->paginate(10);
        return view('employees.index')->with('employees', $employees);
    }
}
