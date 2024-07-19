<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->id();
            $table->string('gender');
            $table->string('phoneNumber');
            $table->string('city');
            $table->string('status')->default('pending');
            $table->string('country');
            $table->string('is_validate')->default('false');
            $table->string('cohortJoin');
            $table->string('ref_flooz')->nullable();
            $table->string('ref_tmoney')->nullable();
            $table->string('auth_number')->nullable();
            $table->string('tracking_number')->nullable();
            $table->string('experienceDesign');
            $table->string('paymentOption');
            $table->double('paymentAmount');
            $table->string('confirmationCode');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('event_id')->constrained('events')->onDelete('cascade');
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
        Schema::dropIfExists('inscriptions');
    }
}
