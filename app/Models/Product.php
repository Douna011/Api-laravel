<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products'; // optional, just to be explicit

    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'image', // this is now binary
    ];

    // Automatically append Base64 version of image in API responses
    protected $appends = ['image_base64'];

    /**
     * Accessor to get image as Base64 string
     */
    public function getImageBase64Attribute()
    {
        return $this->image ? base64_encode($this->image) : null;
    }
}
