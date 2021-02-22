<?php

use App\Employee;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employees = [
            [
                "name" => "Mario",
                "lastname" => "Ferrara",
                "background" => "laurea ad Harvard in Economia"
            ],
            [
                "name" => "Rocco",
                "lastname" => "Siffredi",
                "background" => "ESPERTO IN TUTTO"
            ],
        ];

        foreach ($employees as $emp) {
            $newEmp = new Employee();
            $newEmp->name = $emp["name"];
            $newEmp->lastname = $emp["lastname"];
            $newEmp->background = $emp["background"];
            $newEmp->save();
        }
    }
}
