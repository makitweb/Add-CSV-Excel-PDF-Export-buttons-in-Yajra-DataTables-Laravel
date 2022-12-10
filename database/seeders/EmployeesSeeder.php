<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use App\Models\Employees;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $names_arr = array("Yogesh","Vishal","Vijay","Rahul","Sonarika","Jitentendre","Aditya","Anil","Sunil","Akilesh","Raj","Mayank","Shalu","Ravi","Shruti","Rishi","Rohan","Priya","Rakesh","Vinay","Tanu","Ajay","Nikhil","Arav","Madhu","Sagar","Anju","Rajat","Anjali","Saloni","Mayur","Pankaj","Hrithik");

        $female_arr = array("Sonarika","Shalu","Shruti","Tanu","Madhu","Anju","Anjali","Saloni");
        $city_arr = array("Bhopal","Indore","Jaipur","Pune");
        // Insert random 10 records
        foreach($names_arr as $name){

            $gender = "Male";
            if(in_array($name,$female_arr)){
                $gender = "Female";
            }

            Employees::create([
                'emp_name' => $name,
                'email' => strtolower($name).'@makitweb.com',
                'gender' => $gender,
                'city' => Arr::random($city_arr),
                'status' => 1
            ]);
        }
    }
}
