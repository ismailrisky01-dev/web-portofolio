<?php

namespace App\Livewire;

use Livewire\Component;

class PhotoGallery extends Component
{
    public array $photos = [];
    public string $selectedCategory = 'All';

    public function mount(array $photos)
    {
        $this->photos = $photos;
    }

    public function setCategory(string $category)
    {
        $this->selectedCategory = $category;
    }

    public function getCategoriesProperty(): array
    {
        $categories = collect($this->photos)->pluck('category')->unique()->toArray();
        array_unshift($categories, 'All');
        return $categories;
    }

    public function getFilteredPhotosProperty(): array
    {
        if ($this->selectedCategory === 'All') {
            return $this->photos;
        }

        return collect($this->photos)->filter(function ($photo) {
            return $photo['category'] === $this->selectedCategory;
        })->values()->toArray();
    }

    public function render()
    {
        return view('livewire.photo-gallery');
    }
}
