<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('author_infos', function (Blueprint $table) {

            $table->unsignedBigInteger('author_id');

            $table->foreign('author_id')
            ->references('id')
            ->on('authors');

            $table->string("nationality", 50);
            $table->text("biography");
            $table->string("image")->default("http://via.placeholder.com/200x300");
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
        Schema::dropIfExists('author_infos');
    }
}
