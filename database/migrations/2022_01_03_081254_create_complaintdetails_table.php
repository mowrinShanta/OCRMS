<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplaintdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaintdetails', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('time');
            $table->string('name');
            $table->string('address');
            $table->integer('cell');
            $table->string('email');
            $table->string('complainttype');
            $table->string('description');
            $table->string('image');
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
        Schema::dropIfExists('complaintdetails');
    }
}
