<?php

namespace App\Livewire\Page;
use App\Models\Article;
use Livewire\Component;

class Lista extends Component
{

    public function destroy(Article $article)
    {
        $article->delete();
        session()->flash('success', 'Prodotto cancellato con successo');
    }

    public function render()
    {

        $AllArticles= Article::all();
        return view('livewire.page.lista', ['AllArticles'=>$AllArticles]);
    }
}
