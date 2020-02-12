<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('admin_id'); // generated by
            $table->unsignedBigInteger('payment_mode_id');
            $table->string('service', 150);
            $table->decimal('amount', 20, 2);
            $table->decimal('vat', 20, 2)->nullable();
            $table->decimal('discount', 20, 2)->nullable();
            $table->decimal('gross_amount', 20, 2)->nullable();
            $table->string('invoice_no')->nullable();
            $table->string('status')->nullable();

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
        Schema::dropIfExists('payments');
    }
}
