<?php

namespace App\Models;

use App\Models\ListActor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Video extends Model
{
  use HasFactory;
  protected $guarded = [];

  public function list_actors()
  {
    return $this->hasMany(ListActor::class);
  }
}
