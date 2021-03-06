<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('lastname');
            $table->integer('doc_id');
            $table->string('address');
            $table->integer('phone');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->boolean('active')->default(0);
            $table->string('position');
            $table->string('permit');
            $table->date('date');
            $table->dateTime('startDate');
            $table->dateTime('endDate');
            $table->string('imageQr');
            $table->rememberToken();
            $table->timestamps();
            $table->integer('company_id')->unsigned();
            $table->Foreign('company_id')->references('id')->on('companies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
