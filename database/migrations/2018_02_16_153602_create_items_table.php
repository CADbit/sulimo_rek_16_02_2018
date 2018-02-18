<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table){
            $table->increments('id')
                  ->length(11);
            $table->string('title');
            $table->string('desc');
            $table->date('date_from');
            $table->date('date_to');
            $table->integer('type_id')
                  ->length(11)
                  ->unsigned();
            $table->boolean('status');
            $table->timestamps();

            $table->foreign('type_id')
                  ->references('id')
                  ->on('types');
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
