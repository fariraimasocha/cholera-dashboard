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
        Schema::create('choleras', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('hospital');
            $table->string('gender');
            $table->string('status');
            $table->string('province');
            $table->string('district');
            $table->string('city');
            $table->string('age');
            $table->string('lat');
            $table->string('lng');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('choleras');
    }
};
