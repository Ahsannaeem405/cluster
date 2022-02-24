<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('Event_type')->nullable();
            $table->string('join_cluster_ID')->nullable();
            $table->string('location')->nullable();
            $table->timestamp('datetimepicker')->nullable();
            $table->time('time')->nullable();
            $table->string('time_type')->nullable();
            $table->string('timezone')->nullable();
            $table->string('description')->nullable();
            $table->string('type_Emj')->nullable();
            $table->string('cluster_id')->nullable();

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
        Schema::dropIfExists('events');
    }
}
