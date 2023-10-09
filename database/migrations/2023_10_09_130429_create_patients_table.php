<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
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
            $table->foreignId('user_id')->constrained();
            $table->string('name')->default('Empty');
            $table->string('mail')->default('Enter Your E-Mail');
            $table->string('nic')->default('Enter Your NIC');
            $table->integer('contact')->default('0123456789');
            $table->string('address')->default('Your Address');
            $table->string('bloodG')->default('Blood Group');
            $table->string('allergic')->default('Your Alagics');
            $table->integer('type')->default('0');
            $table->integer('profile')->default('0');
            $table->boolean('status')->default('1');

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
}