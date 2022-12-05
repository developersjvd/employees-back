<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\Models\Employee;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee = Employee::with(['address', 'skills'])->get();

        return $employee ? response()->json($employee, 200) : response()->json('Error', 400);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employee = Employee::create($request->validate([
            'name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'birthday' => 'required',
        ]));

        return $employee ? response()->json($employee, 201) : response()->json('Error', 400);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        return $employee;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $employee->update([
            'name' => $request->name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'birthday' => $request->birthday,
            'address_id' => $request->address_id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        return $employee ? response()->json($employee, 200) : response()->json('Error', 400);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return $employee ? response()->json($employee, 200) : response()->json('Error', 400);
    }
}
