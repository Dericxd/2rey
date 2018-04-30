<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'code', 'name', 'amount', 'tax', 'category_id', 'deta_id', 'user_id',
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function moviments()
    {
        return $this->hasMany(Moviment::class);
    }
    public function histories()
    {
        return $this->hasMany(History::class);
    }
    public function stores()
    {
        return $this->belongsToMany(Store::class);
    }
}
