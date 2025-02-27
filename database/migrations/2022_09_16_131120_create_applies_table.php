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
        Schema::create('applies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('education');
            $table->text('school');
            $table->string('major');
            $table->string('cv');
            $table->timestamps();
            // $table->string('idcard');
            // $table->string('gander');
            // $table->text('address');
            // $table->text('city');
            // $table->text('date');
            // $table->string('gpa');
            // $table->text('graduation');
            // $table->string('course1')->nullable();
            // $table->text('course2')->nullable();
            // $table->text('course3')->nullable();
            // $table->text('experience1')->nullable();
            // $table->text('experience2')->nullable();
            // $table->text('experience3')->nullable();
            // $table->string('image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applies');
    }
};
