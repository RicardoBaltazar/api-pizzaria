<?php

namespace App\Repositories\Eloquent;

use App\Repository\Interfaces\UserRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class UserRepository extends BaseEloquentRepository implements UserRepositoryInterface
{
    protected Model $model;

    public function __construct() {
        $this->model = new Model;
    }

    public function usersAdmin()
    {
        return 'retornando user admin';
    }
}
