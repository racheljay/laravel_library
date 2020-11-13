<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BookAuthors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_authors', function (Blueprint $table) {
            $table->bigIncrements('book_authors_id');
            $table->unsignedBigInteger('ref_user_id');
            $table->unsignedBigInteger('ref_book_id');

            $table->foreign('ref_user_id')->references('user_id')->on('users')->onDelete('cascase');
            $table->foreign('ref_book_id')->references('book_id')->on('books')->onDelete('cascade');
        });
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
