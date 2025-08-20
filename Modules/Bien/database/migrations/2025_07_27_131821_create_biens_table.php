<?php

use Modules\User\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('biens', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->longText('description');
            $table->integer('surface');
            $table->integer('pieces');
            $table->integer('chambres');
            $table->integer('etage');
            $table->string('ville');
            $table->string('adresse');
            $table->boolean('vendre')->default(false);
            $table->boolean('disponible')->default(false);
            $table->integer('prix');
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biens');
    }
};
