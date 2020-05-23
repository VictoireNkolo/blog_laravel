<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Repositories\AdminUserRepository;
use App\Repositories\UserRepository;

class DashboardController extends Controller
{
    public function index(AdminUserRepository $userRepository) {
        $users  =   $userRepository->getAllUsers();
        return view('admin.dashboard.index', ['users' => $users]);
    }
}
