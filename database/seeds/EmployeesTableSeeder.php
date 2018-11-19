<?php

use Illuminate\Database\Seeder;
use App\Employee;
use Faker\Factory;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Employee::class, 10)->create();
        // DB::table('employees')->insert([
        //     'name' => 'Anna',
        //     'birth' => '1999-2-2',
        //     'gender' => true,
        //     'address' => 'No 1 Hacindo building',
        //     'email' => 'tuan@gmail.com',
        //     'phone' => '09658585855',
        //     'salary' => 5.23,
        //     'position' => 2,
        //     'notes' => 'rất hay đi muộn'
        // ]);
    }
}
