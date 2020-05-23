<?php


namespace App\Repositories;


use App\Model\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserRepository implements UserInterface
{

    /**
     * @var User
     */
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * check user login status
     *
     * @param array $arrData
     */
    public function checkLogin(array $arrData): bool
    {
        $user   =   $this->user::where(['email' => $arrData['email']])->first();
        if ($user) {
            if (Hash::check($arrData['password'], $user->password)) {
                return Auth::attempt(['email' => $arrData['email'], 'password' => $arrData['password']], true);
            }
        }
        return false;
    }

}
