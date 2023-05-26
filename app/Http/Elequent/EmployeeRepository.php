<?php


namespace App\Http\Elequent;
use App\DTO\EmployeeDto;
use App\Models\Employee;
use App\Http\Requests\EmployeeRequest;
use App\Http\Interfaces\EmployeeRepositoryInterface;


class EmployeeRepository implements EmployeeRepositoryInterface {
 
public function getAllEmployees(){

    return Employee::paginate(5);

}


public function createNewEmployee(EmployeeRequest $request) {

    $employee = Employee::create([
    'name' =>$request->name ,
    'email' =>$request->email ,
    'position' =>$request->position ,
    'adress' =>$request->adress ,
]);

return $employee;
}


public function updateEmployee(EmployeeRequest $request,$id){
$employee = Employee::find($id);


$employee->update([
    'name' =>$request->name,
    'email' =>$request->email,
    'position' =>$request->position,
    'adress' =>$request->adress,
]);

return $employee;


}



public function deleteEmployee($id){
$employee = Employee::find($id);
$employee->delete();
}







}