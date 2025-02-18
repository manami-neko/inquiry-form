<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_id',
        'name',
        'email',
        'tel',
        'content'
    ];

    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
