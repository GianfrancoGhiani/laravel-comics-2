<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50);
            $table->string('price', 20);
            $table->string('series', 250);
            $table->string('thumb')->nullable();
            $table->text('description')->nullable();
            $table->string('type');
            $table->date('sale_date');
            $table->text('artists')->nullable();
            $table->text('writers')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comics');
    }
};
