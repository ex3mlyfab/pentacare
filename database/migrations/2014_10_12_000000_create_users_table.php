<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('last_name');
            $table->string('other_names');
            $table->string('phone')->unique();
            $table->string('age_at_reg')->nullable();
            $table->string('dob')->nullable();
            $table->string('avatar')->nullable();
            $table->string('folder_number')->nullable();
            $table->string('occupation')->nullable();
            $table->string('sex')->nullable();
            $table->string('marital_status')->nullable();
            $table->text('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('national_id')->nullable();
            $table->string('source')->nullable();
            $table->string('nok')->nullable();
            $table->string('nok_relationship')->nullable();
            $table->string('nok_phone')->nullable();
            $table->string('nok_address')->nullable();
            $table->unsignedBigInteger('registered_by')->default(1);
            $table->string('email')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
