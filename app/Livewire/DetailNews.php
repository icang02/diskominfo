<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\News;
use Livewire\Component;

class DetailNews extends Component
{
  public $slug;

  public function mount($slug)
  {
    $this->slug = $slug;
  }

  public function render()
  {
    $news = News::where('slug', $this->slug)->first();
    abort_if(!$news, 404);
    $categories = Category::withCount('news')->get();

    $prevNews = News::where('created_at', '<', $news->created_at)
      ->select('slug')
      ->orderBy('created_at', 'desc')
      ->first();

    $nextNews = News::where('created_at', '>', $news->created_at)
      ->select('slug')
      ->orderBy('created_at', 'asc')
      ->first();

    return view('livewire.detail-news', compact(
      'news',
      'categories',
      'prevNews',
      'nextNews',
    ));
  }
}
