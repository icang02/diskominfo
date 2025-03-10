<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class OrganizationDetail extends Model
{
    protected $guarded = [];

    public function documents(): HasMany
    {
      return $this->hasMany(Document::class);
    }
}
