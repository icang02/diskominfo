<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\News as ModelsNews;
use Livewire\Component;
use Livewire\WithPagination;

class News extends Component
{
  use WithPagination;

  public $slug;

  public function mount($slug)
  {
    $this->slug = $slug;
  }

  public function render()
  {
    $news = $this->slug == 'all' ?
      ModelsNews::orderBy('created_at', 'desc')->paginate(5) :
      ModelsNews::orderBy('created_at', 'desc')
      ->whereHas('category', function ($query) {
        $query->where('slug', $this->slug);
      })
      ->paginate(5);
    $categories = Category::withCount('news')->get();

    return view('livewire.news', compact(
      'news',
      'categories'
    ));
  }
}
