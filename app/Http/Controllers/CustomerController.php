<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            ['id' => 1, 'full_name' => 'Cristine Tio', 'email' => 'cristine@example.com', 'phone' => '09171234567'],
            ['id' => 2, 'full_name' => 'John Joshua Garcia', 'email' => 'joshua@example.com', 'phone' => '09182345678'],
            ['id' => 3, 'full_name' => 'Maxie Tio', 'email' => 'Maxie@example.com', 'phone' => '09193456789'],
            ['id' => 4, 'full_name' => 'Kate Tio', 'email' => 'kate@example.com', 'phone' => '09204567890'],
            ['id' => 5, 'full_name' => 'kevin', 'email' => 'kevin@example.com', 'phone' => '09215678901'],
        ];

        return view('customers.index', compact('customers'));
    }
}