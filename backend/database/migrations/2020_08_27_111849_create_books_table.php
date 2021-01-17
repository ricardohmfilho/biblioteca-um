<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * A tabela 'livro' é uma referência a obra do autor(a) como um todo. A tabela com as edições de livro, podem se conectar a esta,
 * para ter acesso a mais informações.
 * Será particularmente útil em obras que são dividas em muitas partes.
 */

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->comment('Título no idioma dos administradores / usuários do sistema');
            $table->string('original_title')->nullable()->comment('Nome original da obra, na língua em que foi lançado');
            $table->unsignedBigInteger('language_id')->nullable()->comment('Idioma em que a obra foi lançada');
            $table->text('description')->nullable();
            $table->integer('year')->nullable()->comment('Ano que a obra foi escrita, finalizada ou lançada pela primeira vez.');
            $table->string('link_reference_one')->nullable()->comment('Link externo de referencia');
            $table->string('link_reference_two')->nullable()->comment('Link externo de referencia');
            $table->string('link_reference_three')->nullable()->comment('Link externo de referencia');
            $table->string('article_reference')->nullable()->comment('Documento falando sobre a obra');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('books');
    }
}
