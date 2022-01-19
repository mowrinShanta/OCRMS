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
            $table->string('complainttype');
            $table->string('description');
            $table->string('image');
            $table->string('oname');
            $table->string('orname');
            $table->string('email');
            $table->string('cell');
            // $table->string('case_status')->default('pending');
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
