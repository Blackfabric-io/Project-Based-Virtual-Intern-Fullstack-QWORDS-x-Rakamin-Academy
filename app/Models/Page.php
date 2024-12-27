<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'order'];

    /**
     * Get the sections for the page.
     */
    public function sections()
    {
        return $this->hasMany(Section::class);
    }
}
