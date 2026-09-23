<?php
// Lesson 27: the same table as setup.sql from php/10, written in PHP.

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->decimal('price', 8, 2);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
