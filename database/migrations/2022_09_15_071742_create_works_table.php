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
        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->string('image')->nullable();
            $table->text('jobdesk');
            $table->text('education');
            $table->text('gender');
            $table->text('status');
            $table->text('deadline');
            $table->text('kriteria');
            $table->text('benefit');
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
        Schema::dropIfExists('works');
    }
};
