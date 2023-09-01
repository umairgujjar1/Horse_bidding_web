<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatagoreyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catagorey', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("video_link");
            $table->string("post_date");
            $table->string("post_time");
            $table->string("status");
            $table->string("member_name");
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
        Schema::dropIfExists('catagorey');
    }
}
