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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('appliaction_id')->unique();
            $table->string('First_name');
            $table->string('Middle_name');
            $table->string('last_name');
            $table->string('email')->default('null');
            $table->string('age');
            $table->string('gender');
            $table->string('aadhar')->default('null');
            $table->string('phone_no');
            $table->string('disease');
            $table->string('address')->default("null");
            $table->string('city')->default("null");
            $table->string('state')->default("null");
            $table->string('Postal_Code')->default("null");
            $table->string('country')->default("null");
            $table->string('Referal_type');
            $table->string('department');
            $table->string('doctor_id');
            $table->string('room_no');
            $table->string('appointment_time');
            $table->string('pay_amount');
            $table->string('hospital_type');
            $table->string('status')->default('paid');
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
        Schema::dropIfExists('patients');
    }
};
