<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Version_table extends Model
{
    public function type()
    {
        return $this->hasMany(type_table::class, 'version_id', 'type_id');
    }
}
