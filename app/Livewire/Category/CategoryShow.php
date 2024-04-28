<?php

namespace App\Livewire\Category;

use Livewire\Attributes\Title;
use Livewire\Component;

#[title('Inicio Categorias')]
class CategoryShow extends Component
{
    public function render()
    {
        return view('livewire.category.category-show');
    }
}
