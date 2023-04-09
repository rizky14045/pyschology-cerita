<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePsychologyOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psychology_orders', function (Blueprint $table) {
            $table->id();
            $table->string('session_id');
            $table->string('client_name');
            $table->string('client_phone');
            $table->integer('psychology_id');
            $table->date('date');
            $table->time('time_start');
            $table->time('time_end');
            $table->string('source');
            $table->integer('number_counseling_session');
            $table->integer('price_id');
            $table->integer('promo_id')->nullable();
            $table->boolean('reschedule')->default(false);
            $table->boolean('extended')->default(false);
            $table->integer('extended_counseling_minute')->default(0);
            $table->string('status');
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
        Schema::dropIfExists('psychology_orders');
    }
}
