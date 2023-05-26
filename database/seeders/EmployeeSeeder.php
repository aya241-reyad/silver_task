<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    DB::table('employees')->delete();

$employees = array(
    array('name' =>'aya', 'email' => 'aya@aya.com', 'position' => 'backend developer', 'adress' =>'mahalla'),
    array('name' =>'alaa' , 'email' => 'alaa@alaa.com', 'position' => 'backend developer', 'adress' =>'mahalla'),
    array('name' => 'enas', 'email' => 'enas@enas.com', 'position' => 'backend developer', 'adress' =>'mahalla'),
    array('name' =>'basma', 'email' => 'basma@basma.com', 'position' => 'backend developer', 'adress' =>'mahalla'),
    array('name' => 'esraa', 'email' => 'esraa@esraa.com','position' => 'backend developer', 'adress' =>'mahalla'),
    array('name' => 'amira', 'email' => 'amira@amira.com', 'position' => 'backend developer', 'adress' =>'mahalla'),
    array('name' =>'nada', 'email' => 'nada@nada.com', 'position' => 'backend developer', 'adress' =>'mahalla'),
    array('name' => 'abeer', 'email' => 'abeer@abeer.com', 'position' => 'backend developer', 'adress' =>'mahalla'),
    array('name' => 'rana', 'email' => 'rana@rana.com', 'position' => 'backend developer', 'adress' =>'mahalla'),
    array('name' => 'noura', 'email' => 'noura@noura.com','position' => 'backend developer', 'adress' =>'mahalla'),
);

DB::table('employees')->insert($employees);

    }
}
