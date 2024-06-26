<?php

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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();

            $table->string('title', 50);
            $table->string('slug', 50)->unique();
            $table->text('description')->nullable();
            $table->text('thumb')->nullable();
            $table->string('price',10);
            $table->string('series',50);
            $table->date('sale_date');
            $table->string('type',30);
            // per passare gli array qui gli passo text
            $table->text('artists')->nullable();
            $table->text('writers')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
