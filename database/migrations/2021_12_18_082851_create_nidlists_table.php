<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNidlistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nidlists', function (Blueprint $table) {
            $table->id();
            $table->double('nidnumber');
            $table->string('name');
            $table->string('fname');
            $table->string('mname');
            $table->double('cell');
            $table->string('email');
            $table->date('birthdate');
            $table->string('address');
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
        Schema::dropIfExists('nidlists');
    }
}
