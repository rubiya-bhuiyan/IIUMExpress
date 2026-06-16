<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = [
        'user_id',
        'food_item_id',
        'rating',
        'review',
    ];

    public function foodItem()
    {
        return $this->belongsTo(FoodItem::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
