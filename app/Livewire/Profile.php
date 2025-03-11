<?php

namespace App\Livewire;

use App\Models\OrganizationDetail;
use Livewire\Component;

class Profile extends Component
{
  public $page;

  public function mount($page)
  {
    $this->page = $page;
  }

  public function render()
  {
    $data = OrganizationDetail::where('type', $this->page)->first();
    abort_if(!$data, 404);

    return view('livewire.profile', compact(
      'data'
    ));
  }
}
