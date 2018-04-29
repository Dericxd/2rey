<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
      'code','name','amount','tax','cate_id', 'deta_id', 'user_id',
    ];

    public function categories()
    {
      return $this->belongsTo(Category::class);
    }

    public function users()
    {
      return $this->belongsTo(User::class);
    }

    public function moviments(){
      return  $this->hasMany(Moviment::class);
    }
    public function histories(){
      return  $this->hasMany(History::class);
    }
    public function stores()
    {
      return $this->belongsToMany(Store::class);
    }
}
