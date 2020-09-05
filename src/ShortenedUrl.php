<?php


namespace Hpez\UrlShortener;


use Illuminate\Database\Eloquent\Model;

class ShortenedUrl extends Model
{
    protected $fillable = [
        'url',
        'shortened'
    ];
}
