<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppFromsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_froms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('loan_type')->nullable();;
            $table->string('title')->nullable();;
            $table->string('name')->nullable();;
            $table->date('dob')->nullable();;
            $table->string('gender')->nullable();;
            $table->string('nationality');
            $table->string('residentstatus');
            $table->date('current_time');
            $table->string('phone_number');
            $table->string('employed');
            $table->string('employee_type');
            $table->date('employer_current_time');
            $table->date('employement_length');
            $table->string('monthly_income');
            $table->string('bank_connection');
            $table->date('account_maintaining_time');
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
        Schema::dropIfExists('app_froms');
    }
}
