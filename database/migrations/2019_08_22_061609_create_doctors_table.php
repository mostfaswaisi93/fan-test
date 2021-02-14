<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
              $table->bigIncrements('id');
            $table->string('name');
            $table->string('surname');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('aderss');
            $table->string('specialization');
            $table->string('qualification');
            $table->integer('phone');
            $table->string('email')->unique();
            $table->enum('gender', ['male', 'female']);

            $table->date('DOB');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctors');
    }
}
