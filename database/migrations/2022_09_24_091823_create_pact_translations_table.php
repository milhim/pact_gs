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
        Schema::create('pact_translations', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('pact_id');
            $table->string('locale')->index();

            $table->string('type',50);
            $table->string('model',50);
            $table->string('accessoar',100);
            $table->string('noteOne',200);
            $table->string('noteTwo',200);
            $table->string('status',20);

            $table->unique(['pact_id', 'locale']);
            $table->foreign('pact_id')->references('id')->on('pacts')->onDelete('cascade');
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
        Schema::dropIfExists('pact_translations');
    }
};
