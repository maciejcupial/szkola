<?php
// Lesson 27: the model. One object = one row of the products table.

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // The table has no created_at and updated_at columns.
    public $timestamps = false;

    // Columns that Product::create() may fill from the form.
    protected $fillable = ['name', 'price'];

    protected $casts = ['price' => 'decimal:2'];
}
