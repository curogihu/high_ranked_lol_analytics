<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGameTeamInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_team_infos', function (Blueprint $table) {
            $table->unsignedBigInteger('game_id');
            $table->unsignedTinyInteger('team_color_id');
            $table->string('result');
            $table->unsignedInteger('elapsed_seconds');
            $table->unsignedBigInteger('match_date');

            $table->primary(['game_id', 'team_color_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game_team_infos');
    }
}
