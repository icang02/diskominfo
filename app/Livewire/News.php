<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\News as ModelsNews;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class News extends Component
{
  use WithPagination;

  public $slug;
  #[Url]
  public $search = '';

  public function mount($slug)
  {
    $this->slug = $slug;
  }

  public function handleSearch()
  {
    $this->resetPage();
  }

  public function render()
  {
    $newsQuery = ModelsNews::orderBy('created_at', 'desc');

    // Apply category filter if slug is not 'all'
    if ($this->slug != 'all') {
      $newsQuery->whereHas('category', function ($query) {
        $query->where('slug', $this->slug);
      });
    }

    // Apply search filter if search term is provided
    if ($this->search) {
      $newsQuery->where(function ($query) {
        $query->where('title', 'like', '%' . $this->search . '%');
      });
    }

    $news = $newsQuery->paginate(5);
    $categories = Category::withCount('news')->get();

    // dd(count($news->items()));
    return view('livewire.news', compact(
      'news',
      'categories'
    ));
  }
}
