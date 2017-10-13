<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'author_name',
    'author_id',
    'title',
    'category',
    'url_image',
    'image_path',
    'chapters',
    'description',
    'date',
    'rating',
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
      'password', 'remember_token',
  ];
}
