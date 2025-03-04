<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\House;
use Livewire\WithPagination;

class HouseListings extends Component
{
    use WithPagination;

    public function render()
    {
        $houses = House::paginate();
        return view('livewire.house-listings', compact('houses'));
    }
}
