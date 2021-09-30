<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Link_table extends Model
{
    public function pagerelationship()
    {
        return $this->hasMany(Page_table::class, 'page_id', 'link_id');
    }

    public function typerelationship()
    {
        return $this->hasMany(type_tables::class, 'type_id','link_id');
    }
}
