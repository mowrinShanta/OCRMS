<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplainersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complainers', function (Blueprint $table) {
            $table->id();
            $table->integer('issue_date');
            $table->double('issue_time');
            $table->string('complainer_name');
            $table->string('complainer_address');
            $table->integer('complainer_phone');
            $table->string('complainer_email');
            $table->string('complainer_type');
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
        Schema::dropIfExists('complainers');
    }
}

