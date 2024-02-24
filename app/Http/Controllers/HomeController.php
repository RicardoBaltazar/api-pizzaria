<?php

namespace App\Http\Controllers;

use App\Repository\Interfaces\UserRepositoryInterface;

class HomeController extends Controller
{
    protected $user;

    public function __construct(UserRepositoryInterface $user) {
        $this->user = $user;
    }

    public function usersAdmin()
    {
        return 'Retornando user admin do UserRepository';
    }
}
