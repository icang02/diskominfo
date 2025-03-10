<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Document extends Model
{
    protected $guarded = [];

    public function document_type(): BelongsTo
    {
      return $this->belongsTo(DocumentType::class);
    }

    public function organization_detail(): BelongsTo
    {
      return $this->belongsTo(OrganizationDetail::class);
    }
}
