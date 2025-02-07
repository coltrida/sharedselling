<?php

namespace App\Livewire\Pages\User;

use App\Services\UserService;
use Livewire\Component;

class UserList extends Component
{
    public function render(UserService $userService)
    {
        return view('livewire.pages.user.user-list', [
            'list' => $userService->list()
        ]);
    }
}
