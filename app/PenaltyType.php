<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PenaltyType extends Model
{
  use SoftDeletes;
  protected $table = 'tblpenaltytype';
  protected $primaryKey = 'strPenaTypeCode';
  protected $fillable = ['strPenaTypeName', 'txtPenaTypeDesc'];
  protected $dates = ['created_at', 'updated_at', 'deleted_at'];
  protected $casts = ['strPenaTypeCode' => 'string'];
}
