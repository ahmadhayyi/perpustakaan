<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];

    protected $with = (['category']);

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function transaction(){
        return $this->hasMany(Transaction::class);
    }
}
