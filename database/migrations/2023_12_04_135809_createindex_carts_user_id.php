<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateindexCartsUserId extends Migration
{
      public function up()
    {
        //
        Schema::table('products', function (Blueprint $table) {
            $table->index('user1_id');
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
        Schema::table('products', function (Blueprint $table) {
            $table->dropIndex(['user1_id']);
        });
    }
}
