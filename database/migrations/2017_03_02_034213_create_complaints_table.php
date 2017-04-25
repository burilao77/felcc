<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComplaintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaints', function (Blueprint $table) {
            $table->increments('id');
            $table->text('description');
            $table->boolean('active');
            $table->enum('categories', ['homicide', 'abuse', 'Stole']);
            $table->string('nameDenouncer');
            $table->integer('ageDenouncer');
            $table->string('dniDenouncer');
            $table->enum('genderDenouncer', ['male', 'female']);
            $table->integer('phoneDenouncer');
            $table->string('addressDenouncer');
            $table->string('nameDenounced');
            $table->enum('genderDenounced', ['male', 'female']);
            $table->integer('phoneDenounced');
            $table->string('addressDenounced');
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
        Schema::dropIfExists('complaints');
    }
}
