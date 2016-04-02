<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Players extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * Main plugins table
         */
        if(!Schema::hasTable('players')) {

            Schema::create('players', function ($table) {
                $table->increments('id');

                $table->string('name');
                $table->string('email');
                $table->string('avatar_url');
                $table->string('slack_id');
                $table->string('slack_name');

                $table->decimal('rating', 10 );

                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
}
