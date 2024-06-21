<?php

namespace App\Livewire\Admin;

use App\Models\Blog;
use Livewire\Component;
use Livewire\WithPagination;

class AdminBlogsComponent extends Component
{
    use WithPagination;

    public function render()
    {
        $blogs = Blog::paginate(12);
        return view('livewire.admin.admin-blogs-component',['blogs' => $blogs])->layout('layouts.base');
    }
}
