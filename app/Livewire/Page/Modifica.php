<?php

namespace App\Livewire\Page;

use Livewire\Component;
use Livewire\Attributes\Validate;
use App\Models\Article;


class Modifica extends Component
{

   

    #[Validate('required|string')]
    public $name;
   #[Validate('required|string')]
   public $gender; 

   public Article $article;

   public function mount()
    {
       
        $this->name = $this->article->name;
        $this->gender = $this->article->gender;
       
    }

   public function update()
   {
       $this->validate();

       $this->article->update([
           'name' => $this->name,
           'gender' => $this->gender,
          
       ]);
    }

    public function render()
    {
        return view('livewire.page.modifica');
    }
}
