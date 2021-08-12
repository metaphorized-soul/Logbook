<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->index();
            $table->string('From',255);
            $table->string('To',255);
            $table->unsignedInteger('initial_kilometers');
            $table->unsignedInteger('final_kilometers');
            $table->unsignedInteger('total_kilometers');
            $table->timestamps();
            
            $table->foreign('user_id')
            ->references('id')
            ->on('users')->onDelete('cascade');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('records');
    }
}
