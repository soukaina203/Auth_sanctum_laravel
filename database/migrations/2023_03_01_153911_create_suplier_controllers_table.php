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
        Schema::create('suplier_controllers', function (Blueprint $table) {
            $table->id();
            $table->string('FullName');
            $table->string('phoneNumber');
            $table->string('email');
            $table->string('Localisation');
            $table->string('fonction');
            $table->string('otherContact');
            $table->string('rating');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suplier_controllers');
    }
};
