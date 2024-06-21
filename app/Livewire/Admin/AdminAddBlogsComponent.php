<?php

namespace App\Livewire\Admin;

use App\Models\Blog;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class AdminAddBlogsComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $description;
    public $image;


    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);
    }

    public function addBlog(){
        $this->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        $blog = new Blog();
        $blog->name = $this->name;
        $blog->created_by = Auth::user()->id;

        $blog->description = $this->description;
        $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('blogs', $imageName);
        $blog->image = $imageName;
        $blog->save();
        return redirect()->route('admin.blogs');
        session()->flash('message', 'Blog has been created Successfully');
    }
    public function render()
    {
        return view('livewire.admin.admin-add-blogs-component')->layout('layouts.base');
    }
}
