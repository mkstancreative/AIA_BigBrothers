<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('member_id')->unique()->nullable();
            $table->string('profile_pics')->nullable();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('email')->unique();
            $table->bigInteger('phone')->nullable();
            $table->string('dob')->nullable();
            $table->string('marital')->nullable();
            $table->string('nationality')->nullable();
            $table->string('pob')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('address')->nullable();
            $table->string('profession')->nullable();
            $table->string('business')->nullable();
            $table->string('from_aia')->nullable();
            $table->string('hobbies')->nullable();
            $table->string('interest')->nullable();
            $table->string('convicted')->nullable();
            $table->string('medical')->nullable();
            $table->string('character')->nullable();
            $table->string('confidentiality')->nullable();
            $table->string('liability')->nullable();
            $table->string('declaration')->nullable();
            $table->string('status')->nullable();
            $table->string('official_name')->nullable();
            $table->string('date_approved')->nullable();
            $table->timestamps();
        });
    }
    
    
    
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
