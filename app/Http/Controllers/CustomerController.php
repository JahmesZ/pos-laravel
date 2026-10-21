<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class CustomerController extends Controller
{
    public function index(): View
    {
        // Temporary static data source (to be replaced by a database model later).
        $customers = [
            ['id' => 1, 'name' => 'Maria Santos',     'email' => 'maria.santos@example.com',  'phone' => '0917-123-4567', 'address' => 'Quezon City'],
            ['id' => 2, 'name' => 'Juan Dela Cruz',   'email' => 'juan.delacruz@example.com', 'phone' => '0918-234-5678', 'address' => 'Manila'],
            ['id' => 3, 'name' => 'Ana Reyes',        'email' => 'ana.reyes@example.com',     'phone' => '0919-345-6789', 'address' => 'Makati City'],
            ['id' => 4, 'name' => 'Carlos Garcia',    'email' => 'carlos.garcia@example.com', 'phone' => '0920-456-7890', 'address' => 'Pasig City'],
            ['id' => 5, 'name' => 'Liza Mendoza',     'email' => 'liza.mendoza@example.com',  'phone' => '0921-567-8901', 'address' => 'Taguig City'],
            ['id' => 6, 'name' => 'Paolo Villanueva', 'email' => 'paolo.v@example.com',       'phone' => '0922-678-9012', 'address' => 'Mandaluyong'],
        ];

        return view('customers.index', [
            'title' => 'Customer Accounts',
            'customers' => $customers,
        ]);
    }
}
