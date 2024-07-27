<?php

namespace App\Livewire\Page;

use App\Models\Article;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Aggiungi extends Component
{
   #[Validate('required|string')]
      public $name;
  #[Validate('required|string')]
    public $gender; 



    public function store(){

        $this->validate();
        Article::create([
            'name'=> $this->name,
            'gender'=> $this->gender,
           ]);

           session()->flash('status','prodotto inserito');

           $this->name='';
           $this->gender='';
           return $this->redirect('articoli');
    }

    public function render()
    {
      

        return view('livewire.page.aggiungi');
    }
}
