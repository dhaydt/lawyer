<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppliedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applieds', function (Blueprint $table) {
            $table->id();
            $table->string('job_id',100);
            $table->string("name", 100);
            $table->string("phone", 100);
            $table->string("gender", 20);
            $table->string("marital_status", 20);
            $table->string("education", 20);
            $table->text("address");
            $table->string("ktp", 255);
            $table->string("cv", 255);
            $table->string("status", 20)->default('pending');
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
        Schema::dropIfExists('applieds');
    }
}
