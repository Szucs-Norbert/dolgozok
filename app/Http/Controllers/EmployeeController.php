<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use Illuminate\Support\Facades\DB;


class EmployeeController extends Controller
{
   
    public function addEmployee() {
 
        return view( "add_employee" );
    }
 
    public function storeEmployee( Request $request ) {
         
    $employee = new Employee;
 
    $employee->name = $request->name;
    $employee->city = $request->city;
    $employee->date = $request->date;
    $employee->salary = $request->salary;
 
    $employee->save();

    $request->session()->flash( "success", "Kiírás sikeres" );
    return redirect( "/new-employee" );


 
    }

    public function selectEmployee() {
 
        $employees = Employee::all();
     
        return view( "list_employee", [
            "employees" => $employees
        ] );
    }

    public function deleteEmployee( $id ) {
 
        $employee = Employee::find( $id );
        $employee->delete();
     
        session()->flash( "success", "Dolgozó törölve" );
        return redirect( "/write-employee" );
    }

    public function showUpdateEmployee( $id ) {
 
        $employee = Employee::find( $id );
     
        return view( "show_employee", [
            "employee" => $employee
        ]);
    }

    public function submitUpdateEmployee( Request $request ) {
 
        $employee = Employee::find( $request[ "employee_id" ]);
 
        $employee->name = $request[ "name" ];
        $employee->city = $request[ "city" ];
        $employee->date = $request[ "date" ];
        $employee->salary = $request[ "salary" ];
     
        $employee->save();
     
        session()->flash( "success", "Sikeres frissítés" );
     
        return redirect( "/write-employee" );
    }


    public function insertEmployee() {

 
        DB::insert( "INSERT INTO employees( name, city, date,salary ) VALUES (?,?,?,?)", [

                    "Démon Kíra",
                    "Klárapátfalva",
                    "1966-06-06",
                    "6666666"
                ]);
        }


    

   
   
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEmployeeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmployeeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEmployeeRequest  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
