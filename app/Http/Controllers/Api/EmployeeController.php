<?php

namespace App\Http\Controllers\Api;

use App\helpers\helper;
use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeeRequest;
use App\Http\Interfaces\EmployeeRepositoryInterface;

class EmployeeController extends Controller
{

    public function __construct()
    {
        $this->helper = new helper();
    }

    public function get(EmployeeRepositoryInterface $EmployeeRepositoryInterface)
    {
        $employees = $EmployeeRepositoryInterface->getAllEmployees();
        return $this->helper->ResponseJson(1, 'success',$employees);
    }

public function create(EmployeeRepositoryInterface $EmployeeRepositoryInterface,EmployeeRequest $request)
    {
        $employee = $EmployeeRepositoryInterface->createNewEmployee($request);
        return $this->helper->ResponseJson(1, 'created successfully',$employee);
    }

public function update(EmployeeRepositoryInterface $EmployeeRepositoryInterface,EmployeeRequest $request,$id)
    {
        $employee = $EmployeeRepositoryInterface->updateEmployee($request,$id);
        return $this->helper->ResponseJson(1, 'updated successfully',$employee);
    }

public function delete(EmployeeRepositoryInterface $EmployeeRepositoryInterface,$id)
    {
        $employee = $EmployeeRepositoryInterface->deleteEmployee($id);
        return $this->helper->ResponseJson(1, 'deleted successfully');
    }



}
