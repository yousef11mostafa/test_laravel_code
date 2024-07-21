<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('doctor_service', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("doctor_id");
            $table->unsignedBigInteger("service_id");


            $table->foreign('doctor_id')->references('id')->on("doctors")
            ->onUpdate("cascade")->onDelete('cascade');

            $table->foreign('service_id')->references('id')->on("services")
            ->onUpdate("cascade")->onDelete('cascade');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctor_service');
    }
};
