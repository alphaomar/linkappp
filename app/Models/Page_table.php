<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page_table extends Model
{
    public function link()
    {
        return $this->belongsTo(Link_table::class, 'type_d', 'link_id');
    }
}
