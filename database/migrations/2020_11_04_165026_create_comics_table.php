<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('author_id')->constrained();
            $table->string("title", 30);
            $table->smallInteger("number");
            $table->string("edition", 50);
            $table->smallInteger("pages");
            $table->string("author", 50);
            $table->year("year");
            $table->string("poster")->default("https://via.placeholder.com/150x200");
            $table->float("price", 6, 2);
            $table->string("reading", 3);
            $table->text("description");
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
        Schema::dropIfExists('comics');
    }
}
