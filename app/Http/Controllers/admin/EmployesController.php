<?php

namespace App\Http\Controllers\admin;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\admin\EmployesController;

class EmployesController extends Controller
{
    Public function view() {
        $employee = Employee::all();

        return view ('backend.pages.Employes.employes',compact('employee'));
    }



    public function add() {
        $employee = Employee::all();

        return view ('backend.pages.Employes.employeslist',compact('employee'));
    }

    public function show(Request $request) {

        Employee::create(
            [

        'employee_Name'=>$request->employee_Name,
        'employee_Date_of_Birth'=>$request->employee_Date_of_Birth,
        'employee_Address'=>$request->employee_Address,
        'employee_Rank'=>$request->employee_Rank,
        'employee_Salary'=>$request->employee_Salary,

            ]);
            return redirect()-> back();
}
            public function form($id){
                $employee = Employee::find($id);
                return view('backend.pages.Employes.edit',compact('employee'));
            }
            public function edit(Request $request,$id){
                $employee = Employee::find($id);
                $employee->update([
                    'employee_Name'=>$request->employee_Name,
                    'employee_Date_of_Birth'=>$request->employee_Date_of_Birth,
                    'employee_Address'=>$request->employee_Address,
                    'employee_Rank'=>$request->employee_Rank,
                    'employee_Salary'=>$request->employee_Salary,

                ]);
                return redirect()->back();
            }
            public function delete($id){
                $employee = Employee::find($id)->delete();
                return redirect()->back();
            }
}
