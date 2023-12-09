<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->unsignedInteger('id');
           $table->string('product')->comment('商品名');
            $table->string('image')->comment('image');
             $table->string('company')->comment('商品名');
            $table->unsignedBigInteger('cost')->comment('価格');
$table->unsignedBigInteger('user1_id')->comment('このタスクの所有者');
            $table->foreign('user1_id')->references('id')->on('users'); // 外部キー制約


            //$table->timestamps();
            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
}
