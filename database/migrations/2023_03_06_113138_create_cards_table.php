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
        Schema::create('cards', function (Blueprint $table) {
            $table->id();

            $table->string('name', 100)->unique();
            $table->tinyInteger('mana_cost')->unsigned();
            $table->string('mana_type', 100);
            $table->text('thumb');
            $table->string('type', 100);
            $table->string('edition', 100);
            $table->text('first_effect')->nullable();
            $table->text('second_effect')->nullable();
            $table->text('third_effect')->nullable();
            $table->text('fourth_effect')->nullable();
            $table->text('description')->nullable();
            $table->tinyInteger('strength')->unsigned();
            $table->tinyInteger('constitution')->unsigned();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};
