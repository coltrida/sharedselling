<?php

namespace App\Livewire\Pages\Admin\Tag;

use App\Services\CategoryService;
use App\Services\TagService;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class TagList extends Component
{
    use WithPagination, WithoutUrlPagination;

    public function elimina($id)
    {

    }

    public function render(TagService $tagService)
    {
        return view('livewire.pages.admin.tag.tag-list', [
            'list' => $tagService->listPaginate()
        ]);
    }
}
