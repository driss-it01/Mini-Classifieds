<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    /** @use HasFactory<\Database\Factories\AdFactory> */
    use HasFactory;
    protected $fillable = [
        'user_id','category_id','title','description','price','location','image','published_at'
    ];
    public function user(){ return $this->belongsTo(User::class); }
    public function category(){ return $this->belongsTo(Category::class); }
}
