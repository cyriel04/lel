<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EventType extends Model
{
  use SoftDeletes;
  protected $table = 'tblEventType';
  protected $primaryKey = 'eventTypeCode';
  protected $fillable = ['eventTypeName', 'eventTypeDesc'];
  protected $dates = ['created_at', 'updated_at', 'deleted_at'];
  protected $casts = ['eventTypeCode' => 'string'];
}
