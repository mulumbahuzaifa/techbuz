<?php

namespace App\Livewire\Admin;

use App\Models\Blog;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class AdminEditBlogsComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $description;
    public $image;
    public $newImage;
    public $blog_id;

    public function mount($blog_id){
        $blog = Blog::where('slug', $blog_id)->first();
         $this->name =$blog->name;
         $this->description =$blog->description;
         $this->image =$blog->image;
         $this->blog_id =$blog->id;
    }



    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'description' => 'required',
        ]);
    }

    public function updateBlog(){
        $this->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $blog = Blog::find($this->blog_id);
        $blog->name = $this->name;
        $blog->description = $this->description;
        if($this->newImage){
            $imageName = Carbon::now()->timestamp. '.' . $this->newImage->extension();
            $this->newImage->storeAs('blogs', $imageName);
            $blog->image = $imageName;
        }

        $blog->save();
        return redirect()->route('admin.blogs');
        session()->flash('message', 'Blog has been created Successfully');
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-blogs-component')->layout('layouts.base');
    }
}
