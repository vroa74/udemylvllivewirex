<?php

namespace App\Livewire\Category;

use App\Models\Category;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\WithPagination;

#[title('Inicio Categorias')]
class CategoryComponent extends Component
{
    use WithPagination;
    public $search='';
    public $totalRegistros =0;
    public $cant;
    public $name;
    public $Id;

    public function render()
    {
        if($this->search !=''){
            $this->resetPage();
        }
        $this->totalRegistros = Category::count();
        $categories = Category::where('name','like','%'.$this->search.'%')->orderBy('id','desc')->paginate($this->cant);

        //$categories = collect();
        return view('livewire.category.category-component',['categories'=>$categories]);
    }
    public function mount()
    {

    }
    public function store()    {
        //dump('crear categoria');
        $rules = [
            'name' => 'required|min:5|max:255|unique:categories'
        ];
        $messages = [
            'name.required' => 'El nombre de la categoria es requerido',
            'name.min' => 'El nombre de la categoria debe tener al menos 5 caracteres',
            'name.max' => 'El nombre de la categoria debe tener maximo 255 caracteres',
            'name.unique' => 'El nombre de la categoria ya existe'
        ];
        $this->validate($rules,$messages);
        $category = new Category();
        $category->name = $this->name;
        $category->save();


        $this->dispatch('close-modal','modalCategory');
        $this->dispatch('msg','Categoria creada con exito');
        $this->reset('name');
    }
    public function edit(Category $category)
    {
        dump($category);
//        $this->Id = $category->id;
//        $this->name = $category->name;
//        $this->dispatch('open-modal','modalCategory');
//        $category = Category::find($id);
//        $this->Id = $category->id;
//        $this->name = $category->name;
//        $this->dispatch('open-modal','modalCategory');
    }



}
