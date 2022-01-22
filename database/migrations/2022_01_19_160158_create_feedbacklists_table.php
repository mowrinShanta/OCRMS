<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbacklistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedbacklists', function (Blueprint $table) {
            $table->id();
            $table->integer('feedbacknumber');
            $table->string('officename');
            $table->string('officername');
            $table->string('complainername');
            $table->string('complaineremail');
            $table->string('complaintdetails');
            $table->string('improvement');
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
        Schema::dropIfExists('feedbacklists');
    }
}


