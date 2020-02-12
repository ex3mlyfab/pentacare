<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitorBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitor_books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('visitor_purpose_id');
            $table->string('name', 100);
            $table->string('in_time', 100)->nullable();
            $table->string('out_time', 100)->nullable();
            $table->string('phone', 15)->nullable();
            $table->date('date')->nullable();
            $table->decimal('number', 10)->nullable();
            $table->string('note')->nullable();
            $table->string('is_active', 50)->nullable();
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
        Schema::dropIfExists('visitor_books');
    }
}
