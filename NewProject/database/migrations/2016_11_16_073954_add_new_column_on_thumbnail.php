<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNewColumnOnThumbnail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('thumbnails', function (Blueprint $table) {
            $table->integer('thumbnail_id')->unsigned();
            $table->string('title',15);
            $table->string('desc');
            $table->string('href',35)->default(' ');
            $table->string('goto',15)->default(' ');
            $table->string('btn',15)->default('btn');
            $table->string('position',15)->default(' ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('thumbnails', function (Blueprint $table) {
            //
        });
    }
}
