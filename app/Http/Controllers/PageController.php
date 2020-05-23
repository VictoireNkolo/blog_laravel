<?php


namespace App\Http\Controllers;


use App\Http\Requests\LoginRequest;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{

    /**
     * @var UserInterface
     */
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function login() {
        return view('page.login');
    }

    public function saveLogin(LoginRequest $request) {
        $is_login = $this->userRepository->checkLogin($request->only(['email', 'password']));
        if ($is_login) {
            if (Auth::user()->role == 'admin') {
                return redirect()->route('admin.dashboard.index');
            }
            return redirect()->route('user.dashboard.index');
        }
        session()->flash('error', 'login ou mot de passe incorrect');
        return redirect()->back();
    }

    public function logout() {
        session()->flush();
        Auth::logout();
        return redirect()->route('login.form');
    }
}
