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
        Schema::create('joins', function (Blueprint $table) {
            $table->id();
            $table->mediumText('nom');
            $table->mediumText('postnom');
            $table->mediumText('prenom');
            $table->mediumText('mail');
            $table->mediumText('phone');
            $table->date('datee');
            $table->mediumText('province');
            $table->mediumText('niveau');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('joins');
    }
};
