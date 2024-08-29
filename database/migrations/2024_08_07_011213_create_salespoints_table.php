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
        Schema::create('salespoints_table', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description',10000);
            $table->string('position');
            $table->string('owner');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('pinterest');
            $table->string('instagram');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salespoints_table');
    }
};
