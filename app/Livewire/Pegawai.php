<?php

namespace App\Livewire;

use App\Models\Employee;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class Pegawai extends Component
{
  use WithPagination;

  #[Url()]
  public $search = '';

  public function handleSearch()
  {
    $this->resetPage(); // Reset pagination saat melakukan pencarian
  }

  public function render()
  {
    // Query untuk Employee
    $employeeQuery = Employee::query()->with('position');

    // Terapkan pencarian jika ada input search
    if ($this->search) {
      $employeeQuery->where(function ($query) {
        $query->where('name', 'like', '%' . $this->search . '%') // Cari berdasarkan nama
          ->orWhere('nip', 'like', '%' . $this->search . '%'); // Cari berdasarkan NIP
      });
    }

    // Paginate hasil query
    $employees = $employeeQuery->paginate(8);

    return view('livewire.pegawai', compact('employees'));
  }
}
