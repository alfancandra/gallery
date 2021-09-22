<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'deskripsi',
        'category_id',
        'images',
        'active'
    ];

    public function incrementReadCount() {
        $this->reads++;
        return $this->save();
    }
}
