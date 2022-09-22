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
        Schema::create('pacts', function (Blueprint $table) {
            $table->id();
            $table->string('serial_number',100);
            $table->string('type',50);
            $table->string('model',50);
            $table->string('accessoar',100);
            $table->string('noteOne',200);
            $table->string('noteTwo',200);
            $table->string('status',20);

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
        Schema::dropIfExists('pacts');
    }
};
