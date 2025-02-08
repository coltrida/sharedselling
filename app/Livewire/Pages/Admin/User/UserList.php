<?php

namespace App\Livewire\Pages\Admin\User;

use App\Services\UserService;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class UserList extends Component
{
    use WithPagination, WithoutUrlPagination;

    public $search;

    public function render(UserService $userService)
    {
        return view('livewire.pages.admin.user.user-list', [
            'list' => $userService->listPaginate($this->search)
        ]);
    }
}
