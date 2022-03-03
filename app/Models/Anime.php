<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Anime extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
      'title',
      'slug',
      'quality',
      'description',
      'poster',
      'show_in',
      'status',
      'published_at',
    ];

    protected $casts = [
      'seo_content' => 'array',
      'show_in' => 'array',
  ];
}
