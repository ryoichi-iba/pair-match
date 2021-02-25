<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
  public function tournament() {
    return $this->belongsTo(Tournament::class);
  }
}
