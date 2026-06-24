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
        Schema::create('leads', function (Blueprint $table) {

            $table->id();

            $table->string('first_name');
            $table->string('last_name');

            $table->string('company')->nullable();

            $table->string('email');
            $table->string('phone')->nullable();


            $table->enum('status', [
                'new',
                'contacted',
                'follow_up',
                'qualified',
                'won',
                'lost'
            ])->default('new');


            $table->integer('score')->default(0);


            $table->enum('temperature', [
                'cold',
                'warm',
                'hot'
            ])->default('cold');


            $table->decimal(
                'opportunity_value',
                10,
                2
            )->default(0);


            $table->timestamp(
                'last_contacted_at'
            )->nullable();


            $table->text('notes')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
