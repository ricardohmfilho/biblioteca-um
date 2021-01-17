<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->string('famous_name')->nullable();

            $table->date('birth_date')->nullable();
            $table->tinyInteger('is_exact_birth_date')->default(1);

            $table->date('death_date')->nullable();
            $table->tinyInteger('is_exact_death_date')->default(1);

            $table->string('city')->nullable();
            $table->string('country_id')->nullable();
            $table->char('gender', 1)->nullable();
            $table->text('bio')->nullable();
            $table->string('image')->nullable();
            $table->string('external_reference_one')->nullable();
            $table->string('external_reference_two')->nullable();
            $table->string('external_reference_three')->nullable();
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
        Schema::dropIfExists('authors');
    }
}
