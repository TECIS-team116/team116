<?php
 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
class CreateItemsTable extends Migration
{
    /**
        * Run the migrations.
        *
        * @return void
        */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->string('name',100);
            $table->string('status',100);
            $table->smallInteger('type');
            $table->string('detail',500);
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
        Schema::dropIfExists('items');
    }
}