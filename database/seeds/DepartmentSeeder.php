<?php

use App\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments_list = config('departments');

        foreach ($departments_list as $dep) {
            $newDep = new Department();
            $newDep->name = $dep["name"];
            $newDep->description = $dep["description"];
            $newDep->save();
        }
    }
}
