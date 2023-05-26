<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeeRequest;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {if(request()->ajax()) {
return datatables()->of(Employee::select('*'))
->addColumn('action', 'employees.action')
->rawColumns(['action'])
->addIndexColumn()
->make(true);
}
return view('employees.index');
}

    

    public function create()
    {

        return view('employees.create');
    }

    public function store(EmployeeRequest $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'adress' => 'required',
            'position' => 'required',
        ]);
        $employee = new Employee;
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->adress = $request->adress;
        $employee->position = $request->position;
        $employee->save();
        return redirect()->route('employees.index')
            ->with('success', 'Employee has been created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'adress' => 'required',
            'position' => 'required',
        ]);
        $employee = Employee::find($id);
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->adress = $request->adress;
        $employee->position = $request->position;
        $employee->save();
        return redirect()->route('employees.index')
            ->with('success', 'Employee Has Been updated successfully');
    }

    public function destroy(Request $request)
    {
        $com = Employee::where('id', $request->id)->delete();
        return Response()->json($com);
    }

}
