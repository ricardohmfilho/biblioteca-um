<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEditionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('editions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('isbn')->nullable();
            $table->integer('publish_year')->nullable();
            $table->integer('pages')->nullable();
            $table->char('file_format', 5)->nullable();
            $table->char('is_digital', 1)->default('Y');
            $table->unsignedBigInteger('book_id')->nullable();
            $table->unsignedBigInteger('country_id')->nullable();
            $table->unsignedBigInteger('language_id')->nullable();
            $table->unsignedBigInteger('publisher_id')->nullable();
            $table->string('link_online_sales')->nullable()->comment('Link online para compra');
            $table->tinyInteger('status', 1)->default(1);
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
        Schema::dropIfExists('editions');
    }
}
