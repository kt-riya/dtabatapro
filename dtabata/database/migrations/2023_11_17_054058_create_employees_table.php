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
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('designations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('department_id')->references('id')->on('departments');
            $table->string('description');
            $table->timestamps();
        });

        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->boolean('Gender')->default(1)->comment('1:Male,2:Female,3:Others');
            $table->date('Dob')->nullable();
            $table->text('Address')->nullable();
            $table->string('Mobile',15)->nullable();
            $table->string('Email');
            $table->foreignId('department_id')->references('id')->on('departments');
            $table->foreignId('designation_id')->references('id')->on('designations');
            $table->date('Doj')->nullable();
            $table->string('Image');
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
        Schema::dropIfExists('employees');
        Schema::dropIfExists('designations');
        Schema::dropIfExists('departments');
    }
};
