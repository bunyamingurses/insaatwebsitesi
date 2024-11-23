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
        Schema::create("careerps",function (Blueprint $table){
            $table->id();
            $table->string("company")->nullable(false);
            $table->string("name")->nullable(false);
            $table->string("email")->nullable(false);
            $table->string("number")->nullable(false);
            $table->string("sector")->nullable(false);
            $table->text("message")->nullable(false);
            $table->dateTime("created_at")->nullable(false);
            $table->dateTime("updated_at")->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("careerps");
    }
};
