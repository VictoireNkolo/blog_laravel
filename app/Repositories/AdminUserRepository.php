<?php


namespace App\Repositories;


use App\Model\User;

class AdminUserRepository
{

    /**
     * @var User
     */
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function getAllUsers() {
        return $this->user::paginate(1);
    }
}
