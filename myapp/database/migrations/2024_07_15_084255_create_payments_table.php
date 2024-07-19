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
            $table->id();
            $table->string('status')->default('pending');
            $table->boolean('is_validate')->default(false);
            $table->string('ref_flooz')->nullable();
            $table->string('ref_tmoney')->nullable();
            $table->string('auth_number')->nullable();
            $table->string('tracking_number')->nullable();
            $table->string('paymentOption');
            $table->double('paymentAmount');
            $table->string('confirmationCode');
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('event_id')->constrained('events')->cascadeOnDelete();
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
