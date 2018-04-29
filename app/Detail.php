<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
  protected $fillable = [
    'cate_id', 'delivery', 'description',
  ];

  public function categories()
  {
    return $this->belongsTo(Category::class);
  }

  public function scopeCate_id($query, $cate_id)
  {
      if ($cate_id)

      return $query->where('cate_id', 'LIKE', "%$$cate_id%");
  }

  public function scopeDelivery($query, $delivery)
  {
      if ($delivery)

      return $query->where('delivery', 'LIKE', "%$delivery%");
  }

  public function scopeDescription($query, $description)
  {
      if ($description)

      return $query->where('cate_id', 'LIKE', "%$description%");
  }


}
