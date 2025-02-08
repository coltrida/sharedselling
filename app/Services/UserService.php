<?php

namespace App\Services;

use App\Models\User;

class UserService
{
    public function list()
    {
        return User::clients()->get();
    }

    public function listPaginate($search)
    {
        return User::clients()->where('name', 'like', '%'.$search.'%')->paginate(5);
    }
}
