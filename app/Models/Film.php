<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    /** @var string[]  */
    protected $fillable = [
        'title',
        'overview',
    ];

    public function getPosterPathAttribute($value): string
    {
        $apiImageUrl = env('THEMOVIEDB_API_IMAGE_URL');
        return $apiImageUrl . $value;
    }
}
