<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complains', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('complain_type_id');
            $table->unsignedBigInteger('complain_source_id');
            $table->string('name', 100);
            $table->string('phone', 20)->nullable();
            $table->date('date');
            $table->string('complaints');
            $table->string('action_taken')->nullable();
            $table->string('note')->nullable();
            $table->string('attachment')->nullable();
            $table->unsignedBigInteger('assigned_to')->nullable();
            $table->unsignedBigInteger('recorded_by')->nullable();
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
        Schema::dropIfExists('complains');
    }
}
