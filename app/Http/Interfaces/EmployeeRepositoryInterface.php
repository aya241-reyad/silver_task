<?php

namespace App\Http\Interfaces;

use App\Http\Requests\EmployeeRequest;

interface EmployeeRepositoryInterface{


public function getAllEmployees();

public function createNewEmployee(EmployeeRequest $request);
public function updateEmployee(EmployeeRequest $request ,$id);
public function deleteEmployee($id);







}