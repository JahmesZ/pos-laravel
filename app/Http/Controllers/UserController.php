<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        // Temporary static data source (to be replaced by a database model later).
        $users = [
            ['id' => 1, 'name' => 'Admin User',     'username' => 'admin',    'email' => 'admin@pos.test',    'role' => 'Administrator', 'status' => 'Active'],
            ['id' => 2, 'name' => 'Rosa Bautista',  'username' => 'rbautista','email' => 'rosa@pos.test',     'role' => 'Manager',       'status' => 'Active'],
            ['id' => 3, 'name' => 'Miguel Torres',  'username' => 'mtorres',  'email' => 'miguel@pos.test',   'role' => 'Cashier',       'status' => 'Active'],
            ['id' => 4, 'name' => 'Grace Lim',      'username' => 'glim',     'email' => 'grace@pos.test',    'role' => 'Cashier',       'status' => 'Inactive'],
            ['id' => 5, 'name' => 'Daniel Ramos',   'username' => 'dramos',   'email' => 'daniel@pos.test',   'role' => 'Inventory Clerk','status' => 'Active'],
        ];

        return view('users.index', [
            'title' => 'User Accounts',
            'users' => $users,
        ]);
    }
}
