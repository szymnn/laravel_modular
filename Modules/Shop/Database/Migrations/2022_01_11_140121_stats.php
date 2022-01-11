<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Stats extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stats',function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('sales');
            $table->integer('purchases');
            $table->integer('satisfied');
            $table->integer('dissatisfied');
            $table->float('opinions');
            $table->float('exp');
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
        Schema::dropIfExists('stats');
    }
}
