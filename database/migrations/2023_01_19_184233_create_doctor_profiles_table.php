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
        Schema::create('doctor_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->default("null");
            $table->string('name');
            $table->string('email'); 
            $table->string('gender');  
            $table->bigInteger('mobile'); 
            $table->string('department_id');      
            $table->string('specilist');
            $table->string('experience');
            $table->string('qualification');       
            $table->string('address')->default("null");
            $table->string('state')->default("null");
            $table->string('city')->default("null");
            $table->string('pincode')->default("null");
            $table->string('hospital_id');
            $table->string('image')->default("null");
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
        Schema::dropIfExists('doctor_profiles');
    }
};
