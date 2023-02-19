<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Throwable;

class employeesController extends Controller
{
    public function index($id = null) {
        if($id == null) {
            return Employee::orderBy('name','asc') -> get();
        }
        else {
            return Employee::find($id);
        }
    }
    public function createUser(Request $req) {
        try {
            $employee = new Employee();
        $employee -> name = $req->input('name');
        $employee -> email = $req->input('email');
        $employee -> phone = $req->input('phone');
        $employee->save();
        return response($employee, 200);
                  
        } catch(Throwable $err) {
            return $err->getMessage();
        }
        
        
    }
    public function deleteUser($id,Request $req) {
        try {
            $employee =  Employee::find($id);
            if($employee) {
                $employee->delete();
            return response($employee, 200);

            }
            else {
                return response('data not found', 200);

            }
       
                  
        } catch(Throwable $err) {
            return $err->getMessage();
        }
        
        
    }
}
