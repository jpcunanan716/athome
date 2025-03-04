<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Media;
use App\Models\House;
use Illuminate\Support\Facades\Session;

class MediaManager extends Component
{
    use WithFileUploads;

    public $mediaList; 
    public $images = []; // Multi-file upload support
    public $imagesPreview = []; // Store image previews
    public $house_id; 

    public function mount()
    {
        $this->house_id = Session::get('last_created_house_id');
        $this->mediaList = Media::with('house')->get();
    }

    public function updatedImages()
    {
        $this->imagesPreview = [];

        foreach ($this->images as $image) {
            $this->imagesPreview[] = $image->temporaryUrl();
        }
    }

    public function save()
    {
        $this->validate([
            'images.*' => 'required|image|max:1024', // Validate each image
        ]);

        foreach ($this->images as $image) {
            $imagePath = $image->store('media', 'public');

            Media::create([
                'image_path' => $imagePath,
                'house_id' => $this->house_id,
            ]);

            return redirect('/home');
        }

        $this->mediaList = Media::with('house')->get();
        $this->reset(['images', 'imagesPreview']);
    }

    public function delete($id)
    {
        $media = Media::findOrFail($id);
        $media->delete();
        $this->mediaList = Media::with('house')->get();
    }

    public function render()
    {
        return view('livewire.media-manager');
    }
}
