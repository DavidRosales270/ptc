<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $databasePrefix = (Config::get('forum.database.prefix') ? Config::get('forum.database.prefix') . '_' : '');

        // Create replies table
        Schema::create(
            $databasePrefix . 'likes',
            function (Blueprint $table) use ($databasePrefix) {
                $table->engine = 'InnoDB';

                $table->increments('id');
                $table->integer('user_id')->unsigned();


                $table->integer('reply_id')->unsigned();


                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $databasePrefix = (Config::get('forum.database.prefix') ? Config::get('forum.database.prefix') . '_' : '');

        // Delete table replies
        Schema::drop($databasePrefix . 'likes');
    }

}
