<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type_table extends Model
{
    public function link()
    {
        return $this->belongsTo(Link_table::class, 'type_id', 'link_id');
    }

    public function version()
    {
        return $this->belongsTo(Version_table::class, 'type_id', 'version_id');
    }
}
