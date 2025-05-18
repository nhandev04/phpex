<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the users.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        // Create a sample associative array of users
        $users = [
            [
                'id' => 1,
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'position' => 'Developer',
                'created_at' => '2025-01-15'
            ],
            [
                'id' => 2,
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'position' => 'Designer',
                'created_at' => '2025-02-20'
            ],
            [
                'id' => 3,
                'name' => 'Mike Johnson',
                'email' => 'mike@example.com',
                'position' => 'Manager',
                'created_at' => '2025-03-10'
            ],
            [
                'id' => 4,
                'name' => 'Sarah Williams',
                'email' => 'sarah@example.com',
                'position' => 'Developer',
                'created_at' => '2025-04-05'
            ],
        ];

        // Pass the users data to the view
        return view('users', ['users' => $users]);
    }

    /**
     * Display a listing of the users with a custom title.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index2()
    {
        // Create a sample associative array of users (reusing from index)
        $users = [
            [
                'id' => 1,
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'position' => 'Developer',
                'created_at' => '2025-01-15'
            ],
            [
                'id' => 2,
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'position' => 'Designer',
                'created_at' => '2025-02-20'
            ],
            [
                'id' => 3,
                'name' => 'Mike Johnson',
                'email' => 'mike@example.com',
                'position' => 'Manager',
                'created_at' => '2025-03-10'
            ],
            [
                'id' => 4,
                'name' => 'Sarah Williams',
                'email' => 'sarah@example.com',
                'position' => 'Developer',
                'created_at' => '2025-04-05'
            ],
        ];

        // Custom title for the page
        $title = 'User Management Dashboard';

        // Pass the users data and title to the view
        return view('userindex2', [
            'users' => $users,
            'title' => $title
        ]);
    }
}
