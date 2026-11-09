<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $records = [
            ['username' => 'admin_aj', 'full_name' => 'Arthur Jones'],
            ['username' => 'cashier_beth', 'full_name' => 'Beth Diaz'],
            ['username' => 'mgr_carlo', 'full_name' => 'Carlo Villanueva'],
            ['username' => 'cashier_dan', 'full_name' => 'Daniel Garcia'],
            ['username' => 'staff_erica', 'full_name' => 'Erica Lim'],
        ];

        foreach ($records as $record) {
            User::create($record);
        }
    }
}