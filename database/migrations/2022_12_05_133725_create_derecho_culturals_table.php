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
        Schema::create('derecho_culturals', function (Blueprint $table) {
            $table->id();

            $table->string('consecutive');
            $table->string('activity_name');
            $table->date('activity_date');
            $table->time('start_time');
            $table->time('final_hour');

            $table->unsignedBigInteger('expertise_id');
            $table->foreign('expertise_id')->references('id')->on('expertises');
            
            $table->unsignedBigInteger('nac_id');
            $table->foreign('nac_id')->references('id')->on('nacs');
            
            $table->unsignedBigInteger('cultural_right_id');
            $table->foreign('cultural_right_id')->references('id')->on('culturals');

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
        Schema::dropIfExists('derecho_culturals');
    }
};
