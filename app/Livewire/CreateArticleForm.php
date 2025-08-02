<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class CreateArticleForm extends Component
{
    public $title;
    public $description;
    public $price;
    public $category;
    public $article;
    public $categories;

    public function rules()
    {
        return [
            'title' => 'required|min:5',
            'description' => 'required|min:10',
            'price' => 'required|numeric',
            'category' => 'required|exists:categories,id',
        ];
    }

    public function store()
    {
        $this->validate();

        $this->article = Article::create([
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'category_id' => $this->category,
            'user_id' => Auth::id(),
            
           

        ]);

        session()->flash('success', 'Articolo creato correttamente');

        
        $this->reset(['title', 'description', 'price', 'category']);
    }


    public function mount()
    {
       $this->categories = Category::all();
       $this->category = null;
    }

    public function render()
    {
        return view('livewire.create-article-form');
    }
}

