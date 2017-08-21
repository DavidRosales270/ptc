<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnnouncesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('announces')) {
            Schema::create('announces', function (Blueprint $table) {
                $table->increments('id');
                $table->string('title');
                $table->string('description');
                $table->string('url');
                $table->date('date_show');
                $table->integer('type_announce');
                $table->float('price');
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
        //
    }
}
