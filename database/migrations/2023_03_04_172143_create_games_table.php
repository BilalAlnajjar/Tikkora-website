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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('name_team_one')->nullable();
            $table->text('logo_team_one')->nullable();
            $table->string('name_team_two')->nullable();
            $table->text('logo_team_two')->nullable();
            $table->string('level_team_one')->nullable();
            $table->string('level_team_two')->nullable();
            $table->string('speaker')->nullable();
            $table->string('country')->nullable();
            $table->string('league')->nullable();
            $table->text('logo_league')->nullable();
            $table->string('round')->nullable();
            $table->string('stadium')->nullable();
            $table->string('chanel')->nullable();
            $table->timestamp('partydate')->nullable();
            $table->timestamp('time')->nullable();
            $table->string('result')->nullable();
            $table->enum('state',['انتهت','جارية الان','بعد قليل','لم تبدأ بعد'])->default('لم تبدأ بعد');
            $table->enum('type',['today','tomorrow','yesterday'])->default('today');

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
        Schema::dropIfExists('games');
    }
};
