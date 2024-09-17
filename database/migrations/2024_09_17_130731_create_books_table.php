<?php

use App\Models\Books;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('author');
            $table->string('title');
            $table->integer('pieces');
            $table->timestamps();
        });

        Books::create
        ([
            'author' => 'Ady Endre', 
            'title' => 'vmi',
            'pieces' => 10,
        ]);

        Books::create
        ([
            'author' => 'Petőfi Sándor', 
            'title' => 'vmi',
            'pieces' => 25,
        ]);

        Books::create
        ([
            'author' => 'Móra Ferenc', 
            'title' => 'vmi',
            'pieces' => 5,
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
